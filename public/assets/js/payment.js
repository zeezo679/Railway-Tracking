const cardNumberInput = document.getElementById('card-number');
const cardHolderInput = document.getElementById('card-holder');
const expiryInput = document.getElementById('expiry');
const cardNumberDisplay = document.getElementById('card-number-display');
const cardHolderName = document.getElementById('card-holder-name');
const validity = document.getElementById('validity');
const card = document.getElementById('card');
const cvvInput = document.getElementById('cvv');
const cvvDisplay = document.getElementById('cvv-display');

// Card Number
cardNumberInput.addEventListener('input', function() {
  let val = this.value.replace(/\D/g, '').substring(0,16);
  let display = val.replace(/(.{4})/g, '$1 ').trim();
  cardNumberDisplay.textContent = display.padEnd(19, '_');
});

// Card Holder Name
cardHolderInput.addEventListener('input', function() {
  cardHolderName.textContent = this.value ? this.value.toUpperCase() : 'YOUR NAME HERE';
});

// Expiry Date
expiryInput.addEventListener('input', function() {
  if (this.value) {
    const [year, month] = this.value.split('-');
    validity.textContent = month + '/' + year.substring(2);
  } else {
    validity.textContent = 'MM/YY';
  }
});

// CVV: Show on card back, flip card
cvvInput.addEventListener('input', function() {
  let val = this.value.replace(/\D/g, '').substring(0, 4);
  this.value = val;
  cvvDisplay.textContent = val.padEnd(3, '_');
});
cvvInput.addEventListener('focus', function() {
  card.style.transform = 'rotateY(180deg)';
});
cvvInput.addEventListener('blur', function() {
  card.style.transform = 'rotateY(0deg)';
});

// Responsive summary (safe for missing elements)
function handleResize() {
  const summaryDesktop = document.querySelector('.payment-summary-desktop');
  const summaryMobile = document.querySelector('.payment-summary-mobile');
  if (summaryDesktop && summaryMobile) {
    if (window.innerWidth < 700) {
      summaryDesktop.style.display = 'none';
      summaryMobile.style.display = 'flex';
    } else {
      summaryDesktop.style.display = 'flex';
      summaryMobile.style.display = 'none';
    }
  }
}
window.addEventListener('resize', handleResize);
window.addEventListener('DOMContentLoaded', handleResize);

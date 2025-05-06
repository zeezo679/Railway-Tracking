document.querySelectorAll('input[name="train_id"]').forEach(function(radio)
{
    radio.addEventListener('change', function()
{
    var ticketCost = parseFloat(this.getAttribute('ticket-cost')) || 0;
    var serviceCost = parseFloat(this.getAttribute('service-cost')) || 0;
    var totalCost = ticketCost + serviceCost;

    document.getElementById('ticket-cost').textContent = '$' + ticketCost.toFixed(2);
    document.getElementById('service-cost').textContent = '$' + serviceCost.toFixed(2);
    document.getElementById('total-cost').textContent = '$' + totalCost.toFixed(2);

    });
});


document.querySelectorAll('.table-content tbody tr').forEach(row => {
  row.addEventListener('click', function(e) {
    if (e.target.type !== 'radio') {
      const radio = this.querySelector('input[type="radio"]');
      if (radio)
      {
        radio.checked = true;
        radio.dispatchEvent(new Event('change', { bubbles: true }));
      }
    }
    document.querySelectorAll('.table-content tbody tr').forEach(r => r.classList.remove('selected'));
    this.classList.add('selected');
  });
  const radio = row.querySelector('input[type="radio"]');
  if (radio) {
    radio.addEventListener('click', function(e) {
      document.querySelectorAll('.table-content tbody tr').forEach(r => r.classList.remove('selected'));
      row.classList.add('selected');
      e.stopPropagation();
    });
  }
});

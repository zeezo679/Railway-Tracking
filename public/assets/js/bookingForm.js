function createPassengerFields(num) {
  const container = document.getElementById('passenger_fields_container');
  container.innerHTML = ''; // Clear previous fields

  for (let i = 1; i <= num; i++) {
    // Outer wrapper
    const wrapper = document.createElement('div');
    wrapper.className = 'passenger-details-block';
    wrapper.style.margin = '20px 0';
    wrapper.style.padding = '15px';
    wrapper.style.border = '1px solid #e6e6e6';
    wrapper.style.borderRadius = '8px';
    wrapper.style.background = '#fafbfc';

    // Header
    const header = document.createElement('h3');
    header.textContent = `Passenger ${i} Details`;
    header.style.marginBottom = '12px';
    header.style.fontSize = '1.1em';
    wrapper.appendChild(header);

    // Full Name
    const nameLabel = document.createElement('label');
    nameLabel.className = 'form-label form-label-top';
    nameLabel.textContent = 'Full Name';
    nameLabel.setAttribute('for', `passenger_${i}_fullname`);
    const nameInput = document.createElement('input');
    nameInput.type = 'text';
    nameInput.name = `passenger_${i}_fullname`;
    nameInput.id = `passenger_${i}_fullname`;
    nameInput.className = 'form-textbox';
    nameInput.style = 'width:310px; margin-bottom: 8px;';
    nameInput.required = true;
    wrapper.appendChild(nameLabel);
    wrapper.appendChild(nameInput);

    // Email
    const emailLabel = document.createElement('label');
    emailLabel.className = 'form-label form-label-top';
    emailLabel.textContent = 'Email';
    emailLabel.setAttribute('for', `passenger_${i}_email`);
    const emailInput = document.createElement('input');
    emailInput.type = 'email';
    emailInput.name = `passenger_${i}_email`;
    emailInput.id = `passenger_${i}_email`;
    emailInput.className = 'form-textbox validate[Email]';
    emailInput.style = 'width:310px; margin-bottom: 8px;';
    emailInput.required = true;
    wrapper.appendChild(emailLabel);
    wrapper.appendChild(emailInput);

    // Age
    const ageLabel = document.createElement('label');
    ageLabel.className = 'form-label form-label-top';
    ageLabel.textContent = 'Age';
    ageLabel.setAttribute('for', `passenger_${i}_age`);
    const ageInput = document.createElement('input');
    ageInput.type = 'number';
    ageInput.name = `passenger_${i}_age`;
    ageInput.id = `passenger_${i}_age`;
    ageInput.className = 'form-number-input form-textbox';
    ageInput.style = 'width:120px; margin-bottom: 8px;';
    ageInput.min = 0;
    ageInput.max = 120;
    ageInput.required = true;
    wrapper.appendChild(ageLabel);
    wrapper.appendChild(ageInput);

    // Phone Number
    const phoneLabel = document.createElement('label');
    phoneLabel.className = 'form-label form-label-top';
    phoneLabel.textContent = 'Phone Number';
    phoneLabel.setAttribute('for', `passenger_${i}_phone`);
    const phoneInput = document.createElement('input');
    phoneInput.type = 'tel';
    phoneInput.name = `passenger_${i}_phone`;
    phoneInput.id = `passenger_${i}_phone`;
    phoneInput.className = 'form-textbox mask-phone-number';
    phoneInput.style = 'width:200px; margin-bottom: 8px;';
    phoneInput.placeholder = '(000) 000-0000';
    phoneInput.required = true;
    wrapper.appendChild(phoneLabel);
    wrapper.appendChild(phoneInput);

    // Add wrapper to container
    container.appendChild(wrapper);
  }
}

// Initial call for default value
document.addEventListener('DOMContentLoaded', function() {
  const numInput = document.getElementById('num_passengers');
  createPassengerFields(numInput.value);

  numInput.addEventListener('input', function() {
    let num = parseInt(numInput.value, 10);
    if (isNaN(num) || num < 1) num = 1;
    if (num > 10) num = 10;
    createPassengerFields(num);
  });
});

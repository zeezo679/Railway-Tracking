document.querySelectorAll('input[name="train_id"]').forEach(function(radio)
{
    radio.addEventListener('change', function()
{
    var ticketCost = parseFloat(this.getAttribute('ticket-cost')) || 0;
    var serviceCost = parseFloat(this.getAttribute('service-cost')) || 0;
    var totalCost = ticketCost + serviceCost;

    document.getElementById('ticket-cost').textContent = '$' + ticketCost.toFixed(2);
    document.getElementById('service-cost').textContent = '$' + serviceCost.toFixed(2);
    document.getElementById('total-cost').textContent = totalCost.toFixed(2);

    });
});
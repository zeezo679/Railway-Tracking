<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Credit Card Form</title>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="/assets/css/payment.css" />
    <?php include 'partials/links.php'; ?>
  </head>
  <body>
  <?php include 'partials/header.php'; ?>
  <div class="payment-container">
  
    <form class="payment-form-section payForm" action="/confirm" method="POST" autocomplete="off" id="payForm">
      <div style="display:flex;align-items:center;gap:6px;margin-bottom:10px;">
        <span style="color:#206df9;"><i class="fas fa-lock"></i></span>
        <span style="font-size:0.98em;color:#206df9;">Secure Payment</span>
      </div>
      <label for="card-number">Card Number</label>
      <input type="text" id="card-number" name="card_number" maxlength="19" placeholder="1234 5678 9012 3456" required pattern="\d{4} \d{4} \d{4} \d{4}">

      <label for="card-holder">Card Holder Name</label>
      <input type="text" id="card-holder" name="card_holder" placeholder="Your Name" required>

      <div class="form-row">
        <div>
          <label for="expiry">Expiry Date</label>
          <input type="month" id="expiry" name="expiry" required>
        </div>
        <div>
          <label for="cvv">CVV</label>
          <input type="password" id="cvv" name="cvv" maxlength="4" placeholder="***" required pattern="\d{3,4}">
        </div>
      </div>
      <!-- On mobile, summary appears below form -->
      <div class="payment-summary payment-summary-mobile" style="display:none;">
        <div class="cost-label">Total Cost</div>
        <div class="cost-value" id="total-cost-mobile">$49.00</div>
        <button type="submit">Book and Receive Ticket</button>
      </div>
    </form>

    <div class="payment-card-section">
    <div class="credit-card" id="card">
  <div class="card-face card-front">
    <div class="branding">
      <img src="/assets/imgs/chip.png" class="chip-img" alt="Chip" />
      <img src="/assets/imgs/visa.png" class="visa-logo" alt="Visa" />
    </div>
    <div class="card-number" id="card-number-display">____ ____ ____ ____</div>
    <div class="details">
      <div>
        <span>Card Holder</span>
        <span id="card-holder-name">YOUR NAME HERE</span>
      </div>
      <div>
        <span>Expires</span>
        <span id="validity">MM/YY</span>
      </div>
    </div>
  </div>
  <div class="card-face card-back">
    <div class="mag-strip"></div>
    <div class="signature-cvv">
      <div class="signature"></div>
      <div class="cvv-box">
        <span>CVV</span>
        <div id="cvv-display">___</div>
      </div>
    </div>
    <img src="/assets/imgs/visa.png" class="visa-logo-back" alt="Visa" />
  </div>
</div>
          <div class="payment-summary payment-summary-desktop">
            <div class="cost-label">Total Cost</div>
            <div class="cost-value" id="total-cost">$49.00</div>
            <button type="submit" form="payForm">Book and Receive Ticket</button>
          </div>
    </div>
  </div>
    <!-- Script -->
    <script src="/assets/js/payment.js"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="/assets/css/select_train.css">
    <!-- Google Web Fonts -->

        <!-- Customized Bootstrap Stylesheet -->
        <link href="/assets/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/template/css/style.css" rel="stylesheet">
        <?php include 'partials/links.php'; ?>

    <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.62585&themeRevisionID=5f7ed99c2c2c7240ba580251"/>
</head>
<body>

<?php include 'partials/header.php'; ?>

  <form action="/payment" method="POST">
  <table class="table-content table-hover align-middle">
  <thead class="table-dark">
    <tr>
      <th>Select</th>
      <th>Train Number</th>
      <th>Train Name</th>
      <th>Train Type</th>
      <th>Departure Station</th>
      <th>Arrival Station</th>
      <th>Departure Time</th>
      <th>Arrival Time</th>
      <th>Train Class</th>
      <th>Available Seats</th>
    </tr>
  </thead>
  <tbody>
  <?php if (empty($trains) || !is_array($trains)): ?>
    <tr>
        <td colspan="10" style="text-align:center; color:#b94a48; background:#fcf8e3;">
            There are no active trains/journeys right now!
        </td>
    </tr>
<?php else: ?>
    <?php foreach ($trains as $train): ?>
        <tr>
            <td>
              <input type="radio" name="train_id"
              value="<?= $train['id'] ?>"
              ticket-cost="<?= $train['ticket_cost'] ?>"
              service-cost="<?= $train['service_cost'] ?>"
              required>
            </td>
            <td><?= htmlspecialchars($train['train_number']) ?></td>
            <td><?= htmlspecialchars($train['train_name']) ?></td>
            <td><?= htmlspecialchars($train['train_type']) ?></td>
            <td><?= htmlspecialchars($train['departure_station']) ?></td>
            <td><?= htmlspecialchars($train['arrival_station']) ?></td>
            <td><?= htmlspecialchars($train['departure_time']) ?></td>
            <td><?= htmlspecialchars($train['arrival_time']) ?></td>
            <td><?= htmlspecialchars($train['train_class']) ?></td>
            <td><?= htmlspecialchars($train['available_seats']) ?></td>
        </tr>
    <?php endforeach; ?>
<?php endif; ?>

  </tbody>
</table>
<div class="cardPay">
  <div class="cost-row">
    <span>Ticket Cost</span>
    <span id="ticket-cost">$0.00</span>
  </div>
  <div class="cost-row">
    <span>Service Cost</span>
    <span id="service-cost">$0.00</span>
  </div>
  <div class="divider"></div>
  <div class="total-label">Total Cost</div>
  <div class="total" id="total-cost">$0.00</div>

  <div class="footer-text">Ready for Take Off?</div>
    <button class="book-btn" type="submit">Confirm & Proceed to Checkout</button>
  </form>
</div>

<script src="/assets/js/select_train.js"></script>
</body>
</html>
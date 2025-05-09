
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Confirmation</title>
    <link href="/assets/template/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/confirm.css">
    <?php include 'partials/links.php'; ?>
</head>
<body>
<?php include 'partials/header.php'; ?>
  <div>
    <div class="ticket-container">
      <div id="ticket" class="pt-3 ps-2 pe-2">      
        <div class="ticket-header">
          <span class="ticket-title">Your Ticket</span>
          <span class="ticket-number">Code - <?= htmlspecialchars($booking['ticketCode']) ?></span>
        </div>
        <div class="ticket-details">
          <div class="ticket-row">
            <div class="ticket-col">
              <label>User Name</label>
              <div class="ticket-value"><?= htmlspecialchars($booking['firstName']) ?></div>
            </div>
            <div class="ticket-col">
              <label>Train Name</label>
              <div class="ticket-value"><?= htmlspecialchars($booking['train_name']) ?></div>
            </div>
          </div>
          <div class="ticket-row">
            <div class="ticket-col">
              <label>Email</label>
              <div class="ticket-value"><?= htmlspecialchars($booking['user_email']) ?></div>
            </div>
            <div class="ticket-col">
              <label>Seat Number</label>
              <div class="ticket-value"><?= htmlspecialchars($booking['seat_number']) ?></div>
            </div>
          </div>
          <div class="ticket-row">
            <div class="ticket-col">
              <label>Departure Station</label>
              <div class="ticket-value"><?= htmlspecialchars($booking['departure_station']) ?></div>
            </div>
            <div class="ticket-col">
              <label>Arrival Station</label>
              <div class="ticket-value"><?= htmlspecialchars($booking['arrival_station']) ?></div>
            </div>
          </div>
          <div class="ticket-row">
            <div class="ticket-col">
              <label>Travel Date</label>
              <div class="ticket-value">
                <?= date('m/d/Y', strtotime($booking['travel_date'])) ?>
              </div>
            </div>
            <div class="ticket-col">
              <label>Class</label>
              <div class="ticket-value">
                <?= htmlspecialchars(ucfirst($booking['class'])) ?> Class
              </div>
            </div>
          </div>
          <div class="ticket-row">
            <div class="ticket-col">
              <label>Departure Time</label>
              <div class="ticket-value">
              <?= date('l, F j, Y h:i A', strtotime($booking['departure_time'])) ?>
              </div>
            </div>
            <div class="ticket-col">
              <label>Arrival Time</label>
              <div class="ticket-value">
              <?= date('l, F j, Y h:i A', strtotime($booking['arrival_time'])) ?>

              </div>
            </div>
          </div>
          <div class="ticket-row">
            <div class="ticket-col">
              <label>Status</label>
              <div class="ticket-value status-<?= htmlspecialchars($booking['status']) ?>">
                <?= htmlspecialchars(ucfirst($booking['status'])) ?>
              </div>
              <?php if ($booking['status'] === 'pending'): ?>
                <p class='ms-1 text-danger'>please wait for admin confirm your ticket</p>
              <?php endif; ?>
            </div>
            <div class="ticket-col">
              <label>Platform</label>
              <div class="ticket-value"><?= htmlspecialchars($booking['platform_number']) ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ticket-actions">
        <button class="ticket-btn save">Save Ticket</button>
        <a href="/tracking" class="ticket-btn cancel">Track Your Train</a>
    </div>
  </div>
 <!-- html2canvas library -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<!-- Script to save ticket as image -->
<script>
  document.querySelector(".ticket-btn.save").addEventListener("click", function () {
    const ticket = document.getElementById("ticket");

    html2canvas(ticket).then(canvas => {
      const link = document.createElement("a");
      const date = new Date().toISOString().slice(0, 10);
      link.download = `Train_Ticket_YTJ47_${date}.png`;
      link.href = canvas.toDataURL("image/png");
      link.click();
    });
  });
</script>
</body>
</html>

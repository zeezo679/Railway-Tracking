<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Confirmation</title>
    <link rel="stylesheet" href="/assets/css/confirm.css">
</head>
<body>
<div class="ticket-container">
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
          <?= date('h:i A', strtotime($booking['departure_time'])) ?>
        </div>
      </div>
      <div class="ticket-col">
        <label>Arrival Time</label>
        <div class="ticket-value">
          <?= date('h:i A', strtotime($booking['arrival_time'])) ?>
        </div>
      </div>
    </div>
    <div class="ticket-row">
      <div class="ticket-col">
        <label>Status</label>
        <div class="ticket-value status-<?= htmlspecialchars($booking['status']) ?>">
          <?= htmlspecialchars(ucfirst($booking['status'])) ?>
        </div>
      </div>
      <div class="ticket-col">
        <label>Platform</label>
        <div class="ticket-value"><?= htmlspecialchars($booking['platform_number']) ?></div>
      </div>
    </div>
  </div>
  <div class="ticket-actions">
    <button class="ticket-btn save">Save Ticket</button>
    <button class="ticket-btn cancel">Track Your Train</button>
  </div>
</div>
</body>
</html>

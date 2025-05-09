<?php
$booking = [
  'train_name' => 'Train A',
  'departure_station' => 'Alexandria Railway Station',
  'arrival_station' => 'Tanta Railway Station',
  'departure_time' => '07:30',
  'arrival_time' => '11:00',
  'travel_date' => '2026-06-05'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Track Your Train</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #101d2e, #162c4b);
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
    }
    .container {
      margin-top: 60px;
    }
    .progress-bar {
      height: 25px;
      font-weight: bold;
    }
    .card {
      background: #1c2e48;
      border: none;
    }
    .card-title {
      color: #0d6efd;
    }
  </style>
</head>
<body>

<div class="container">
  <h2 class="text-center mb-4">Track Your Train</h2>

  <div class="card p-4 shadow rounded">
    <h4 class="card-title mb-3">Journey Details</h4>

    <div class="row mb-3">
      <div class="col-md-6">
        <p><strong>Train:</strong> <?= $booking['train_name'] ?></p>
        <p><strong>From:</strong> <?= $booking['departure_station'] ?></p>
        <p><strong>Departure Time:</strong> <?= $booking['departure_time'] ?> on <?= $booking['travel_date'] ?></p>
      </div>
      <div class="col-md-6">
        <p><strong>To:</strong> <?= $booking['arrival_station'] ?></p>
        <p><strong>Arrival Time:</strong> <?= $booking['arrival_time'] ?></p>
      </div>
    </div>

    <div class="mb-3">
      <p><strong>Train Progress:</strong></p>
      <div class="progress">
        <div class="progress-bar bg-success" id="progress-bar" style="width: 0%">0%</div>
      </div>
    </div>

    <p id="status-message" class="mt-3"></p>
  </div>
</div>

<script>
function updateProgress(departure, arrival) {
  const today = "<?= $booking['travel_date'] ?>";
  const now = new Date();
  const depTime = new Date(today + "T" + departure + ":00");
  const arrTime = new Date(today + "T" + arrival + ":00");

  if (now < depTime) {
    document.getElementById('progress-bar').style.width = "0%";
    document.getElementById('progress-bar').textContent = "Not departed";
    document.getElementById('status-message').textContent = "Train has not departed yet.";
  } else if (now > arrTime) {
    document.getElementById('progress-bar').style.width = "100%";
    document.getElementById('progress-bar').textContent = "Arrived";
    document.getElementById('status-message').textContent = "Train has arrived at the destination.";
  } else {
    const totalTime = arrTime - depTime;
    const elapsed = now - depTime;
    const percent = Math.floor((elapsed / totalTime) * 100);

    document.getElementById('progress-bar').style.width = percent + "%";
    document.getElementById('progress-bar').textContent = percent + "%";
    document.getElementById('status-message').textContent = "Train is en route. Estimated progress: " + percent + "%";
  }
}

updateProgress("<?= $booking['departure_time'] ?>", "<?= $booking['arrival_time'] ?>");
</script>
</body>
</html>

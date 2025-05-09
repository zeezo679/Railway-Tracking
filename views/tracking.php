<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Your Train</title>
    <?php include 'partials/links.php'; ?>
    <link rel="stylesheet" href="/assets/css/tracking.css">
</head>
<body>
    <?php include 'partials/header.php'; ?>

    <h2>Track Your Journey</h2>

<div class="tracking-container">
<div class="tracking-container">
    <?php foreach ($segments as $i => $station): ?>
        <?php
            $class = '';
            if ($i === 0) {
                $class = 'station departure';
            } elseif ($i === count($segments) - 1) {
                $class = 'station arrival';
            } elseif (isset($station['is_current']) && $station['is_current']) {
                $class = 'station current';
            } else {
                $class = 'station';
            }

            $time = $station['time'] ?? '';
            $delay = $i > 2 ? 0 : $i; // in minutes
            $delayClass = $delay > 0 ? 'delay late' : 'delay early';
        ?>
        <div class="<?= $class ?>">
            <div class="dot"></div>
            <div><?= htmlspecialchars($station['station_name']) ?></div>
            <div><?= htmlspecialchars($time) ?></div>
            <div class="<?= $delayClass ?>">+<?= $delay ?> min</div>
            <?php if ($i === 0): ?>
                <div class="label">Departure</div>
            <?php elseif ($i === count($segments) - 1): ?>
                <div class="label">Arrival</div>
            <?php elseif (isset($station['is_current']) && $station['is_current']): ?>
                <div class="label">Current</div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>
</div>

<div class="summary-container">
    <div><span class="label">Journey Time:</span> <span class="value">4h 30m</span></div>
    <div><span class="label">Total Delay:</span> <span class="value">7 min</span></div>
  </div>
</div>


<script>
  const stations = <?= json_encode($segments); ?>;
</script>

<script src="/assets/js/tracking.js"></script>

</body>
</html>
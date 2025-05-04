

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
    <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.62585&themeRevisionID=5f7ed99c2c2c7240ba580251"/>
</head>
<body>

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
  <?php foreach ($trains as $train): ?>
    <tr>
      <td>
        <input type="radio" name="train_id" value="<?= $train['id'] ?>" required>
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
  </tbody>
</table>

</body>
</html>
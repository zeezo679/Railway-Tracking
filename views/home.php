<?php
session_start();
if(!isset($_SESSION["user"])){
  header("Location: login");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomePage</title>
</head>
<body>
  <nav>
    <a href="/logout">Log Out</a>
  </nav>
  <h1>Welcome Home Page</h1>
</body>
</html>
<?php
include_once './db/connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Information Customer</h2>
  <form method="post" action="" >
    <div class="form-group">
      <label for="email">Product:</label>
      <input type="email" class="form-control" id="email" placeholder="enter Product" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Price:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter price" name="pwd">
    </div>
    <div class="form-group">
      <label for="email">describe:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter describe" name="email">
    </div><div class="form-group">
      <label for="email">producer:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter producer" name="email">
    </div><div class="form-group">
      
    <button type="submit" class="btn btn-default">Send</button>
  </form>
</div>

</body>
</html>

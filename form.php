<?php 
require_once 'baglan.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="UTF-8">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <link rel="stylesheet" href="web1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Registration Form</h2>
  <form action="islem.php" method="post">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" name="mail" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    
    <button type="submit" class="btn btn-success" name="kaydet">Submit</button>
  </form>
</div>

</body>
</html>
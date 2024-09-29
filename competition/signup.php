<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body background style="background:url('images/signup.jpg')">

<div class="container">

  <!-- Button to Open the Modal -->
 

  <!-- The Modal -->
  <div class="signup" id="signup">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
<h4 class="modal-title">REGISTER USER</h4>
</div>
        
<!-- Modal body -->
<div class="modal-body">
<form action="insreg.php" method="post" class="user">
<p>Name:</p>
<p><input type="text" id="name" name="name" /></p>
<p>email :</p>
<input type="email" id="email" name="email"><br><br>
<p>Password:</p>
<input type="text" id="password" name="password"><br><br>
<input class="btn btn-success" name="reg" type="submit" value="signup">
</form>
  </div>
  <div class="modal-footer">
          <a href="index.php"><button type="button" class="btn btn-danger" data-dismiss="login">CANCEL</button></a>
        </div>
        
</div>

</body>
</html>





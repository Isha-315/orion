<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>login page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body background style="background:url('images/login.jpg')">
   
<div class="container">
    
 
  <!-- Button to Open the Modal -->
 

  <!-- The Modal -->
  <div class="login" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">LOGIN</h4>
          <a href="index.php"><button type="button" class="close" data-dismiss="login">&times;</button></a></button>
        </div>
        
        <!-- Modal body --> 
        <div class="modal-body">
        <form action="lc.php" method="post" class="user">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-user"
                                                id="email"  placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control form-control-user"
                                                id="password" placeholder="Password">
                                        </div>
                                      
                                        
                                    <input class="btn btn-primary btn-user btn-block" type="submit" name="login" value="LOGIN"/>
                                    </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <a href="index.php"><button type="button" class="btn btn-danger" data-dismiss="login">CANCEL</button></a>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
</div>

</body>
</html>
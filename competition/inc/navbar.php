<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<div class="headertop_desc">
			<div class="account_desc">
				<ul>
<?php if(isset($_SESSION['name'])){?>
    <li><p>Welcome  <a href="#"><?php echo $_SESSION['name'];?></a></p></li>

    <li><a href="logout.php">LOGOUT</a></li>
<?php } else { ?>
	<a href="signup.php"><button type="button" class="btn btn-primary" data-target="#signup">SIGNUP</button></a>
	<a href="login.php"><button type="button" class="btn btn-success" data-target="#login">LOGIN</button></a>
                
					
                 
                    
                    <?php } ?>
				
				</ul>
			</div>
			<div class="clear"></div>
		</div>
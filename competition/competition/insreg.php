<?php session_start(); ?>
<?php include("admin/db.php"); 

if(isset($_POST['reg']))
{
$n=$_POST['name'];
$e=$_POST['email'];
$p=MD5($_POST['password']);

$ins="INSERT INTO customer SET name='$n',email='$e',password='$p'";
if($con->query($ins)){
   
    ?>
    <script>
        alert("registration done succesfully");
        window.location="index.php";
    </script>
    <?php
}
}else{
    echo "403 ACCESS DENIED";
}


?>

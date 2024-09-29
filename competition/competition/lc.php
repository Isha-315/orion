<?php session_start(); ?>
<?php include("admin/db.php"); 

if(isset($_POST['login'])){

    $e=$_POST['email'];
    $p=MD5($_POST['password']);

    $sel="SELECT * FROM customer WHERE email='$e' && password='$p' ";
    $rs=$con->query($sel);
    if($rs->num_rows>0){
        $row=$rs->fetch_assoc();
        $_SESSION['name']=$row['name'];
        $_SESSION['cid']=$row['cid'];
        header("location:index.php");
    
    }else{
        echo "INVALID LOGIN PLEASE \n";
        echo "\n CHECK YOUR EMAIL AND PASSWORD";
    }

}
?>
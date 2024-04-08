<?php
//php code for Login page
error_reporting(0);

$servername="localhost"; //local host default
$username="root"; //root is default
$password="";
$dbname="moviesflick_db"; //created database in php admin

$check= mysqli_connect($servername, $username, $password, $dbname );

if ($check) {
    //echo "Connection OK <br> <br>" ;
}
else {
    echo "Connection Faild";
}

$user=$_POST['username'];
$pass =$_POST['password'];

$data="SELECT * FROM registration_tb WHERE Username='$user' AND Password='$pass'";

$execute=mysqli_query($check,$data);
$count=mysqli_num_rows($execute);
if ($count>=1) {
   header("location:go.html");
}
else {

    $linkUrl = "http://localhost/Web_Design/MovieFlick/Login/login.html";
    $destination = "Return to Login page";
    echo " <script>alert('Your Enter Password or Email is Wrong please cheack it and Try Again !')</script> <br> <a href='$linkUrl'>$destination</a> ";
}
?>


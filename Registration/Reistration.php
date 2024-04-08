<?php 
//php code for registration page
//error_reporting(0);

$servername="localhost"; //local host default
$username="root"; //root is default
$password="";
$dbname="moviesflick_db"; //created database in php admin

$cheack= mysqli_connect($servername, $username, $password, $dbname );

if ($cheack) {
 //echo "Connection OK !" ;
}
else {
    echo "Connection Faild";
}

//getting html values
$email= $_POST['email'];
$user= $_POST['user'];
$pass= $_POST['password'];

//html values add to databse
$data= "INSERT INTO registration_tb VALUES('$email', '$user', '$pass')";

//cheak database values add
$execute = mysqli_query($cheack,$data);

if ($execute) {
    header("location:go.html");
}
else {

    $linkUrl = "http://localhost/Web_Design/MovieFlick/Registration/Registration.html";
    $destination = "Return to Registration page";
    echo " <script>alert('Your Enter Registration details is Wrong please cheack it and Try Again !')</script> <br> <a href='$linkUrl'>$destination</a> ";
}
?>
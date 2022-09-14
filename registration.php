<?php
session_start();
$con=mysqli_connect('localhost','root','Zedvee@77');
mysqli_select_db($con,'phpproject');
$name=$_POST['user'];
$password=$_POST['password'];
$full_name=$_POST['full_name'];
$age=$_POST['age'];
$S="select * from users where username='$name'";
$result=mysqli_query($con,$S);
$num=mysqli_num_rows($result);
if ($num==1){
    echo "Username already exists";
}
else{
    $reg="insert into users (username,password,full_name,age) values('$name','$password','$full_name','$age')";
    mysqli_query($con,$reg);
    echo "Registration Succesfull";
    header("Location: http://localhost/php/login.php");
}
?>

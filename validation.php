<?php
session_start();
$con=mysqli_connect('localhost','root','Zedvee@77');
mysqli_select_db($con,'phpproject');
$name=$_POST['user'];
$password=$_POST['password'];
$S="select * from users where username='$name' and password='$password'";
$result=mysqli_query($con,$S);
$num=mysqli_num_rows($result);

if ($num==1){
    while ($row = $result->fetch_assoc()) {
       $_SESSION['user']= $row['full_name'];
    }
    header("Location:home.php");
}
else{
    echo "Invalid Credentials";
}
?>

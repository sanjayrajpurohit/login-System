<?php
session_start();
$username= $_POST['username'];
$password= $_POST['password'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'logindb');
$q= "select * from users where username= '$username' && password= '$password' ";
$result= mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num==1)
{
	echo "dublicate data";
}
else
{
	$qu="insert into users(username,password) values ('$username','$password')";
	mysqli_query($con,$qu);
	echo "sign in successful";
	header('location:http://localhost/login/Login_Form.html');

}
?>
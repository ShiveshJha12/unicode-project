<?php  
$con = mysqli_connect("localhost", "root", "", "unicode") or die(mysqli_error($con));
$name= $_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$cont=$_POST['contact'];


$user_reg_query = "insert into users(name,email , password,contact) values ('$name', '$email', '$pass','$cont')";
$user_reg_submit = mysqli_query($con, $user_reg_query) or die(mysqli_error($con));
echo "User successfully inserted";
?>




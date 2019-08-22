<?php  
$con = mysqli_connect("localhost", "root", "", "unicode") or die(mysqli_error($con));

    $email=$_POST['email'];
$pass=$_POST['password'];
$select_query="select * from users where email='$email' && password='$pass'";
$result=  mysqli_query($con, $select_query) or die(mysqli_error($con));
$num=  mysqli_num_rows($result);

if ($num==1){
    echo "Login was successful.";
   // header('location:index.php');
}
    

 else {
    echo "Incorrect id or password.";    
}




?>


<?php
$conn=mysqli_connect("localhost","root","","ecom");
if(isset($_REQUEST['sign'])){
 $name = $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $pswd = $_REQUEST['password'];
$hpassword = password_hash($pswd, PASSWORD_DEFAULT);
 $sql = "Select * from etab where email='$email'";
 $query=mysqli_query($conn, $sql);
 $res = mysqli_num_rows($query);
 if($res==1){
 	 header("location:signup.html");
 }else{
 $sql = "INSERT INTO `etab` (`name`, `email`, `password`) VALUES ('$name', '$email', '$hpassword')";
 mysqli_query($conn,$sql);
 header("location:signup.html");
 }
}
?>
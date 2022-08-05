<?php
session_start();
$username="root";
$servername="localhost";
$dbname="ecom";
$dbpassword='';

$conn=mysqli_connect($servername,$username,$dbpassword,$dbname);

if(!$conn){
	echo "Connection failure";
}
// echo "Connected to db";



if($_SERVER["REQUEST_METHOD"]=="POST"){
	$p=$q ="";
	$p=$_POST['email'];
	$q=$_POST['password'];
}
echo $p;
echo $q;

// $temp = "SELECT * FROM `etab` WHERE email='$p'";
$result=mysqli_query($conn,"SELECT * FROM etab WHERE email='$p'") -> fetch_assoc() or die("failed");
// $row = fetch_assoc($result);

  if ($result['password']=$_POST['password'] ) {
      echo 'Password Verified!';
      $_SESSION['email']=$p;
      $_SESSION['status']=true;
      header("Refresh:0;url=e-com.php");
  } else {
      echo 'Incorrect Password!';
  }


?>
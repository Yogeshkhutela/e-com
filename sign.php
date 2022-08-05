




<?php

$username="root";
$servername="localhost";
$dbname="ecom";
$dbpassword='';
$y="";
$p="";
$x = $z= $a= "";
$x=$_POST["name"];
$y=$_POST["email"];
$z=$_POST["password"];
$conn=mysqli_connect($servername,$username,$dbpassword,$dbname);

if(!$conn){
    echo "Connection failure";
}
// echo "Connected to db";

$c = mysqli_query($conn, "SELECT * FROM `etab` WHERE email='$y'");
if (mysqli_num_rows($c)>0){
    echo "User already exists!";
    
}

else{
    if($_SERVER["REQUEST_METHOD"]==="POST"){
    
    // $a = password_hash($z, PASSWORD_DEFAULT);
    // echo $x."<br>";
    // echo $y."<br>";
    // echo $a."<br>";

    $temp="INSERT INTO etab( name, email, password) VALUES ('$x', '$y', '$z')";


    mysqli_query($conn,$temp) or die ("Not connected");
    header("Refresh:0;url=signup.php");
}
}
?>
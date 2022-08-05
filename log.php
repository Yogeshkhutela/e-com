<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    echo "'connection failed";
}

if($_SERVER['REQUEST_METHOD']=='POST');
{
    $p = $_POST['email'];
    $q = $_POST['password'];
}
$x1="SELECT * from `etab` WHERE email='$p'";
$temp=mysqli_query($conn,$x1);
$result=mysqli_fetch_assoc($temp);
// $name=$result['name'];
$email=$result['email'];
$pswd=$result['password'];
echo $pswd;

$verify=password_verify($q,$pswd);
// if($verify){
//     echo "verify successfully";
// }else{
//     echo "failed";
// }


if($verify== true) {
      echo "VALID password for the informed HASH!<br>"; 
      var_dump($verify);
   } else {
      echo "INVALID password for the informed HASH!<br>";     
      var_dump($verify);    
   }
?>
<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "test";

$conn= mysqli_connect($host,$user,$password,$dbname);
if(!$conn){
    echo"Connection not successful";
};

$email=$_POST["email"];
$pass=$_POST["password"];

$sql= "SELECT* FROM users WHERE email='$email' AND password='$pass'";
$result= mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);

if($row['role']=='admin'){
    header("Location: homepage.html");
}else{
    header("Location: homepage.html");
}
    exit();
}else{
    echo"Invalid username or password";
};
?>
<?php
$host="localhost";
$user="root";
$password="";
$dbname="test";

if($_SERVER['REQUEST_METHOD']=='POST'){
$username= $_POST['username'];
$email= $_POST['email'];
$age= $_POST['age'];
$pass= $_POST['password'];
$terms= $_POST['terms'] ? 1:0;

if(empty($username) || empty($email) || empty($age) || empty($pass)){
    echo"All fields must be filled";
};
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo"Enter a valid email";
};
if(strlen($pass)<6){
    die("Password must be above six characters");
}

$conn=mysqli_connect($host,$user,$password,$dbname);
if(!$conn){
    die("Connection not successful");
}
echo"Connection successful";

$sql="INSERT INTO users(username,email,age,password,terms)VALUES('$username','$email','$age','$pass','$terms')";
if(mysqli_query($conn,$sql)){
    header("Location: homepage.html");
    exit();
}else{
    echo"Error saving the data";
};
};
?>
<?php
$host="localhost";
$user="root";
$password="";
$dbname="test";

$conn= mysqli_connect($host,$user,$password,$dbname);
if(!$conn){
    echo"Connection not successful";
}else{
    echo"Your connection was successful";
};

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $username= $_POST['username'];
    $email= $_POST['email'];
    $issue= $_POST['issues'];
    $location= $_POST['location'];
    $description= $_POST['description'];

    $sql="INSERT INTO issues(username,email,issue,location,description)VALUES('$username','$email','$issue','$location','$description')";
    if(mysqli_query($conn,$sql)){
        header("Location: resources.php");
        exit();
    }else
        echo"Data not saved";
    
};
?>
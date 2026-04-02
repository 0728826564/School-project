<?php
$host="localhost";
$user="root";
$password="";
$dbname="test";

$conn = mysqli_connect($host,$user,$password,$dbname);

if(!$conn){
    die("Connection failed");
}

$sql="SELECT * FROM issues";
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Reported Issues</title>
<link rel="stylesheet" href="resources.css">
</head>

<body>

<h2>Reported Issues</h2>

<table border="1" class="tbl">
<tr>
<th>Username</th>
<th>Email</th>
<th>Issue</th>
<th>Location</th>
<th>Description</th>
</tr>

<?php
if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result)){

echo "<tr>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['issue']."</td>";
echo "<td>".$row['location']."</td>";
echo "<td>".$row['description']."</td>";
echo "</tr>";

}

}else{
echo "<tr><td colspan='5'>No issues reported</td></tr>";
}
?>

</table>

</body>
</html>
<?php 

$host = 'localhost';
$username = 'id2275237_mash';
$db = 'id2275237_hostels';
$pass = 'your_password_here';

$con = mysqli_connect($host,$username,$pass,$db) or die("sorry! can't connect");

if (mysqli_connect_error($con)){

	echo "failed to connect to the database".mysqli_connect_error();
}

$name= $_POST['Name'];
$pos= $_POST['Position'];
$team= $_POST['Team'];

$sql = "INSERT INTO hostels(Name,Position,Team) VALUES('$name','$pos','$team')";

$result = mysqli_query($con,$sql);

if($result){
echo ('successful');
} else {
echo ('not successful');
}
mysqli_close($con);
?>
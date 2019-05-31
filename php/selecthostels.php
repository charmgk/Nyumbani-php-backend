<?php 
$host = 'localhost';
$username = 'id2275237_mash';
$db = 'id2275237_hostels';
$pass = 'your_password_here';

$con = mysqli_connect($host,$username,$pass,$db) or die("sorry! can't connect");

if (mysqli_connect_error($con)){

	echo "failed to connect to the database".mysqli_connect_error();
}

$sql = "SELECT * FROM hostels";

$result = mysqli_query($con,$sql);

if($result){
while ($row=mysqli_fetch_array($result)) {
	$flag[]=$row;
}
print(json_encode($flag));
}
mysqli_close($con);
 ?>
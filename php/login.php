<?php  
 $db_name = "id2275237_hostels";  
 $mysql_user = "id2275237_mash";  
 $mysql_pass = "achieverno1";  
 $server_name = "localhost";  

 $con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);    


 $user_name = $_POST["login_name"];  
 $user_pass =  $_POST["login_pass"];  
 
 $sql_query = "select user_name from reg_info where user_name like '$user_name' and user_pass like '$user_pass';";  
 $result = mysqli_query($con,$sql_query);  
 if(mysqli_num_rows($result) >0 )  
 {  
 $row = mysqli_fetch_assoc($result);  
 $name =$row["user_name"];  
 echo "Login Success..Welcome ".$name;  
 }  
 else  
 {   
 echo "Login Failed.......Try Again..";  
 }  
 ?>
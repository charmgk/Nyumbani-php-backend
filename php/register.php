<?php  
 $db_name = "id2275237_hostels";  
 $mysql_user = "id2275237_mash";  
 $mysql_pass = "your_password_here";  
 $server_name = "localhost";  

 $con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);  


 $email=$_POST["email"];  
 $user_name=$_POST["user_name"];  
 $user_pass=$_POST["user_pass"];  
 

if($user_name !=''||$user_pass !=''||$email !=''){

 $sql_query=mysqli_query($con, "INSERT INTO reg_info(email, user_name, user_pass)
 values('$email','$user_name','$user_pass')");
 mysqli_query($con, $sql_query);

 if (mysql_query($con,$sql_query)) {
   /*	echo "successful!";*/
   }  
   else{
   	/*echo "Insertion error".mysql_error($con);*/
   }
} else{

		/*echo "Insertion error".mysql_error($con);*/
}

   mysqli_close($connection);
 ?>
<?php  
 $db_name = "id2275237_hostels";  
 $mysql_user = "id2275237_mash";  
 $mysql_pass = "your_password_here";  
 $server_name = "localhost";  


 $con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);  

 
 $user_name=$_POST["user_name"];  
 $user_mess=$_POST["user_mess"];  
 

if($user_name !=''||$user_mess !=''){

 $sql_query=mysqli_query($con, "INSERT INTO chats (user_name, user_mess)
 values('$user_name','$user_mess')");
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
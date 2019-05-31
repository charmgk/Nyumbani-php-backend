<?php  
 $db_name = "id2275237_hostels";  
 $mysql_user = "id2275237_mash";  
 $mysql_pass = "your_password_here";  
 $server_name = "localhost";   

 $con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);  


 $hstl_name=$_POST["hstl_name"];  
 $hstl_type=$_POST["hstl_type"];  
/* $hstl_location=$_POST["hstl_location"];  */
 $available_rooms=$_POST["available_rooms"];
 $hstl_price=$_POST["hstl_price"];   
 $image_url= 'https://nyumbanii.000webhostapp.com/pictures/3.jpg';
 

if($hstl_name !=''||$hstl_type !=''||$available_rooms !=''){

 $sql_query=mysqli_query($con, "INSERT INTO all_hostels(image_title, hostel_type,available_rooms, image_url, price )
 values('$hstl_name','$hstl_type','$available_rooms','$image_url','$hstl_price')");
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
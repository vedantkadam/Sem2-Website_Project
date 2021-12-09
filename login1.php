
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="contactme";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $first_name = $_POST['n'];
	 $last_name = $_POST['e'];
	 $gender = $_POST['num'];
	 $email = $_POST['message'];
	 

	 $sql_query = "INSERT INTO login (name, email ,number,message)
	 VALUES ('$first_name','$last_name','$gender','$email')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
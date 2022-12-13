<?php 
$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password);
if(!$con)
{
    echo "Connection Failed";
}
else {
    $id = $_GET['update'];
    $sql = "SELECT * FROM `form`.`contact` WHERE ID = $id";
   $result = $con->query($sql);
   $row = $result -> fetch_assoc();


   if(isset($_POST['submit'])){
	$name=$_POST['fullname'];
	$email=$_POST['email'];
	$message=$_POST['message'];
$query = "UPDATE `form`.`contact` SET Name='".$name."' , Email='".$email."', Message='".$message."' WHERE ID = $id";

if($con->query($query)){
	
	header("location: fetch.php");
}
}
}







?>

<html>
	<body>
		<form action="" method="post">
			Full_name:<input type="text" name="fullname" value="<?php echo $row['Name'] ?>"><br>
			email:<input type="text" name="email" value="<?php echo $row['Email'] ?>"><br>
			message:<input type="text" name="message" value="<?php echo $row['Message'] ?>"><br>
			<input type="submit" name="submit">
		</form>
	</body>
</html>
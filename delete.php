<?php
   
$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password);
if(!$con)
{
    echo "Connection Failed";
}
else{
    $id = $_GET['delete'];
    $sql = "DELETE FROM `form`.`contact` WHERE ID='$id'";
    $con->query($sql);
    header('Location: fetch.php');    
}

?>
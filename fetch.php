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
   $sql = "SELECT * FROM `form`.`contact`";
   $result = $con->query($sql);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch data from database in php</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 ">Fetch Data From Database in PHP</h2>
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th> ID </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Message </th>
                            <th> Action </th>
                        </tr>
                        <?php
                        while($row = $result -> fetch_assoc()){
                            ?>
                             <tr>
                             <td><?php echo $row['ID'] ?></td>
                             <td><?php echo $row['Name'] ?></td>
                             <td><?php echo $row['Email'] ?></td>
                             <td><?php echo $row['Message'] ?></td>
                             <td><a href="update.php?update=<?php echo $row['ID']; ?>">Edit</a> / <a href="delete.php?delete=<?php echo $row['ID']?>">Delete</a></td>
        
                             </tr><?php
                        }
                        ?>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


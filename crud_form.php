<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <form action="" method = "post">
    <div class="mb-3 mt-3">
      <label for="fullname"></label>
      <input type="text" class="form-control" id="fullname" placeholder="Your Name" name="fullname">
    </div>
    <div class="mb-3">
      <label for="email"></label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="mb-3">
      <label for="message"></label>
      <input type="text" class="form-control" id="message" placeholder="Message" name="message">
    </div>
    <input type="submit" name = "submit" class="btn" value = "GET IN TOUCH">
    <!-- <button type="submit" class="btn" >GET IN TOUCH</button> -->
  </form>

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
    echo "Connection Successful";
}
if(isset($_POST['submit']))
{
    $name = $_POST['fullname'];
     $email = $_POST['email'];
    $message = $_POST['message'];
   echo "Button Clicked";
   
    $sql = "INSERT INTO `form`.`contact`(`Name`,`Email`,`Message`) VALUES ('$name', '$email', '$message')";
    if($con->query($sql))
    {
        
        echo "Data Added";
    }
    else
    {
        echo "Data not Added";
    }
}


?>

</body>
</html>
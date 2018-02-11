<?php
session_start();
if(isset($_GET['name']))
{$l=$_GET['name'];
  $servername = "sql108.epizy.com";
$username = "epiz_21513852";
$password = "C5rSoZBV5a36";
$dbname = "epiz_21513852_shubham";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $aad=$_SESSION['Aadhar'];
$sql = "UPDATE Patients SET Symptoms='$l' WHERE Aadhar='$aad'";

if ($conn->query($sql) === TRUE) {
    echo "Symptoms Updated";
  $error_message1="true";
} else {
    echo "Error updating record: " . $conn->error;
}

 
}
if(!empty($_POST["book"]))
{
$servername = "sql108.epizy.com";
$username = "epiz_21513852";
$password = "C5rSoZBV5a36";
$dbname = "epiz_21513852_shubham";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$t=$_POST['app'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $aa=$_SESSION['Aadhar'];
$sql = "UPDATE Patients SET Appointment='$t' WHERE Aadhar='$aa'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  $error_message1="true";
} else {
    echo "Error updating record: " . $conn->error;
}

}

?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <?php if(isset($error_message1)) { ?>	

<div class="container">
  <h2><?php if(isset($error_message1)) echo "Alert"; ?> </h2>
  
  <div class="alert alert-success alert-dismissable fade in">
    
    <strong> <?php if(isset($error_message1)) echo "Success" ?></strong> <?php if(isset($error_message1)) echo "You have Successfully Registered" ?>
    <a href="/index.php" ><?php if(isset($error_message1)) echo "Click Here"  ?> </a>  
  </div>
  
</div>
<?php } ?>

<form action="" method="post">
<?php if(!isset($error_message1))  echo "Symptoms Found:" ?><h2> <?php if(!isset($error_message1))  echo $l ?></h2>
<?php if(!isset($error_message1)) echo   "Select Appointment Date:"?>  <div ><input type="datetime-local" name="app"><br></div>
  <input type="submit" value="Send" name="book">
</form>


</body>
</html>
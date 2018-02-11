<?php
session_start();
$rno=$_SESSION['otp'];
$urno=$_POST['otpvalue'];
if(!strcmp($rno,$urno))
{
$success="You have registered"; 
$name = $_SESSION['name'];
$Age = $_SESSION['Age']; 
$Phone = $_SESSION['Phone'];
$Aadhar1 = $_SESSION['Aadhar'];
$Gender = $_SESSION['Gender'];
$pass=$_SESSION['pass'];
$servername = "sql108.epizy.com";
$username = "epiz_21513852";
$password = "C5rSoZBV5a36";
$dbname = "epiz_21513852_shubham";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO Patients (Name,Age,Phone,Aadhar,Gender,Password) VALUES ('$name','$Age','$Phone','$Aadhar1','$Gender','$pass')";
if ($conn->query($sql) === TRUE) 
{ 
 header( "Location: success.php" ); 
}
else
{
  echo "Error";

}
$conn->close();
}
?>
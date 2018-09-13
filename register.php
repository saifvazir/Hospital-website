<?php
// define variables and set to empty values
$pass= $email=$uname=$phone="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uname=$_POST["uname"];
  $email=$_POST["email"];
  $phone=$_POST["mobile"];
  $pass=md5($_POST["pwd"]);
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname="hosp_proj";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$stmt = $conn->prepare("INSERT INTO user(uname, email, mobile,pwd) VALUES (?, ?, ?,?)");
$stmt->bind_param("ssss", $uname, $email, $phone,$pass);

// set parameters and execute
$stmt->execute();
echo "<script> window.alert('Congrats, you have registered successfully');
             window.location='index.html';
          </script>";

$stmt->close();
$conn->close();

?>



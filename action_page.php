<?php
// define variables and set to empty values
$dname= $pname=$email=$query="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $dname=$_POST["dname"];
  $pname=$_POST["pname"];
  $email=$_POST["email"];
  $query=$_POST["query"];
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
$stmt = $conn->prepare("INSERT INTO appointment(email,query,dname,pname) VALUES (?, ?, ?,?)");
$stmt->bind_param("ssss", $email, $query, $dname,$pname);

// set parameters and execute
$stmt->execute();
echo "<script> window.alert('Your appointment has been recorded');
             window.location='homepage.php';
          </script>";

$stmt->close();
$conn->close();

?>



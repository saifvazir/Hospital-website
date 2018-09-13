<?php
include("config.php");

$uname = $pass= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $email=$_POST["email"];
   $pass=md5($_POST["pwd"]);
}
$sql = "SELECT uname FROM user WHERE email = '$email' and pwd = '$pass'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
        if($name=="admin")
          {
            header("location: adminhomepage.php");
          }
        else{
             header("location:homepage.php");
        }

    }
    else{
      echo "<script> window.alert('Invalid username or password');
             window.location='index.html';
          </script>";

    }

?>


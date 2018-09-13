<?php
include("config.php");
$name="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["search"];
}

$query = "SELECT name,price,available FROM medicines where name=?";

if ($stmt = $db->prepare($query)) {
 $stmt->bind_param("s",$name);
 $stmt->execute();
 $stmt->bind_result($name,$price,$available);
 $table2 = <<< TABLE
<table border="1">
  <thead><tr>
   <th>Name</th><th>Price</th><th>Available</th>
  </tr></thead>
  <tbody>
TABLE;

 while ($stmt->fetch()) {

  $table2 .= "<tr><td width='100' height='100'>$name</td><td width='100' height='100'>$price</td><td width='100' height='100'>$available</td></tr>";
 }
 $table2 .= "</tbody></table>";

 $stmt->close();
} else {
  printf("Prepared Statement Error: %s\n", $db->error);
}

?>
<!DOCTYPE html>
<html>
<title>VJ Hospital</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="\project\images\avatar.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>PROFILE</b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="homepage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>PROFILE</a> 
    <a href="searchpage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>Doctors</a> 
    <a href="searchpage1.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>Medicines</a> 
    <a href="index.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>LOGOUT</a> 
  </div>
  
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
      <h1><b>Search for Medicines!</b></h1>
        <form method="post" action="searchpage1.php">
      <input type="text" name="search" placeholder="Search..">
      <input type="submit" name="Search" onClick="show2()" >
      </form>
      <div id='div1' style.display="none">

      <?php echo $table2;
      ?>
    </div>
    </div>
  </div>
  </header>
  
  


<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

function show2(){
  document.getElementById('div1').style.display = 'block';
}
</script>



</body>
</html>
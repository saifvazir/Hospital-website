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
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>PROFILE</a> 
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
    <h1><b>Doctors, Medicines and More!</b></h1>
    <!--<div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <button class="w3-button w3-black">ALL</button>
      <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>SCIENCE</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>TECH</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>ART</button>
    </div>-->
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/hosp_proj/images/t1.jpg" alt="Dr. Smith" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Dr. Smith</b></p>
        <p>General physician</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/hosp_proj/images/t2.jpg" alt="Dr. Maynard" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Dr. Maynard</b></p>
        <p>Surgeon</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="/hosp_proj/images/t3.jpg" alt="Dr. Lee" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Dr. Lee</b></p>
        <p>Orthopaedic</p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/hosp_proj/images/g1.jpg" alt="facility1" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Multi Speciality Lab</b></p>
        <p>Top notch medical instruments</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/hosp_proj/images/g2.jpg" alt="facility2" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Dentistry Department</b></p>
        <p>Special dentistry department headed by Dr. Nath</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="/hosp_proj/images/g3.jpg" alt="facility3" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Neuro-surgery lab</b></p>
        <p>Neuroscience lab headed by Dr. Varma</p>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">Â«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">Â»</a>
    </div>
  </div>

  
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Appointment form</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>admin@vjhospital.com</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>512312311</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name of Doctor</label>
        <input class="w3-input w3-border" type="text" name="DName" required>
      </div>
      <div class="w3-section">
        <label>Name of Patient</label>
        <input class="w3-input w3-border" type="text" name="PName" required>
      </div>
      <div class="w3-section">
        <label> Your Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Any other queries</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>


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
</script>

</body>
</html>
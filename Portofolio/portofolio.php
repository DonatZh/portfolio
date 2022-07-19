<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>donatzhaveli</title>
	<link rel="stylesheet" href="style.css">	
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">  
</head>
<body>
    <nav class="navv">
  <a href="javascript:void(0)" onclick="closeNav()">
    <i class="fa fa-remove"></i>
  </a>
  <div class="nav">
    <a href="#" onclick="closeNav()">Home</a>
    <a href="#portfolio"  onclick="closeNav()">Portfolio</a>
    <a href="#about" onclick="closeNav()">About</a>
    <a href="#contact"  onclick="closeNav()">Contact</a>
  </div>
</nav>
<header class="header" id="home">
    <h1 class="w3-jumbo"><b>Donat Zhaveli</b></h1>
    <p>Web developer and Web Designer.</p>
    <img src="/images/profil.jpg" id="img"style="width="1000" height="1333">
  </header>
    <h2 class="h2">My Portfolio</h2>
    <hr class="w3-opacity">
      <div class="portf">
        <img src="/images/warleague.jpg" style="width:100%">
        <img src="/images/thunderteck.jpg" style="width:100%">
        <img src="/images/hypex.jpg" style="width:100%">
        <img src="/images/triangle.jpg" style="width:100%">
      </div>
    </div>
  </div>
  <div class="about">
    <h2>About</h2>
    <hr class="h3">
    <p>
  "Computer Science Student with passion for programming.Always enthusiast and motivated to learn and work on new thing mostly dedicated on web development and web design"
    </p>
    <h3 class="h4">My Skills</h3>
    <p class="w3-wide">web development</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:95%">95%</div>
    </div>
    <p class="w3-wide">Web Design</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:85%">85%</div>
    </div>
    <p class="w3-wide">Programming</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:80%">80%</div>
    </div><br>
     <div class="w3-padding-32 w3-content w3-text-grey" id="contact" style="margin-bottom:64px">
    <h2>Contact Me</h2>
    <hr class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Pristina, KS</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 045692413</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: zhavelid@gmail.com</p>
    </div>
    <p>Lets get in touch. Send me a message:</p>
    <form action="" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  </div>
  <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin:-24px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </footer>
</div> 
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "60%";
  document.getElementById("mySidebar").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>
</html>












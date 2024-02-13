<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ACEMCP - GUIDES</title>
  <link rel="shortcut icon" href="../icons/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
</head>

<body>


<nav class="navbar">
  <div class="container">
  <span class="navbar-brand">Ace Medical Center Palawan</span>
    <div class="row">
    <ul class="navlist">
        <li><a class="nav-item" href="http://localhost/TP_Web/Tutorial_Web_App/">Home</a></li>
        <li><a class="nav-item" href="http://10.0.10.10/directory/">Contacts</a></li>
        
      </ul>
    </div>
      
    
  
  </div>
</nav>

<h1>BizBox Hospital Information System Guidelines</h1>

<div class="container heading">
  <div class="row">
    <div class="col-6">
    <h2>Ace Medical Employee's Guidelines</h2>  
<p class="description">This document outlines how to effectively utilize and maximize all features of the BizBox Hospital Information System.
   Please review these guidelines carefully to ensure proper implementation.
</p>
    </div>
    <div class="col">
    <img class="img header" src="photo_his_1.png" alt="Image of Bizbox" >
    </div>
  </div>
  <hr>
  <div class="container body">
    <div class="row">
    <h2>Guidelines</h2>
<p>Click on the buttons inside the tabbed menu:</p>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Adding New Patient OPD/ER</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Charging</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Discharge</button>
</div>

<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

</body>
</html>
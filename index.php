<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ACEMCP - GUIDES</title>
  <link rel="shortcut icon" href="icons/favicon.ico">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="#"><img class="navbrandico" src="icons/2.png" alt="" >ACE MEDICAL CENTER PALAWAN</a>
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://10.0.10.10/directory">Directory</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://10.0.10.10/hmo/">HMO</a>
          </li>

        </ul>
      
      </div>
 
    </div>

  </nav>
  
  <h1>Services And Process Systems Info</h1>

  <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <section class="content demo">
    <div class="row">
      <div class="col 1">
        <div class="card-hghlght demo-card" id="HIS">
          <div class="card-body m-5">
            <div class="text">
              <h2>HEALTH INFORMATION SYSTEM</h2>
              <h6>Health <br>Information System Guidelines
              </h6>
              <button class="button-35" role="button" onclick="document.location='HIS/HOME_HIS.php'">Go to Site</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col 2">
        <div class="card-hghlght demo-card">
          <div class="card-body m-5">
            <h2>MATERIALS MANAGEMENT SYSTEM</h2>
            <h6>Materials Management System Guidelines
            </h6>
            <button class="button-35" role="button">Go to Site</button>
          </div>
        </div>
      </div>
      <div class="col 3">
        <div class="card-hghlght demo-card">
          <div class="card-body m-5">
            <h2>FINANCIAL MANAGEMENT SYSTEM</h2>
            <h6>Financial Management System Guidelines
            </h6>
            <button class="button-35" role="button">Go to Site</button>
          </div>
        </div>
      </div>
      <div class="col 4">
        <div class="card-hghlght demo-card">
          <div class="card-body m-5">
            <h2>PHILHEALTH INFORMATION SYSTEM</h2>
            <h6>PhilHealth Information <br>System Guidelines
            </h6>
            <button class="button-35" role="button">Go to Site</button>
          </div>
        </div>
      </div>
      <div class="col 5">
        <div class="card-hghlght demo-card" id="HIS">
          <div class="card-body m-5">
            <h2>PRICE UPDATE REQUISITION</h2>
            <h6>Health Information System Guidelines
            </h6>
            <a href="http://10.0.1.3/price_update_requisition/login_form.html"><button class="button-35" role="button">Go to Site</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>


</html>
<?php
include("./functions/setup.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Sentinel
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="index.php" >
        <img src="./assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" >
        <span class="ms-1 font-weight-bold">Sentinel</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/tables.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tablas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/Gestor_accidentes.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Accidentes</span>
          </a>
        </li>
        
        
       
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/profile.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/sign-in.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/sign-up.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Ingresar</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="./assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   
    <!-- End Navbar -->
        
        <?php
        
        
                    //Alertas diarias
                    $sql="SELECT COUNT(*) AS dia FROM Alerta WHERE DATE(fecha) = CURDATE()";
                    $result=mysqli_query(conexion(),$sql);
                    $datos = mysqli_fetch_array($result);
                    //Alertas diarias ayer
                    $sqla="SELECT COUNT(*) AS dia FROM Alerta WHERE DATE(fecha) = CURDATE()-1";
                    $resulta=mysqli_query(conexion(),$sqla);
                    $datosa = mysqli_fetch_array($resulta);
                    //Alertas semanales
                    $sql1= "SELECT COUNT(*) AS semana FROM Alerta WHERE YEARWEEK(fecha, 1) = YEARWEEK(CURDATE(), 1)";
                    $result1=mysqli_query(conexion(),$sql1);
                    $datos1 = mysqli_fetch_array($result1);
                    //Alertas semana pasdada
                    $sql1a= "SELECT COUNT(*) AS semana FROM Alerta WHERE YEARWEEK(fecha, 1) = YEARWEEK(CURDATE(), 1)-1";
                    $result1a=mysqli_query(conexion(),$sql1a);
                    $datos1a = mysqli_fetch_array($result1a);
                    //Alertas mensuales
                    $sql2=  "SELECT COUNT(*) AS mes FROM Alerta WHERE MONTH(fecha) = MONTH(CURDATE()) AND YEAR(fecha) = YEAR(CURDATE())";
                    $result2=mysqli_query(conexion(),$sql2);
                    $datos2 = mysqli_fetch_array($result2);
                     //Alertas mes pasado
                    $sql2a=  "SELECT COUNT(*) AS mes FROM Alerta WHERE MONTH(fecha) = MONTH(CURDATE())-1 AND YEAR(fecha) = YEAR(CURDATE());";
                    $result2a=mysqli_query(conexion(),$sql2a);
                    $datos2a = mysqli_fetch_array($result2a);
                     //Alertas mes -2
                    $sql2b=  "SELECT COUNT(*) AS mes FROM Alerta WHERE MONTH(fecha) = MONTH(CURDATE())-2 AND YEAR(fecha) = YEAR(CURDATE());";
                    $result2b=mysqli_query(conexion(),$sql2b);
                    $datos2b = mysqli_fetch_array($result2b);
                      //Alertas mes -3
                    $sql2c=  "SELECT COUNT(*) AS mes FROM Alerta WHERE MONTH(fecha) = MONTH(CURDATE())-3 AND YEAR(fecha) = YEAR(CURDATE());";
                    $result2c=mysqli_query(conexion(),$sql2c);
                    $datos2c = mysqli_fetch_array($result2c);
                      //Alertas mes -4
                    $sql2d=  "SELECT COUNT(*) AS mes FROM Alerta WHERE MONTH(fecha) = MONTH(CURDATE())-4 AND YEAR(fecha) = YEAR(CURDATE());";
                    $result2d=mysqli_query(conexion(),$sql2d);
                    $datos2d = mysqli_fetch_array($result2d);
                     //Alertas mes -5
                    $sql2e=  "SELECT COUNT(*) AS mes FROM Alerta WHERE MONTH(fecha) = MONTH(CURDATE())-5 AND YEAR(fecha) = YEAR(CURDATE());";
                    $result2e=mysqli_query(conexion(),$sql2e);
                    $datos2e = mysqli_fetch_array($result2e);
                    //Alertas mes -6
                    $sql2f=  "SELECT COUNT(*) AS mes FROM Alerta WHERE MONTH(fecha) = MONTH(CURDATE())-6 AND YEAR(fecha) = YEAR(CURDATE());";
                    $result2f=mysqli_query(conexion(),$sql2f);
                    $datos2f = mysqli_fetch_array($result2f);
                    //alertas anuales
                    $sql3=  "SELECT COUNT(*) AS ano FROM Alerta WHERE YEAR(fecha) = YEAR(CURDATE())";
                    $result3=mysqli_query(conexion(),$sql3);
                    $datos3 = mysqli_fetch_array($result3);
                     //alertas ano pasado
                    $sql3a=  "SELECT COUNT(*) AS ano FROM Alerta WHERE YEAR(fecha) = YEAR(CURDATE())-1";
                    $result3a=mysqli_query(conexion(),$sql3a);
                    $datos3a = mysqli_fetch_array($result3a);
                    
                   
                 
     ?>
 
    <div class="container-fluid py-4">
      <div class="row">
           
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Alertas Diarias</p>
                    <h5 class="font-weight-bolder">
                      <?php echo $datos["dia"]; ?>
                    </h5>
                    <p class="mb-0">
                        <?php if($datos["dia"]<$datosa["dia"]){?>
                      <span class="text-success text-sm font-weight-bolder">- <?php echo($datosa["dia"]-$datos["dia"]); ?> </span>
                        alertas que ayer
                       <?php }if($datos["dia"]>$datosa["dia"]){?>
                        <span class="text-danger text-sm font-weight-bolder">+ <?php echo($datos["dia"]-$datosa["dia"]); ?></span>
                        alertas que ayer
                       <?php }if($datos["dia"]==$datosa["dia"]){?>
                        <span class="text-success text-sm font-weight-bolder"> Igual</span>
                         que ayer
                       <?php }?>
                      
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-bell-55 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Alertas Semanales</p>
                    <h5 class="font-weight-bolder">
                      <?php echo $datos1["semana"]; ?>
                    </h5>
                    <p class="mb-0">
                       <?php if($datos1["semana"]<$datos1a["semana"]){?>
                      <span class="text-success text-sm font-weight-bolder">- <?php echo($datos1a["semana"]-$datos1["semana"]); ?> </span>
                       que la semana pasada
                       <?php }if($datos1["semana"]>$datos1a["semana"]){?>
                        <span class="text-danger text-sm font-weight-bolder">+ <?php echo($datos1["semana"]-$datos1a["semana"]); ?></span>
                        que la semana pasada
                       <?php }if($datos1["semana"]==$datos1a["semana"]){?>
                        <span class="text-success text-sm font-weight-bolder"> Igual</span>
                         que la semana pasada
                       <?php }?>
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-calendar-grid-58 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Alertas Mensuales</p>
                    <h5 class="font-weight-bolder">
                      <?php echo $datos2["mes"]; ?>
                    </h5>
                    <p class="mb-0">
                       <?php if($datos2["mes"]<$datos2a["mes"]){?>
                      <span class="text-success text-sm font-weight-bolder">- <?php echo($datos2a["mes"]-$datos2["mes"]); ?> </span>
                       que el mes pasado
                       <?php }if($datos2["mes"]>$datos2a["mes"]){?>
                        <span class="text-danger text-sm font-weight-bolder">+ <?php echo($datos2["mes"]-$datos2a["mes"]); ?></span>
                        que el mes pasado
                       <?php }if($datos2["mes"]==$datos2a["mes"]){?>
                        <span class="text-success text-sm font-weight-bolder"> Igual</span>
                         que el mes pasado
                       <?php }?>
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="ni ni-calendar-grid-58 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Alertas Anuales</p>
                    <h5 class="font-weight-bolder">
                      <?php echo $datos3["ano"]; ?>
                    </h5>
                    <p class="mb-0">
                      <?php if($datos3["ano"]<$datos3a["ano"]){?>
                      <span class="text-success text-sm font-weight-bolder">- <?php echo($datos3a["ano"]-$datos3["ano"]); ?> </span>
                       que el 2022
                       <?php }if($datos3["ano"]>$datos3a["ano"]){?>
                        <span class="text-danger text-sm font-weight-bolder">+ <?php echo($datos3["ano"]-$datos3a["ano"]); ?></span>
                        que el 2022
                       <?php }if($datos3["ano"]==$datos3a["ano"]){?>
                        <span class="text-success text-sm font-weight-bolder"> Igual</span>
                         que el 2022
                       <?php }?>
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <i class="ni ni-calendar-grid-58 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h6 class="text-capitalize">Alertas mensuales 
                  <?php
                if($datos2["mes"]<$datos2a["mes"]){
                    $porcentaje = (($datos2a["mes"]-$datos2["mes"]) / $datos2a["mes"]) * 100;
                    $parte_entera = (int) $porcentaje;
                    $parte_decimal = $porcentaje - $parte_entera;
                    ?>
                    <span class="text-success text-sm font-weight-bolder">- <?php echo $parte_entera.number_format($parte_decimal, 2) . '%'; ?></span>
                    que el mes pasado
                <?php }
                if($datos2["mes"]>$datos2a["mes"]){
                    $porcentaje = (($datos2["mes"]-$datos2a["mes"]) / $datos2a["mes"]) * 100;
                    $parte_entera = (int) $porcentaje;
                    $parte_decimal = $porcentaje - $parte_entera;
                    ?>
                    <span class="text-danger text-sm font-weight-bolder">+ <?php echo $parte_entera.number_format($parte_decimal, 2) . '%'; ?></span>
                    que el mes pasado
                <?php }
                if($datos2["mes"]==$datos2a["mes"]){
                    ?>
                    <span class="text-success text-sm font-weight-bolder">Igual</span>
                    que el mes pasado
                <?php }?> 
                
              
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card card-carousel overflow-hidden h-100 p-0">
            <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
              <div class="carousel-inner border-radius-lg h-100">
                <div class="carousel-item h-100 active" style="background-image: url('./assets/img/mapacalor.jpeg');
      background-size: cover;">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-camera-compact text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">Sentinel</h5>
                    <p>Mapas de calor dinamicos y filtrados</p>
                  </div>
                </div>
                <div class="carousel-item h-100" style="background-image: url('./assets/img/carousel-2.jpg');
      background-size: cover;">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">Sentinel</h5>
                    <p>Gestion de trabajadores, maquinarias y accidentes</p>
                  </div>
                </div>
                <div class="carousel-item h-100" style="background-image: url('./assets/img/carousel-3.jpg');
      background-size: cover;">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-trophy text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">Sentinel</h5>
                    <p>Alertas en tiempo real a los trabajadores </p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      
                    <?php
                    //consulta
                    $cons="SELECT rut_trabajador, COUNT(*) as total_alertas FROM Alerta GROUP BY rut_trabajador ORDER BY `total_alertas` DESC ";
                    $re=mysqli_query(conexion(),$cons);
                    
                    
                    
                    ?>
                    
      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">Trabajadores con mas alertas</h6>
              </div>
            </div>
            
            <div class="table-responsive">
              <table class="table align-items-center ">
                <tbody>
                    <!-- fila -->
                    <?php
                    $i = 1;
                    while ($info = mysqli_fetch_array($re) and $i<= 4 ) {
                        
                        $cons1="SELECT * from Trabajador where rut='".$info["rut_trabajador"]."'and estado=1";
                         $re1=mysqli_query(conexion(),$cons1);
                         $info1 = mysqli_fetch_array($re1);
                    ?>
                  <tr>
                    <td class="w-30">
                      <div class="d-flex px-2 py-1 align-items-center">
                        <div>
                          <img src="./image/perfil/<?php echo$info1["foto"]; ?>" alt="foto perfil">
                        </div>
                        <div class="ms-4">
                          <p class="text-xs font-weight-bold mb-0">Rut:</p>
                          <h6 class="text-sm mb-0"><?php echo$info["rut_trabajador"]; ?></h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">Nombre:</p>
                        <h6 class="text-sm mb-0"><?php echo$info1["Nombre"]; ?></h6>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">Labor:</p>
                        <h6 class="text-sm mb-0"><?php echo$info1["labor"]; ?></h6>
                      </div>
                    </td>
                    <td class="align-middle text-sm">
                      <div class="col text-center">
                        <p class="text-xs font-weight-bold mb-0">Alertas:</p>
                        <h6 class="text-sm mb-0"><?php echo$info["total_alertas"]; ?></h6>
                      </div>
                    </td>
                  </tr>
                  <!-- fila -->
                   <?php
                    $i++;
                    }
                    ?>
                 
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
        
         <?php
                 
                    
                        
                        $cons2="SELECT SUM(CASE WHEN estado = 1 THEN 1 ELSE 0 END) AS activos, SUM(CASE WHEN estado = 0 THEN 1 ELSE 0 END) AS inactivos FROM Trabajador; ";
                        $re2=mysqli_query(conexion(),$cons2);
                        $info2 = mysqli_fetch_array($re2);
         ?>
        <div class="col-lg-5">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Categorias</h6>
            </div>
            <div class="card-body p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                      <i class="ni ni-square-pin text-white opacity-10"></i>
                    </div>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">Mapas de Calor</h6>
                      <span class="text-xs">250 in stock, <span class="font-weight-bold">346+ sold</span></span>
                    </div>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                      <i class="ni ni-badge text-white opacity-10"></i>
                    </div>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">Trabajadores</h6>
                      <span class="text-xs"><?php echo$info2["inactivos"]; ?> Inactivos, <span class="font-weight-bold"><?php echo$info2["activos"]; ?> Activos</span></span>
                    </div>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                      <i class="ni ni-controller text-white opacity-10"></i>
                    </div>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">Dispositivos</h6>
                      <span class="text-xs">1 is active, <span class="font-weight-bold">40 closed</span></span>
                    </div>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                      <i class="ni ni-sound-wave text-white opacity-10"></i>
                    </div>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">Mas Estadisticas</h6>
                      <span class="text-xs font-weight-bold">+ 430</span>
                    </div>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                Hecho por
                <a href="https://www.gembersoft.com" class="font-weight-bold" target="_blank">Sentinel Team</a>
                
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.gembersoft.com" class="nav-link text-muted" target="_blank">Sentinel</a>
                </li>
                
               
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Configuracion Sentinel</h5>
          <p>Personalice la plataforma a su gusto</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Color de resalte barra lateral</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">escoja entre 2 tipos de barra de navegacion.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">Claro</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Obscuro</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">Solo se puede cambiar en modo escritorio</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Claro / Oscuro</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    var fecha = new Date();
    var mesActual = fecha.getMonth();

    
  
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: [meses[mesActual-6],meses[mesActual-5],meses[mesActual-4], meses[mesActual-3], meses[mesActual-2], meses[mesActual-1], meses[mesActual]],
        datasets: [{
          label: "alertas",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [<?php echo $datos2f["mes"]; ?>,<?php echo $datos2e["mes"]; ?>,<?php echo $datos2d["mes"]; ?>,<?php echo $datos2c["mes"]; ?>,<?php echo $datos2b["mes"]; ?>,<?php echo $datos2a["mes"]; ?>, <?php echo $datos2["mes"]; ?>],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
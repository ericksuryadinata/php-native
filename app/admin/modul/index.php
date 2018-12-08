<?php

    session_start();
	include("../../config/inc_connect.php");
	if(!isset($_SESSION['admin'])){
		echo '<script>alert("Anda Tidak Memiliki Akses Kesini, Redirecting ...."); document.location="../index.php"; </script>';
	} else{
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../../assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../../assets/extra/dashboard.css" />
</head>
<body>

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Billy App</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="?p=dashboard">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Kelas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Jadwal
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Jadwal Kelas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?p=mahasiswa">
                  <span data-feather="file"></span>
                  Mahasiswa
                </a>
              </li>
              
            </ul>
          </div>
        </nav>

        <!-- dashboard -->
        <?php
            if((isset($_GET['p'])) and (!isset($_GET['a']))){
                include( $_GET['p']."/index.php");
            }
            else if((isset($_GET['p'])) and (isset($_GET['a']))){
                $a=$_GET['a'];
                include($_GET['p']."/".$a.".php");
            }else if((!isset($_GET['p'])) and (!isset($_GET['a']))){
                $active = 'yes';
                include('dashboard/index.php');
            }

        ?>
      </div>
    </div>
    <script src="../../assets/jquery/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
</body>
</html>

<?php
    }
?>
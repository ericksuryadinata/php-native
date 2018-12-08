<?php

    session_start();
	include("../../config/inc_connect.php");
	if(!isset($_SESSION['mahasiswa'])){
		echo '<script>alert("Anda Tidak Memiliki Akses Kesini, Redirecting ...."); document.location="../index.php"; </script>';
	} else{
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AMahasiswa | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../../assets/bootstrap/css/bootstrap.min.css" />
</head>
<body>


    <?php
        if((isset($_GET['p'])) and (!isset($_GET['a']))){
            include( $_GET['p']."/index.php");
        }
        else if((isset($_GET['p'])) and (isset($_GET['a']))){
            $a=$_GET['a'];
            include($_GET['p']."/".$a.".php");
        }else{
            include("dashboard/index.php");
        }

    ?>
    <script src="../../assets/jquery/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    }
?>
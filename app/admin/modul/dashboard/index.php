<?php

    session_start();
	include("../../../config/inc_connect.php");
	if(!isset($_SESSION['admin'])){
		echo '<script>alert("Anda Tidak Memiliki Akses Kesini, Redirecting ...."); document.location="../../index.php"; </script>';
	} else{
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
</main>
<?php
    }
?>
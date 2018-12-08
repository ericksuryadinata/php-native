<?php

    session_start();
	include("../../../config/inc_connect.php");
	if(!isset($_SESSION['admin'])){
		echo '<script>alert("Anda Tidak Memiliki Akses Kesini, Redirecting ...."); document.location="../../index.php"; </script>';
	} else{
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Mahasiswa</h1>
    </div>
    <div class="table-responsive">
        <?php
            $sql = "SELECT * FROM mahasiswa";
            $result = $db->query($sql);
            if(!$result = $db->query($sql)){
                echo "<h1>Ada Kesalahan di SQL [".$db->error."]";
            }else{
                if(!$result->num_rows > 0){
                    echo "<h1>Tidak Ada Data</h1>";
                }else{
        ?>
        
                <table class="table table-bordered">
                    <thead>
                        <th>No</th>
                        <th>NRP</th>
                        <th>Nama</th>
                    </thead>
                    <tbody>
        <?php
                    $no = 1;
                    while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$no."</td>";
                    echo "<td>".$row['nrp']."</td>";
                    echo "<td>".$row['nama']."</td>";
                    echo "</tr>";
                    $no++;
                    }
                }
            }
        ?>
                    </tbody>
                </table>
    </div>
</main>
<?php
    }
?>
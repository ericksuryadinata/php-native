<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Kelas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/bootstrap/css/bootstrap.min.css" />
</head>
<body>
    <h1>INI HALAMAN TAMPIL</h1>
        <?php
            include('../config/inc_connect.php');
        
            $sql = "SELECT * FROM jadwal_kelas";
            if(!$result = $db->query($sql)){
                echo "<h1>Ada Kesalahan di SQL [".$db->error."]";
            }else{
                if(!$result->num_rows > 0){
                    echo "<h1>Tidak Ada Data</h1>";
                }else{
        ?>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Jadwal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($row = $result->fetch_assoc){
                    echo "<tr>";
                    echo "<td>".$row['kelas_id']."</td>";
                    echo "<td>".$row['jadwal_id']."</td>";
                    echo "<td>".$row['status']."</td>";
                    echo "</tr>";
                    }
                }
            }
        ?>
                    </tbody>
                </table>
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
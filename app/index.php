<?php

    if (file_exists('config/inc_connect.php')) {
        echo "<script>document.location.href = 'mahasiswa/';</script>";
    } else {
        echo "File Not Exist";
    }

?>
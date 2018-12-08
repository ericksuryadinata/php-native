<?php

    if (file_exists('../config/inc_connect.php')) {
        echo "<script>document.location.href = 'login.php';</script>";
    } else {
        echo "File Not Exist";
    }

?>
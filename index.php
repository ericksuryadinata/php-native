<?php
    if (file_exists('app')) {
        echo "<script>document.location.href = 'app/index.php';</script>";
    } else {
        echo "File Not Exist";
    }
?>
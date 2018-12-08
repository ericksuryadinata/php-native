<?php
	session_start();

	unset($_SESSION['mahasiswa']);
	unset($_SESSION['type']);

	?><script language="javascript">alert("anda sudah log out");document.location='../index.php'</script><?php
?>
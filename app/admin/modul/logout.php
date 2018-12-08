<?php
	session_start();

	unset($_SESSION['admin']);
	unset($_SESSION['type']);

	?><script language="javascript">alert("anda sudah log out");document.location='../index.php'</script><?php
?>
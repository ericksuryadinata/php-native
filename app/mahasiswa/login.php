<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Kelas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/extra/signin.css" />
</head>
<body class="text-center">
    <form class="form-signin" action="login.php" method="POST">
      <h1 class="h3 mb-3 font-weight-normal">Login Mahasiswa</h1>
      <label class="sr-only">NRP</label>
      <input type="text" name="nrp" class="form-control" placeholder="nrp" required="" autofocus="">
      <label class="sr-only">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password" required="">
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="getIn">Sign in</button>
      <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
    </form>
    <?php
      session_start();
      include('../config/inc_connect.php');
      if(isset($_SESSION['mahasiswa'])){
        echo '<script>alert("Anda Telah Masuk Sebagai '.$_SESSION['mahasiswa'].', Redirecting ...."); document.location="../mahasiswa/modul/index.php?p=dashboard"; </script>';
      } else{

        if(isset($_POST['getIn'])){
          $user = addslashes($_POST['nrp']);
          $password = addslashes($_POST['password']);

          $sql = "SELECT * FROM `mahasiswa` where nrp='$user'";
          if(!$result=$db->query($sql)){
            die('Ada kesalahan di SQL ['.$db->error.']');
          } else{
            if (!$result->num_rows > 0 )
            {
              echo '<script>alert("User Salah"); history.back() </script>'; 
            }else if (($result->num_rows > 0 )){
              $row = $result->fetch_assoc();
              if(password_verify($password,$row['password'])){
                $_SESSION['mahasiswa'] = $row['nrp'];
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['type'] = 'mahasiswa';
                echo '<script>alert("Selamat datang '.$_SESSION['mahasiswa'].'"); document.location="modul/index.php?p=dashboard"</script>';
              }else{
                echo '<script>alert("Password Salah"); history.back() </script>'; 
              }
            }
          }
        }
      }
      $db->close();
      ?>
    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
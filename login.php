<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Giriş Yap</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<header>
  <nav class="navbar navbar-light navbar-expand-md">
    <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Menüyü aç/kapa</span><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navcol-1" style="padding: 0px;margin: auto;border-style: solid;border-radius: 11px;box-shadow: -5px -3px 7px;filter: brightness(200%);">
        <ul class="nav navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.html">Hakkında</a></li>
          <li class="nav-item"><a class="nav-link" href="ozgecmis.php">CV/Özgeçmiş</a></li>
          <li class="nav-item"><a class="nav-link" href="sehrim.php">Şehrim</a></li>
          <li class="nav-item"><a class="nav-link" href="mirasimiz.php">Mirasımız</a></li>
          <li class="nav-item"><a class="nav-link" href="ilgi-alanlarim.php">İlgi alanlarım</a></li>
          <li class="nav-item"><a class="nav-link active" href="#">Login Sayfası</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">İletişim Sayfası</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<div class="giris">
    <?php
    if(isset($_POST['email']) && isset($_POST['password']))
    {
        if(($_POST['email'] == "eren.bicakci1@ogr.sakarya.edu.tr") && ($_POST['password'] == "b211210093"))
        {
            echo '<h1 style="color:green" class="text-center">Giriş Başarılı! Hoşgeldiniz "b211210093"<br>Anasayfaya yönlendiriliyorsunuz... </h1>';
            header("Refresh: 2;url=index.html");
        }
        else{
            echo '<h1 style="color:red" class="text-center">Kullanıcı adı ya da şifreniz hatalı!<br>Lütfen tekrar deneyin... </h1>';
        }
    }
    ?>
  <form method="post">
    <h2 class="text-center" style="padding-bottom:10px;">Giriş Sayfası</h2>
    <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email Adresi" required></div>
    <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Şifre" required></div>
    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Giriş Yap</button></div>
  </form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
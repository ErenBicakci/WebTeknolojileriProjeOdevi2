<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>İletişim Sayfası</title>
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
          <li class="nav-item"><a class="nav-link" href="login.php">Login Sayfası</a></li>
          <li class="nav-item"><a class="nav-link active" href="#">İletişim Sayfası</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<div class="contact-clean">
    <form method="post" action="contact_.php">
        <h2 class="text-center">İletişim</h2>
        <div class="form-group"><input class="form-control" name="name" placeholder="Adınız" id="name"></div>
        <div class="form-group"><input class="form-control" name="email" placeholder="Email" id="email"></div>
        <div class="form-group"><textarea class="form-control" name="message" placeholder="Mesajınız" rows="14" id="message"></textarea></div>
        <div class="form-group">Doğum Tarihiniz:<input class="form-control" type="date" name="date"></div>
        <div class="form-group">Cinsiyetiniz:<br>
            Erkek:<input type="radio" name="gender" value="Erkek" id="erkek">
            Kız:<input type="radio" name="gender" value="Kız" id="kiz">
            <input style="display:none" type="radio" name="gender" value="" checked>
        </div>
        <div class="form-group">
            Mesajınızın Aciliyeti:
            <select name="urgency" id="urgency">
                <option value="Acil Değil">Acil Değil</option>
                <option value="Acil">Acil</option>
                <option value="Çok Acil">Çok Acil</option>
            </select>
        </div>
        <div class="form-group"><button class="btn btn-primary" type="submit" onclick="return validate()">Gönder</button><button class="btn btn-primary" type="reset"">Temizle</button></div>
    </form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/validate.js"></script>
</body>

</html>
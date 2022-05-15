<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>İlgi Alanlarım</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1" style="padding: 0px;margin: auto;border-style: solid;border-radius: 11px;box-shadow: -5px -3px 7px;filter: brightness(200%);">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.html">Hakkında</a></li>
                        <li class="nav-item"><a class="nav-link" href="ozgecmis.php">CV/Özgeçmiş</a></li>
                        <li class="nav-item"><a class="nav-link" href="sehrim.php">Şehrim</a></li>
                        <li class="nav-item"><a class="nav-link" href="mirasimiz.php">Mirasımız</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#">İlgi alanlarım</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login Sayfası</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">İletişim Sayfası</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">
                        <h1 class="text-center" style="font-size:50px;"><strong>Dog.ceo fotoğraf galerisi API</strong></h1>
                    </div>
                    <div class="text">
                    <img width="100%" class="img-fluid" src="assets/img/shiba.webp" alt="Müzik">
                        <p>
                            Bu sayfada <a href="https://dog.ceo">dog.ceo API</a> kullanarak oluşturduğum, şirin köpek fotoğraflarından galeri oluşturan uygulamaya ulaşabilirsiniz.
                        </p>
                        <div id="app-cerceve">
                            <div align="center" id="form-cerceve">

                                Fotoğraf Sayısı:<input id="sayi" type="number">
                                <button onclick="shiba()">Galeri Oluştur</button>
                            </div>
                            <div id="foto-cerceve">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/shiba.js"></script>
</body>

</html>
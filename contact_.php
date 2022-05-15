<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>İletişim</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
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
                        <li class="nav-item"><a class="nav-link active" href="#">Şehrim</a></li>
                        <li class="nav-item"><a class="nav-link" href="mirasimiz.php">Mirasımız</a></li>
                        <li class="nav-item"><a class="nav-link" href="ilgi-alanlarim.php">İlgi alanlarım</a></li>
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
                        <h1 class="text-center">İşlem Onaylandı!</h1></div>
                    <div class="text">
                        <h3>İletişim formu başarıyla gönderildi. Detaylar:</h3>
                        <table class="table table-striped" width="100%" border="2px">
                            <thead class="thead-dark" align="center">
                            <tr>
                                <th colspan="2">
                                    Form Bilgileri
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>
                                    Adınız
                                </th>
                                <td>
                                    <?php echo $_POST['name'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Email
                                </th>
                                <td>
                                    <?php echo $_POST['email'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Mesajınız
                                </th>
                                <td>
                                    <?php echo $_POST['message'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Doğum Tarihiniz:
                                </th>
                                <td>
                                    <?php echo $_POST['date'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Cinsiyetiniz:
                                </th>
                                <td>
                                    <?php echo $_POST['gender'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Mesajınızın Aciliyeti:
                                </th>
                                <td>
                                    <?php echo $_POST['urgency'] ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</html>
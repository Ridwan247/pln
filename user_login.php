

<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.4.0
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">

<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
  <title>Login User | Sistem Informasi Arsip Data PT. PLN(Persero)</title>
  <link rel="apple-touch-icon" sizes="57x57" href="template/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="template/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="template/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="template/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="template/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="template/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="template/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="template/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="template/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="template/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="template/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="template/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="template/favicon/favicon-16x16.png">
  <link rel="manifest" href="template/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="template/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- Main styles for this application-->
  <link rel="stylesheet" href="coreui/coreui.min.css">

  <!-- Optional JavaScript -->
  <!-- Popper.js first, then CoreUI JS -->
  <script src="coreui/coreui.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/84ddf7b0b6.js" crossorigin="anonymous"></script>


  </body>
  <!-- Global site tag (gtag.js) - Google Analytics-->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    // Shared ID
    gtag('config', 'UA-118965717-3');
    // Bootstrap ID
    gtag('config', 'UA-118965717-5');
  </script>
</head>

<body class="c-app flex-row align-items-center">
  <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-8">
      <?php 
                // pesan notifikasi

                if(isset($_GET['alert'])){
                    if($_GET['alert'] == "gagal"){
                        echo "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
                    }else if($_GET['alert'] == "logout"){
                        echo "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>";
                    }else if($_GET['alert'] == "belum_login"){
                        echo "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
                    }
                }
                ?>
                </div>
                </div>
                
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group">
          <div class="card p-4">
            <div class="card-body">
              <h1>Login</h1>
              <p class="text-muted">Sign In to your account</p>
              <form action="periksa_user_login.php" method="POST">
                <div class="input-group mb-3">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <i class="fas fa-user"></i>
                    </span></div>
                  <input class="form-control" type="text" placeholder="Username" name="username" required>
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <i class="fas fa-eye"></i></span></div>
                  <input class="form-control" type="password" placeholder="Password" name="password" required>
                </div>
                            
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" type="submit">Login</button>
                    
                  </div>
              </form>
               <div class="col-6 text-right">
                  <!--<button  type="button">Forgot password?</button>-->
                  <a href="index.php" class="btn btn-link px-0">Kembali</a>
                </div>
            </div>
          </div>
        </div>
         <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
            <div class="card-body text-center">
              <div>
                <h2>Login</h2><br>
                <h2>||</h2><br>
                <h2>User</h2>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  </div>
  <!-- CoreUI and necessary plugins-->
  <!-- <script src="node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js"></script> -->
  <!--[if IE]><!-->
  <!-- <script src="node_modules/@coreui/icons/js/svgxuse.min.js"></script> -->
  <!--<![endif]-->
</body>

</html>
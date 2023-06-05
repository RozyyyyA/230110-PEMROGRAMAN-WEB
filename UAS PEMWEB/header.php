<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Rental Mobil Airlangga</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="logo_fix.png" alt="Logo">
        </div>
        <div class="social-follow">
              <ul>
                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
        </div>
        <div class="login_btn"> 
          <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> 
        </div>
    </header>


<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #000000">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo ($page == 'index.php') ? 'active' : ''; ?>">
        <a class="nav-link nav-link-custom" href="index.php">HOME</a>
      </li>
      <li class="nav-item <?php echo ($page == 'tentang_kami.php') ? 'active' : ''; ?>">
        <a class="nav-link nav-link-custom" href="tentang_kami.php">TENTANG KAMI</a>
      </li>
      <li class="nav-item <?php echo ($page == 'daftar_mobil.php') ? 'active' : ''; ?>">
        <a class="nav-link nav-link-custom" href="daftar_mobil.php">DAFTAR MOBIL</a>
      </li>
      <li class="nav-item <?php echo ($page == 'hubungi_kami.php') ? 'active' : ''; ?>">
        <a class="nav-link nav-link-custom" href="hubungi_kami.php">HUBUNGI KAMI</a>
      </li>

    </ul>
  </div>
</nav>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serasera.org - <?php echo $page_title; ?></title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
    <!-- Include Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="/assets/css/stylesheet.css?v=<?php echo time(); ?>">
</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container">
            <h1 class="logo">
                <a href="/">Serasera.org</a>
            </h1>
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/"><?php echo lang('Home.fandraisana') ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/mombamomba"><?php echo lang('Home.mombamomba') ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/tolotra-serasera"><?php echo lang('Home.tolotra') ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/hifandray"><?php echo lang('Home.hifandray') ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <?php /*
<nav class="navbar navbar-expand-lg fixed-top">
<div class="container">
  <a class="navbar-brand" href="#">My Website</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
          <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
          </li>
      </ul>
  </div>
</div>
</nav>
*/?>

    <!-- Page Content-->
    <div class="container" style="margin-top: 75px">
        <?php $this->renderSection('main'); ?>
        <?php $this->renderSection('content'); ?>
    </div>
    <!-- Footer-->
    <footer class="py-5">
        <div class="container px-4 px-lg-5">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/js/scripts.js"></script>
</body>

</html>
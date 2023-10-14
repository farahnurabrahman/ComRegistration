<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard - Company Registration</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="../import/assets/img/favicon.png" rel="icon">
  <link href="../import/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="../../../import/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../import/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../../import/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../../import/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../../import/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../../import/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../../import/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="../../../import/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>
  <body>
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a class="logo d-flex align-items-center">
        <img src="../../../import/assets/img/logo.png" alt="">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
</div>
<div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>

<nav class="header-nav ms-auto">
<li class="dropdown-header">
    <a class="dropdown-item d-flex align-items-center" href="/">
      <i class="bi bi-box-arrow-right"></i>
      <span>Sign Out</span>&nbsp;&nbsp;&nbsp;
    </a>
</li>
<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
</ul>
</nav>
  </header>

  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link " href="/home">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-heading">Pages</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/companies">
          <i class="bi bi-person"></i>
          <span>Company</span>
        </a>
      </li>
    </ul>
  </aside>

  <main id="main" class="main">
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            @yield('content')
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Farah's</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">Farah's AR</a>
    </div>
  </footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short">
    </i>
  </a>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="../../../import/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../../import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../import/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../../../import/assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../../import/assets/vendor/quill/quill.min.js"></script>
  <script src="../../../import/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../../import/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../../import/assets/vendor/php-email-form/validate.js"></script>
  <script src="../../../import/assets/js/main.js"></script>
</body>
</html>
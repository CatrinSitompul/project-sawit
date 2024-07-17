

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <?php include("include/css.php"); ?>
</head>

<body>
  <header>
    <?php include("include/header.php"); ?>
  </header>

  <div class='container' style='margin-top:70px'>
    <div class='row' style='min-height:520px'>
      <div class='col-md-12'>
        <div class="jumbotron">
          <center>
            <h1>Aplikasi Penjualan Sawit SITOMPUL</h1>
            <p>Aplikasi Pengelolaan Laporan Penjualan Sawit</p>
            <img src="sitompul.jpg">
            <p>
              <a class='btn btn-primary' href='petani.php'>Data Petani</a>
              <a class='btn btn-info' href='sawit.php'>Data Sawit</a>
              <a class='btn btn-danger' href='transaksi.php'>Tambah Data Transaksi</a>
              <a class='btn btn-success' href='laporan.php'>Laporan</a>
              <a href="btn btn-success" href='login.php'>Logout</a>
            </p>
          </center>
        </div>
      </div>
    </div>
  </div>

  <?php include("include/footer.php"); ?>

  <?php include("include/js.php"); ?>

</body>
</html>

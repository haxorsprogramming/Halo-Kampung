<!DOCTYPE html>
<html lang="en" class=" ">
<head>
  <meta charset="utf-8" />
  <title>Halo Kampung</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="<?=STYLEBASE; ?>css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?=STYLEBASE; ?>css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?=STYLEBASE; ?>css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?=STYLEBASE; ?>css/font.css" type="text/css" />
  <link rel="stylesheet" href="<?=STYLEBASE; ?>css/landing.css" type="text/css" />
  <link rel="stylesheet" href="<?=STYLEBASE; ?>css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="">
    
  <!-- header -->
  <header id="header" class="navbar navbar-fixed-top bg-white box-shadow b-b b-light"  data-spy="affix" data-offset-top="1">
    <div class="container">
      <div class="navbar-header">        
        <a href="#" class="navbar-brand"><img src="<?=STYLEBASE;?>images/logo.png" class="m-r-sm"><span class="text-muted">Halo</span><span class="text-info ">Kampung</span></a>
        <button class="btn btn-link visible-xs" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <a href="landing.html">Beranda</a>
          </li>
          <li>
            <a href="features.html">Telusuri</a>
          </li>
          <li>
            <a href="price.html">Cerita</a>
          </li>
          <li>
            <div class="m-t-sm"><a href="signin.html" class="btn btn-link btn-sm">Daftar</a> <a href="signup.html" class="btn btn-info btn-success m-l"><strong>Masuk</strong></a></div>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <!-- / header -->
  <section id="content">
    <div class="bg-dark"  style=" padding-bottom:120px;background: url(<?=STYLEBASE;?>images/idnbgs2.jpeg) #25313e center top no-repeat; background-size: cover;">

      <div class="text-center wrapper">
        <div class="m-t-xl m-b-xl">
          <div class="text-uc h1 font-bold inline">
            <br>
            <br>

            <center>
             <div class="h1 pull-left m-r-sm text-white center font-bold" style="margin-left: 25px">Bersama</div>
              <div class="h1 carousel slide carousel-fade inline auto aside font-thin pull-left" data-interval="2000">
                <div class="carousel-inner text-info  ">
                  <div class="item active">
                    Belajar
                  </div>
                  <div class="item">
                    Berbagi
                  </div>
                  <div class="item">
                    Bahagia
                  </div>
                </div>
              </div>
            </center>
          <!--
          <div class="h4 text-muted m-t-sm">Modern, Clean & Flat User Interface Kit Made with Love & Passion
          </div>
          </div>
          -->
          <div>
          <p class="text-center m-b-xl">
          <a href="#" target="_blank" class="btn btn-lg btn-info m-sm">Masuk</a>
          <a href="index.html" target="_blank" class="btn btn-lg btn-warning b-white bg-empty m-sm">Daftar</a>
          </p>
          </div>
          </div>
      </div>
    </div>
      <div class="padder">
        <div class="hbox">
          <!--
          <aside class="col-md-3 v-bottom text-right">
            <div class="hidden-sm hidden-xs">
              <section class="  inline m-b-n-lg m-r-n-lg aside-sm no-border animated fadeInLeftBig">
                <div>
                  <div class="m-l-xs m-r-xs">
                    <img src="images/1515561659.jpg" class="img-full" >
                  </div>
                </div>
              </section>
            </div>
          </aside>
          <aside class="col-sm-10 col-md-6">
            <section class="panel bg-dark m-b-n-lg no-border animated fadeInUp">
              <img src="images/1515561659.jpg" class="img-full" >
            </section>
          </aside>
          <aside class="col-md-3 v-bottom">
            <div class="hidden-sm hidden-xs">
              <section class=" m-b-n-lg m-l-n-lg aside  animated fadeInRightBig">
                <div class="">
                  <div class="m-l-xs m-r-xs">
                    <img src="images/1515561659.jpg" class="img-full" >
                  </div>
                </div>
              </section>
            </div>
          </aside>
          -->
        </div>
      </div>
    </div>
    <div id="about" class="bg-white">
      <div class="container">
        <div class="m-t-xl m-b-xl text-center wrapper">
          <h2 class="text-dark">Ingin mengubah dunia ?</h3>
          <h4 class="text-dark">Tak perlu menjadi superman atau gatot kaca !! Dengan mengajarkan sedikit kebaikan,percayalah bahwa  dunia akan menjadi lebih baik. Pelajari bagaimana melakukannya !</h4>
        </div>
        <div class="row m-t-xl m-b-xl text-center">
          <div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
            <p class="h3 m-b-lg">
              <i class="fa fa-group fa-3x text-info"></i>
            </p>
            <div class="">
              <h2 class="m-t-none text-dark">Bergabung</h2>
              <h5 class="text-dark m-t-lg">Cari relawan lain yang membutuhkanmu, kamu akan berkolaborasi bersama mengajarkan kebaikan. Temukan tempat baru yang belum pernah kamu temui dan rasakan bersama orang-orang hebat lainnya mengubah dunia.</h5>
            </div>
          </div>
          <div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="600">
            <p class="h3 m-b-lg">
              <i class="fa fa-pencil-square-o fa-3x text-info"></i>
            </p>
            <div class="">
              <h2 class="m-t-none text-dark">Memulai</h2>
              <h5 class="text-dark m-t-lg">Lihat sekelilingmu, bantu mereka dengan membuat gerakan belajar bersama dan ajak teman baru untuk bergabung. Kamu bebas tentukan kebaikan apa yang ingin kamu bagi. </h5>
            </div>
          </div>
          <div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="900">
            <p class="h3 m-b-lg">
              <i class="fa fa-star fa-3x text-info"></i>
            </p>
            <div class="">
              <h2 class="m-t-none text-dark">Bintang</h2>
              <h5 class="text-dark m-t-lg">Menjadi kontributor terbaik diantara lainnya. Kamu akan mendapat perhagaan dari sekeliling mu, karena kebaikan mu tak ternilai harganya.</h5>
            </div>
          </div>
        </div>
        <div class="m-t-xl m-b-xl text-center wrapper">
        </div>
      </div>
    </div>
    <div id="responsive" class="bg-dark" style="background: url(<?=STYLEBASE;?>images/1515561659.jpg) #25313e center top no-repeat;background-size: cover;">
      <div class="text-center">
        <div class="container">
          <div class="m-t-xl m-b-xl wrapper">
            <h2 class="text-white">Ikuti Campaign</h2>
            <h4>Gabung deengan campaign yang sedang terbuka</h4>
          </div>
          <div class="row m-t-xl m-b-xl">
            <!--
            <div class="col-sm-4 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
              <p class="text-center h1 m-b-lg m-t-lg">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x text-dark"></i>
                  <i class="fa fa-mobile fa-stack-1x text-info"></i>
                </span>
              </p>
              <h4>Mobile</h4>
            </div>
            --> 
            <div class="col-sm-4 " data-ride="animated" data-animation="fadeInLeft" data-delay="300">
                  <img class="img-responsive" src="<?=STYLEBASE;?>images/idnbagus.jpg">
              <h4>Mengajar Kampung Suka Baru Pedalaman</h4>
            </div>
            <div class="col-sm-4 " data-ride="animated" data-animation="fadeInLeft" data-delay="600">
                  <img class="img-responsive" src="<?=STYLEBASE;?>images/idnbgs2.jpeg">
              <h4>Desain Grafis bagi anak Sukarejo Singosari</h4>
            </div>
            <div class="col-sm-4 " data-ride="animated" data-animation="fadeInLeft" data-delay="900">
                  <img class="img-responsive" src="<?=STYLEBASE;?>images/idnbagus3.jpg">
              <h4>Mengajar SD Bangun Karang Papua</h4>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <div id="newsletter" class="bg-white clearfix wrapper-lg">
      <div class="container text-center m-t-xl m-b-xl" data-ride="animated" data-animation="fadeIn">        
        <h4>Newsletter</h4>
        <p>Do not want to miss anything? Subscribe to our newsletter box</p>
        <form class="form-inline m-t-xl m-b-xl">
          <div class="form-group">
            <input class="form-control input-lg" placeholder="Your email" data-ride="animated" data-animation="fadeInLeftBig" data-delay="300">
          </div>
          <button type="submit" class="btn btn-info btn-lg" data-ride="animated" data-animation="fadeInRightBig" data-delay="600">Subscribe</button>
        </form>
      </div>
    </div>
    <div id="responsive" class="bg-dark" style="background: url(<?=STYLEBASE;?>images/1515561659.jpg) #25313e center top no-repeat;background-size: cover;">
      <div class="text-center">
        <div class="container">
          <div class="m-t-xl m-b-xl wrapper">
            <h2 class="text-white">Relawan Terbaik</h2>
            <h4>Menjadi terbaik itu baik, mereka yang setia berbagi kebaikan </h4>
          </div>
          <div class="row m-t-xl m-b-xl">
            <div class="col-sm-4 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
              <p class="text-center h1 m-b-lg m-t-lg">
                <span class="fa-stack fa-2x">
                  <img class="img-responsive img-circle" src="<?=STYLEBASE;?>images/org1.jpeg">
                </span>
              </p>
              <h4>Primbana Tanjung</h4>
            </div>
            <div class="col-sm-4 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="600">
              <p class="text-center h1 m-b-lg m-t-lg">
                <span class="fa-stack fa-2x">
                  <img class="img-responsive img-circle" src="<?=STYLEBASE;?>images/org12.jpeg">
                </span>
              </p>
              <h4>Cut Maharani</h4>
            </div>
            <div class="col-sm-4 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="900">
              <p class="text-center h1 m-b-lg m-t-lg">
                <span class="fa-stack fa-2x">
                  <img class="img-responsive img-circle" src="<?=STYLEBASE;?>images/org3.jpeg">
                </span>
              </p>
              <h4>Danu Aji Prananta</h4>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- footer -->
  <footer id="footer">
    <div class="bg-dark dker wrapper">
      <div class="container text-center m-t-lg">
        <div class="row m-t-xl m-b-xl">
          <!--
          <div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
            <i class="fa fa-map-marker fa-3x icon-info"></i>
            <h5 class="text-uc m-b m-t-lg">Find Us</h5>
            <p class="text-sm">23 soe Midlokls <br>
              120002 Loki — UNITED KINGDOM
             </p>
          </div>
          -->
          <div class="col-sm-4">
            <h5> <a href="#">Fitur</a></h5>
            <h5> <a href="#">Kebijakan Privasi</a></h5>
            <h5> <a href="#">Keamanan</a></h5>
          </div>
          <div class="col-sm-4">
            <h5> <a href="#">Kontak Kami</a></h5>
            <h5> <a href="#">Pengalaman</a></h5>
            <h5> <a href="#">Pengembang</a></h5>
            <h5> <a href="#">Bergabung Tim</a></h5>
          </div>
          <div class="col-sm-4">
            <h5> <a href="#">Beranda</a></h5>
            <h5> <a href="#">Telusuri</a></h5>
            <h5> <a href="#">Daftar</a></h5>
            <h5> <a href="#">Masuk</a></h5>
            <h5> <a href="#">Berita</a></h5>
          </div>
          
        </div>
        <div class="m-t-xl m-b-xl">
          <p>
            <a href="#" class="btn btn-icon btn-rounded btn-facebook bg-empty m-sm"><i class="fa fa-facebook"></i></a>
            <a href="#" class="btn btn-icon btn-rounded btn-twitter bg-empty m-sm"><i class="fa fa-twitter"></i></a>
            <a href="#" class="btn btn-icon btn-rounded btn-gplus bg-empty m-sm"><i class="fa fa-google-plus"></i></a>
          </p>
          <p>
            <a href="#content" data-jump="true" class="btn btn-icon btn-rounded btn-dark b-dark bg-empty m-sm text-muted"><i class="fa fa-angle-up"></i></a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->  <script src="<?=STYLEBASE;?>js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?=STYLEBASE;?>js/bootstrap.js"></script>
  <!-- App -->
  <script src="<?=STYLEBASE;?>js/app.js"></script> 
  <script src="<?=STYLEBASE;?>js/slimscroll/jquery.slimscroll.min.js"></script>
  
  <script src="<?=STYLEBASE;?>js/appear/jquery.appear.js"></script>
  <script src="<?=STYLEBASE;?>js/scroll/smoothscroll.js"></script>
  <script src="<?=STYLEBASE;?>js/landing.js"></script>
  <script src="<?=STYLEBASE;?>js/app.plugin.js"></script>
</body>
</html>

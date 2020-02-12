<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> RW 09 Kutabumi</title>

  <!-- news24 -->
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="<?php echo base_url(); ?>assets/css/media_query.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style_1.css" rel="stylesheet" type="text/css"/>
    <!-- Modernizr JS -->
    <script src="<?php echo base_url(); ?>assets/js/modernizr-3.5.0.min.js"></script>

  <!-- /news24 -->

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/css/modern-business.css" rel="stylesheet"> 

</head>

<body id="tole">
  <style>
    #tole{
      background-color:#ffffff;
      padding-top: 0px;

    }

  </style>

    <style>
    #pepek{
      background-color:#00e0e0;
          }

  </style>

<div class="container-fluid fh5co_header_bg" align="center">
    <div class="container">
        <div class="row">
            <div class="col-12 fh5co_mediya_center"><a  class="color_fff fh5co_mediya_setting"><i
                    class="fa fa-clock-o fa-2x"></i>&nbsp;&nbsp;&nbsp;
                  <?php
                        $tanggal= mktime(date("m"),date("d"),date("Y"));
                        echo "Tanggal : ".date("d-M-Y", $tanggal)." ";
                        date_default_timezone_set('Asia/Jakarta');
                        $jam=date("H:i:s");
                        echo "| Pukul : ". $jam." "."";
                        $a = date ("H");
                        if (($a>=6) && ($a<=11)){
                        echo ", Selamat Pagi Warga RW 09 Kutabumi Tangerang.. ";
                        }
                        else if(($a>11) && ($a<=15))
                        {
                        echo ", Selamat Siang Warga RW 09 Kutabumi Tangerang.. " ;
                        }
                        else if (($a>15) && ($a<=18)){
                        echo ", Selamat Sore Warga RW 09 Kutabumi Tangerang..";
                        }
                        else { echo ", <b> Selamat Malam Warga RW 09 Kutabumi Tangerang</b>";}
                        ?> &nbsp;&nbsp;<i class="fa fa-smile-o fa-2x " aria-hidden="true"></i></a>
                <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#tren" class="treding_btn">Trending</a>
                    <div class="fh5co_treding_position_absolute"></div>
                </div>
                <a href="#" class="color_fff fh5co_mediya_setting"> </a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" >
    <div class="container">
        <div class="row">
         

            <div class="col-12 col-md-3 fh5co_padding_menu">
               <a class="fh5co_display_table"> <img src="<?php echo base_url(); ?>assets/img/09.png" alt="img" class="fh5co_logo_width"/></a>
            </div>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://twitter.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://fb.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
                </div>
                <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786" id="pepek">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="blog.html">Blog <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="single.html">Single <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">World <span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            <a class="dropdown-item" href="#">Action in</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton3" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Community<span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            <a class="dropdown-item" href="#">Action in</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="Contact_us.html">Contact <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-color: #02e33e;">
          <div class="carousel-caption d-none d-md-block">
            <h1>Visi</h1>
            <br>
            <h3>Mewujudkan Tata Kelola Masyarakat RW. 09 Yang Rukun, Adil, Sejahtera dan Bermartabat dan Bertanggung jawab</h3>
            <br>
            <br><br>
          </div>
        </div>
        <!-- Slide Two - Set the background image for thih3s slide in the line below -->
        <div class="carousel-item" style="background-color: #0285e3;">
          <div class="carousel-caption d-none d-md-block">
            <h1>Misi</h1>
            <h3>1. Meningkatkan serta memelihara kerukunan warga sehingga tercipta tatanan masyarakat yang berakhlaq, adil, damai dan sejahtera</h3>
              <h3>2. Mempelopori reformasi sistem birokrasi yang sesuai dengan aturan yang berlaku dengan transparan dan akuntabel dan dapat dipertanggung jawabkan.</h3>
              <h3>3. Meningkatkan kegiatan yang kontruktif dan dapat dirasakan oleh seluruh warga RW.09 tanpa terkecuali.</h3>

          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
 <!--        <div class="carousel-item" style="background-color: black;">
          <div class="carousel-caption d-none d-md-block">
            <h3>Tujuan</h3>

                          
          </div>
        </div> -->
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>
  <?php echo $contents; ?>

  <!-- Footer -->
  <footer class="py-3 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; RW 09 Kutabumi Tangerang</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 

  <!-- news24 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="<?php echo base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
<!-- Main -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  </body>
</html>

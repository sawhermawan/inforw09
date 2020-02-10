<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Portfolio
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="<?php echo base_url(); ?>portfolio-1-col.html">1 Column Portfolio</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>portfolio-2-col.html">2 Column Portfolio</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>portfolio-3-col.html">3 Column Portfolio</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>portfolio-4-col.html">4 Column Portfolio</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>portfolio-item.html">Single Portfolio Item</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="<?php echo base_url(); ?>blog-home-1.html">Blog Home 1</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>blog-home-2.html">Blog Home 2</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>blog-post.html">Blog Post</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Other Pages
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="<?php echo base_url(); ?>full-width.html">Full Width Page</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>sidebar.html">Sidebar Page</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>faq.html">FAQ</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>404.html">404</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>pricing.html">Pricing Table</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <!-- Page Content -->
  <div class="container">
<!-- <style>
  #wel{
    font-family: arial;
    font-variant: small-caps;
    text-decoration: bold;
    width: 100%;
  }
</style> -->
    <h1 class="my-4" id="wel">Welcome to RW 09</h1>

    <!-- Marketing Icons Section -->

    <!-- /.row -->

    <!-- Portfolio Section -->
    <h2></h2>

    <div class="row">
      <?php foreach ($m_home->result() as $laman): ?>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          
          <a ><img class="card-img-top" src="<?php echo base_url(); ?>assets/img/<?php echo $laman->picture; ?>"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href=""><?php echo $laman->judul_acara; ?></a>
            </h4>
            <p class="card-text"><?php $laman->artikel;
                            $potong = substr($laman->artikel, 10, 150);
                            echo $potong;
                            ?></p>
            
          </div>
                <div class="card-footer">
                  <a href="<?php echo base_url('index.php/laman_web/view/'.$laman->berita_id)?>" title="Click to View"> Read More -></a>
                </div>
        </div>

      </div>
<?php endforeach; ?>
    </div>

    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>Modern Business Features</h2>
        <p>The Modern Business template by Start Bootstrap includes:</p>
        <ul>
          <li>
            <strong>Bootstrap v4</strong>
          </li>
          <li>jQuery</li>
          <li>Font Awesome</li>
          <li>Working contact form with validation</li>
          <li>Unstyled page elements for easy customization</li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
      </div>
    </div>

  </div>
  <!-- /.container -->




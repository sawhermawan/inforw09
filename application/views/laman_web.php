
  <!-- Page Content -->
  <div class="container" id="tol">
<style>
  #tol{
    background: transparent;

  }
</style>
<style>
  #wel{
    text-shadow: 0px -2px 0px #333,
0px 2px 3px #666;
    text-align: center;
    font-family: arial;
  }
</style>
    <h1 class="my-4" id="wel">Website Informasi RW 09</h1>

    <!-- Marketing Icons Section -->

    <!-- /.row -->

    <!-- Portfolio Section -->
    <h2></h2>

    <div class="row" >
      <style>
        #mek{
          background: transparent;
        }
      </style>
      <?php foreach ($m_home->result() as $laman): ?>
      <div class="col-lg-4 col-sm-6 portfolio-item" >
        <div class="card h-100" id="mek">
          
          <a ><img class="card-img-top" src="<?php echo base_url(); ?>assets/img/<?php echo $laman->picture; ?>"></a>
          <div class="card-body">
            <h4 class="card-title">
              <p><?php echo $laman->judul_acara; ?></p>
            </h4>
            <p class="card-text"><?php $laman->artikel;
                            $potong = substr($laman->artikel, 10, 150);
                            echo $potong;
                            ?><a href="<?php echo base_url('index.php/laman_web/view/'.$laman->berita_id)?>" title="Click to View"> Lanjutkan baca -></a></p>
            
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




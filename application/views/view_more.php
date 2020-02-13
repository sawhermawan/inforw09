  <style>
    p {
  text-indent: 28px;
  text-align: justify;
  font-size: 17px;
}
  </style>

  <style>
   #tren1  {
    color: #f2f2f2; 
    background: gray;
    font-size: 70px;
    padding: 10px;

      }
</style>
<style>
   #tren2  {
    color: #f2f2f2; 
    background: black;
    font-size: 50px;
    font-family: arial;
    padding: 7px;

      }
</style>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <?php foreach ($m_home->result() as $laman): ?>
    <h1 class="mt-4 mb-3">
      <div class="tren">
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4" id="tren"><span id="tren1">Informasi</span>&nbsp; <span id="tren2">Kegiatan</span></div>
        </div>
    </h1>

<hr>

    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="<?php echo base_url(); ?>assets/img/<?php echo $laman->picture; ?>" alt=""style="border: 5px ridge gray;">
      </div>
      <div class="col-lg-6">
        <h2><?php echo $laman->judul_acara; ?></h2>
        <p><?php echo $laman->artikel; ?></p>
        <p><?php echo $laman->tanggal; ?></p>
      </div>
      
    </div>
    <!-- /.row -->
    <?php endforeach ?>

    <!-- Team Members -->
    <!-- <h2>Our Team</h2>

    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="http://placehold.it/750x450" alt="">
          <div class="card-body">
            <h4 class="card-title">Team Member</h4>
            <h6 class="card-subtitle mb-2 text-muted">Position</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
          </div>
          <div class="card-footer">
            <a href="#">name@example.com</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="http://placehold.it/750x450" alt="">
          <div class="card-body">
            <h4 class="card-title">Team Member</h4>
            <h6 class="card-subtitle mb-2 text-muted">Position</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
          </div>
          <div class="card-footer">
            <a href="#">name@example.com</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="http://placehold.it/750x450" alt="">
          <div class="card-body">
            <h4 class="card-title">Team Member</h4>
            <h6 class="card-subtitle mb-2 text-muted">Position</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
          </div>
          <div class="card-footer">
            <a href="#">name@example.com</a>
          </div>
        </div>
      </div>
    </div> -->
    <!-- /.row -->

    <!-- Our Customers -->
    <!-- <h2>Our Customers</h2>
    <div class="row">
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
    </div> -->
    <!-- /.row -->

  </div>
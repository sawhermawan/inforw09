  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <?php foreach ($m_home->result() as $laman): ?>
    <h1 class="mt-4 mb-3"><?php echo $laman->judul_acara; ?>    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url(); ?>index.php/laman_web">Home</a>
      </li>
    </ol>

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?php echo base_url(); ?>assets/img/<?php echo $laman->picture; ?>" alt="">

        <hr>

        <!-- Date/Time -->
        <p><?php echo $laman->tanggal; ?></p>

        <hr>

        <!-- Post Content -->
        <p class="lead"><?php echo $laman->artikel; ?></p>
        <?php endforeach ?>

<!--         <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in
            <cite title="Source Title">Source Title</cite>
          </footer>
        </blockquote>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

        <hr> -->

        <!-- Comments Form -->


        <!-- Single Comment -->


        <!-- Comment with nested comments -->


      </div>

      <!-- Sidebar Widgets Column -->
      <?php foreach ($m_home->result() as $key): ?>
      <div class="col-md-4">

        <!-- Search Widget -->


        <!-- Categories Widget -->

        <!-- Side Widget -->

        <div class="card my-4">
          
          <h5 class="card-header"><?php echo $key->judul_acara; ?></h5>
          <div class="card-body">
            <?php $key->artikel;
                            $potong = substr($key->artikel, 10, 80);
                            echo $potong;
                            ?></p>
          </div>
        
        </div>

      </div>
<?php endforeach; ?>
    </div>
    <!-- /.row -->
    
  </div>
  <!-- /.container -->

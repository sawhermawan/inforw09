        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Struktur <small>pengurus</small></h3>
              </div>

              <div class="pull-right">
                <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li class="active">Struktur Pengurus RW 09</li>
                </ol>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="row">
                      <div class="col-lg-6">
                        <button type="button" class="btn btn-success btn-sm" title="New" data-toggle="modal" data-target="#myModalmodul"><i class="fa fa-plus"></i></button><b>Pengurus</b>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                 <!-- modal add pengurus -->
                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalmodul" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header alert-success">
                                  <button aria-hidden="true" data-dismiss="modal" class="close form-control-feedback right" type="button">X</button>
                                  <h4 class="modal-title">Tambah pengurus</h4>
                              </div>
                              <form class="form-horizontal" action="<?php echo base_url('index.php/kepengurusan/tambah')?>" method="post" enctype="multipart/form-data" role="form">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                          <input type="text" class="form-control text-center has-feedback-left" name="nama_anggota" placeholder="Nama" required="nama_anggota">
                                          <span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                          <input type="text" class="form-control text-center" name="jobdesk" placeholder="jobdesk" required="Masukan Jabatan">
                                          <span class="fa fa-book form-control-feedback right" aria-hidden="true"></span>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Save</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                                    </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                <!--end modal tambah akses-->
                
                  <div class="x_content">
                    <?=$this->session->flashdata('notif')?>
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                      <thead>
                        <tr class="info">
                          <th width="20px">No</th>
                          <th>Nama</th>
                          <th>Jabatan</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 0; ?>
                        <?php foreach ($m_kepengurusan as $pengurus): ?>
                        <?php $no++; ?>
                          <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $pengurus->nama_anggota; ?></td>
                            <td><?php echo $pengurus->jobdesk; ?></td>
                            <td class="text-center">
                            <a id="edit_item" data-toggle="modal" data-target="#myModaleditUnit" 
                            data-id="<?php echo $pengurus->anggota_id; ?>" 
                            data-name="<?php echo $pengurus->nama_anggota; ?>" 
                            data-job="<?php echo $pengurus->jobdesk; ?>">
                              <button class="btn btn-info"><i class="fa fa-edit"></i> Edit</button>
                            </a>
                            <a id="delete" data-toggle="modal" data-target="#myModalDeleteUnit" 
                            data-id="<?php echo $pengurus->anggota_id; ?>">
                              <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                            </a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <script src="<?php echo base_url();?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
          <script type="text/javascript">
            $(document).ready(function(){
              var table = $('#datatable-checkbox').DataTable({
                "order":[
                  [0,"asc"],
                ]
              })
            })
            
          </script>
        <!-- /page content -->

        <!-- modal edit akses login -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModaleditUnit" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header alert-info">
                          <button aria-hidden="true" data-dismiss="modal" class="close form-control-feedback right" type="button">X</button>
                          <h4 class="modal-title">Edit Kepengurusan</h4>
                      </div>
                      <form class="form-horizontal" action="<?php echo base_url('index.php/kepengurusan/edit')?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="modal-body" id="modal-edit">
                          <div class="row">

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                              <input type="text" class="form-control text-center has-feedback-left"  id="name" name="nama_anggota" placeholder="Nama" required="nama_anggota">
                              <span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                              <input type="text" class="form-control text-center has-feedback-left" id="job" name="jobdesk" placeholder="Masukan Jabatan" required="jobdesk">
                              <span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <input type="hidden" id="id" name="anggota_id">
                          </div>
                        </div>  
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                        </div>
                          </form>
                      </div>
                  </div>
              </div>
                <script src="<?php echo base_url();?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
                <script type="text/javascript">
                  $(document).on("click","#edit_item", function() {
                    var anggota_id     =  $(this).data('id');
                    var nama_anggota          =  $(this).data('name');
                    var jobdesk          =  $(this).data('job');
                    $("#modal-edit #id").val(anggota_id);
                    $("#modal-edit #name").val(nama_anggota);
                    $("#modal-edit #job").val(jobdesk);
                  })
                </script>
          </div>
        <!--end modal edit akses login-->

        <!-- modal Delete unit -->
           <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalDeleteUnit" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header alert alert-danger">
                          <button aria-hidden="true" data-dismiss="modal" class="close form-control-feedback right" type="button">X</button>
                          <h4 class="modal-title">Delete Room</h4>
                      </div>
                      <form class="form-horizontal" action="<?php echo base_url('index.php/kepengurusan/delete')?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="modal-body" id="modal-delete">
                          <div class="row">

                            <input type="hidden" id="id" name="anggota_id">
                            <div class="alert alert-info">
                              <p>Yakin Mau Hapus Data Ini??.</p>
                            </div>

                          </div>
                        </div>  
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Ya</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Tidak Jadi</button>
                        </div>
                          </form>
                      </div>
                  </div>
              </div>
                <script src="<?php echo base_url();?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
                <script type="text/javascript">
                  $(document).on("click","#delete", function() {
                    var anggota_id        =  $(this).data('id');
                    $("#modal-delete #id").val(anggota_id);
                  })
                </script> 
        <!--end modal Delete unit-->
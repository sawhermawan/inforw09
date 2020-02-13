        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Trending <small> Topic</small></h3>
              </div>

              <div class="pull-right">
                <ol class="breadcrumb">
                  <li><a href="<"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li> <a href="<"><i class="fa fa-dashboard"></i> </a></li>
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
                        <a href="<?php echo base_url();?>index.php/trending/addTrending">
                        <button type="button" class="btn btn-success btn-sm" title="New"><i class="fa fa-plus"></i></button><b>Trending</b></a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <!-- modal add List Siswa -->
                </div>
                  <!--end modal add List Siswa-->
                
                  <div class="x_content">
                    <?=$this->session->flashdata('notif')?>
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                      <thead>
                        <tr class="info">
                          <th width="20px">No</th>
                          <th width="160px">Judul</th>
                          <th>Trending Artikel</th>
                          <th>Tanggal</th>
                          <th>Picture</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 0; ?>
                        <?php foreach ($m_trending->result() as $art): ?>
                        <?php $no++; ?>
                          <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $art->judul_trending; ?></td>
                            <td><?php echo $art->trending_artikel; ?></td>
                            <td><?php echo $art->tanggal; ?></td> 
                            <td><?php echo$art->picture; ?></td>
                            <td class="text-center">
                            <a href="<?php echo base_url('index.php/trending/edit/'.$art->id_trending)?>" title="Click to Edit" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>

                            <a id="delete" data-toggle="modal" data-target="#myModalDelete" 
                            data-id="<?php echo $art->id_trending; ?>">
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
                  [0,"desc"],
                ]
              })
            })
            
          </script>
        <!-- /page content -->
        <!-- modal edit siswa -->
        <!--end modal edit unit-->

        <!-- modal Delete unit -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalDelete" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header alert alert-danger">
                          <button aria-hidden="true" data-dismiss="modal" class="close form-control-feedback right" type="button">×</button>
                          <h4 class="modal-title">Delete Trending</h4>
                      </div>
                      <form class="form-horizontal" action="<?php echo base_url('index.php/trending/delete')?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="modal-body" id="modal-delete">
                          <div class="row">

                            <input type="hidden" id="id" name="id_trending">
                            <div class="alert alert-info">
                              <p>Apa bener mau hapus trending artikel ini???.</p>
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
                    var id_trending        =  $(this).data('id');
                    $("#modal-delete #id").val(id_trending);
                  })
                </script>
        <!--end modal Delete unit-->
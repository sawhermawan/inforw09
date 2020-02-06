        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Jobdesk</h3>
              </div>
            </div>
            
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    
                    <div class="col-md-9 col-sm-9 col-xs-12">

                        <form  class="form-horizontal form-label-left" action="<?php echo base_url('index.php/jobdesk/tambah')?>" method="post">
                          <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-1 col-xs-12" for="name">Nama Jabatan
                            </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                              <input id="name" class="form-control col-md-7 col-xs-12"  name="nama_jobdesk" required="nama_jobdesk" type="text">
                            </div>
                          </div>

                          <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-1 col-xs-12" for="isitugas">Isi Tugas</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                              <textarea class="form-control col-md-7 col-xs-12" rows="5" id="isitugas" name="isi_tugas" required="isi_tugas" style="resize: none;"></textarea>
                            </div>
                          </div>

                          <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-1 col-xs-12" for="isifungsi">Isi Fungsi</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                              <textarea class="form-control col-md-7 col-xs-12" rows="5" id="isifungsi" name="isi_fungsi" required="isi_fungsi" style="resize: none;"></textarea>
                            </div>
                          </div>

                          

                          <div class="item form-group">
                            <div class="col-md-6 col-md-offset-2">
                              <button id="save" name="save" type="submit" class="btn btn-success"><i class="fa fa-edit"></i> Save</button>                           
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
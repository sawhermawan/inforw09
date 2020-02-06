        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Jobdesk</h3>
              </div>
            </div>
            <?php foreach ($m_jobdesk as $jd): ?>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div class="login100-pic js-tilt" data-tilt>
                        <img src="<?php echo base_url(); ?>picture/09.jpg" alt="IMG">
                        </div>
                      </div>
                      <h3></h3>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                        <form  class="form-horizontal form-label-left" action="<?php echo base_url('index.php/jobdesk/update')?>" method="post">
                          <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-1 col-xs-12" for="name">Nama Jabatan
                            </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                              <input id="name" class="form-control col-md-7 col-xs-12" value="<?php echo $jd->nama_jobdesk; ?>" name="nama_jobdesk" type="text">
                            </div>
                          </div>

                          <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="fungsi">Isikan Tugas Pengurus<span class="required"></span>
                            </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                              <textarea id="fungsi" class="form-control col-md-7 col-xs-12" rows="5"  name="isi_tugas" required="required" style="resize: none;"><?php echo $jd->isi_tugas; ?></textarea>
                            </div>
                          </div>

                          <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="fungsi">Isikan Fungsi Pengurus <span class="required"></span>
                            </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                              <textarea id="fungsi" class="form-control col-md-7 col-xs-12" rows="5"  name="isi_fungsi" required="required" style="resize: none;"><?php echo $jd->isi_fungsi; ?></textarea>
                            </div>
                          </div>
                          
                                <?php endforeach ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <input type="hidden" name="id_jobdesk" value="<?php echo $jd->id_jobdesk; ?>">
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
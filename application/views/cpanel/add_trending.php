        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Trending</h3>
              </div>
            </div>
            
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    
                    <div class="col-md-9 col-sm-9 col-xs-12">

                        <form  class="form-horizontal form-label-left" action="<?php echo base_url('index.php/trending/TambahTrending')?>" method="post" enctype="multipart/form-data" role="form">
                          
                          <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-1 col-xs-12" for="judul">Judul Trending
                            </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                              <textarea id="judul" class="form-control col-md-7 col-xs-12" rows="2"  name="judul_trending" required="required" style="resize: none;"></textarea>
                            </div>
                          </div>
                          
                          <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-1 col-xs-12" for="art">Trending Topics
                            </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                              <textarea id="art" class="form-control col-md-7 col-xs-12" rows="7"  name="trending_artikel" required="required" style="resize: none;"></textarea>
                            </div>
                          </div>

                          <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-1 col-xs-12" for="tgl">Tanggal
                            </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                              <input id="tgl" class="form-control col-md-7 col-xs-12"  name="tanggal"  type="date">
                            </div>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input class="input-large form" type="file"  name="picture"  onchange="preview(this);">
                          </div>

                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback text-center">
                              <img id="avatar" width="250" src="<?php echo base_url();?>assets/img/no-images.png" class="img-polaroid" />
                            </div> 
                          </div>

                          
                          <div class="item form-group">
                            <div class="col-md-6 col-md-offset-2">
                              <button id="save" name="save" type="submit" class="btn btn-success"><i class="fa fa-edit"></i> Save</button>                           
                            </div>
                          </div>
                              <script>function preview(input) {
                                if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                $('#avatar')
                                .attr('src', e.target.result);
                                };
                                reader.readAsDataURL(input.files[0]);
                                }
                                }
                              </script>
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
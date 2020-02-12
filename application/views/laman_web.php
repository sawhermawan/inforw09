<style>
.wel{
    color: #111; font-family: 'Helvetica Neue', sans-serif; font-size: 4em; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center;
    background-color: gold;
    border: 10px ridge #5c5c56;
    position: relative;
    position: center;
    width: 800px;
    margin-left: 300px;
  }
</style>
<style>
  .tren{
    text-shadow: 0px -2px 0px #ffffff,
                0px 2px 3px #ffffff;
    text-align: center;
    font-family: arial;
    background-color: transparent;
    font-style: border;
      }
</style>
<style>
   #tren1  {
    color: #f2f2f2; 
    background: #ff4a4a;
    font-size: 70px;
    padding: 10px;

      }
</style>
<style>
   #tren2  {
    color: #f2f2f2; 
    background: #006cfa;
    font-size: 50px;
    font-family: arial;
    padding: 7px;

      }
</style>
<style>
   #news1  {
    color: #f2f2f2; 
    background: #006cfa;
    font-size: 70px;
    padding: 10px;

      }
</style>

<style>
   #news2  {
    color: #f2f2f2; 
    background: #ff4a4a;
    font-size: 50px;
    font-family: arial;
    padding: 7px;

      }
</style>

<style>
   #tit{

    background: linear-gradient(110deg, #ff8cfb 30%, #948cff 30%, #d1ff8c 80% );
    border: 10px ridge white; 
  }
</style>

<style>
   #mek{

      background-color: #eaeaea;
     border: 10px ridge transparent;
    background: linear-gradient(110deg, #bd6f6f 30%, #bd906f 30%, #d1e05a 80% );

      }
</style>

<style>
   #jdul{

      color: green;
  }
</style>
<br>

<div class="wel" align="center">Website Informasi RW 09</div>
  <br>
    
<div class="container-fluid pt-3" id="tit">
        
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div class="tren">
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4" id="tren"><span id="tren1">Trending</span>&nbsp; <span id="tren2">Topic</span></div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
          <?php foreach ($m_home->result() as $laman): ?>
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                  <a href="<?php echo base_url('index.php/laman_web/view/'.$laman->berita_id)?>"> </a>
                    <div class="fh5co_latest_trading_img">
                      <img src="<?php echo base_url(); ?>assets/images/<?php echo $laman->picture; ?>" alt=""
                      class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1" id="jdul">
                        <a href="<?php echo base_url('index.php/laman_web/view/'.$laman->berita_id)?>" class="text-white" > <?php echo $laman->judul_acara; ?> </a>
                        <div class="fh5co_latest_trading_date_and_name_color"> <?php echo $laman->tanggal; ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
<!--             <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="<?php echo base_url(); ?>assets/images/abigail-keenan-65477.jpg" alt="" class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="single.html" class="text-white"> Here's a new way to take better photos for instagram </a>
                        <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="images/ryan-moreno-98837.jpg" alt="" class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="single.html" class="text-white"> Here's a new way to take better photos for instagram </a>
                        <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="<?php echo base_url(); ?>assets/images/science-578x362.jpg" alt="" class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="single.html" class="text-white"> Here's a new way to take better photos for instagram </a>
                        <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="images/nick-karvounis-78711.jpg" alt="" class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="single.html" class="text-white"> Here's a new way to take better photos for instagram </a>
                        <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <br>


</div>
<br><br>

        <div class="tren">
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4" id="tren"><span id="news1">Informasi</span>&nbsp; <span id="news2">Kegiatan</span></div>
        </div>


    <div class="row" >
      <?php foreach ($m_home->result() as $laman): ?>
      <div class="col-lg-4 col-sm-6 portfolio-item" class="fh5co_latest_trading_img_position_relative" >
        <div class="card h-100" id="mek" >
          
          <a ><img class="card-img-top" src="<?php echo base_url(); ?>assets/img/<?php echo $laman->picture; ?>"></a>
          <div class="card-body" >
            <h4 class="card-title">
              <p><?php echo $laman->judul_acara; ?></p>
            </h4>
            <p class="card-text"><?php $laman->artikel;
                            $potong = substr($laman->artikel, 10, 150);
                            echo $potong;
                            ?><a href="<?php echo base_url('index.php/laman_web/view/'.$laman->berita_id)?>" title="Click to View"> Lanjutkan baca -></a></p>
                            <p><?php echo $laman->tanggal; ?></p>
            
          </div>

                
        </div>

      </div>
<?php endforeach; ?>
    </div>

<!-- <div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="<?php echo base_url(); ?>assets/images/39-324x235.jpg" alt=""/></div>
                    <div>
                        <a href="single.html" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="<?php echo base_url(); ?>assets/images/joe-gardner-75333.jpg" alt=""/></div>
                    <div>
                        <a href="single.html" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="<?php echo base_url(); ?>assets/images/ryan-moreno-98837.jpg" alt=""/></div>
                    <div>
                        <a href="single.html" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="<?php echo base_url(); ?>assets/images/seth-doyle-133175.jpg" alt=""/></div>
                    <div>
                        <a href="single.html" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="<?php echo base_url(); ?>assets/images/nathan-mcbride-229637.jpg" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="single.html" class="fh5co_mini_time py-3"> Thomson Smith -
                        April 18,2016 </a>
                        <div class="fh5co_consectetur"> Amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </div>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="<?php echo base_url(); ?>assets/images/ryan-moreno-98837.jpg" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
                        April 18,2016 </a>
                        <div class="fh5co_consectetur"> Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore.
                        </div>
                        <ul class="fh5co_gaming_topikk pt-3">
                            <li> Why 2017 Might Just Be the Worst Year Ever for Gaming</li>
                            <li> Ghost Racer Wants to Be the Most Ambitious Car Game</li>
                            <li> New Nintendo Wii Console Goes on Sale in Strategy Reboot</li>
                            <li> You and Your Kids can Enjoy this News Gaming Console</li>
                        </ul>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img">
                                <img src="<?php echo base_url(); ?>assets/images/photo-1449157291145-7efd050a4d0e-578x362.jpg" alt=""/>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
                        April 18,2016 </a>
                        <div class="fh5co_consectetur"> Quis nostrud xercitation ullamco laboris nisi aliquip ex ea commodo
                            consequat.
                        </div>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="<?php echo base_url(); ?>assets/images/office-768x512.jpg" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
                        April 18,2016 </a>
                        <div class="fh5co_consectetur"> Amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <a href="#" class="fh5co_tagg">Business</a>
                    <a href="#" class="fh5co_tagg">Technology</a>
                    <a href="#" class="fh5co_tagg">Sport</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                    <a href="#" class="fh5co_tagg">Photography</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Education</a>
                    <a href="#" class="fh5co_tagg">Social</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="images/download (1).jpg" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="images/allef-vinicius-108153.jpg" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Enim ad minim veniam nostrud xercitation ullamco.</div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="images/download (2).jpg" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center"><img src="images/seth-doyle-133175.jpg" alt="img"
                                                              class="fh5co_most_trading"/></div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
            <div class="col-12 text-center pb-4 pt-4">
                <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
                <a href="#" class="btn_pagging">1</a>
                <a href="#" class="btn_pagging">2</a>
                <a href="#" class="btn_pagging">3</a>
                <a href="#" class="btn_pagging">...</a>
                <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
             </div>
        </div>
    </div>
</div> -->
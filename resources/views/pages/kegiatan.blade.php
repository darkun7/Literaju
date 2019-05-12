@extends('layouts.base')

@section('title','Judul dari Kegiatan - LITERAJU')

<!--  -->
@section('css')
<style media="screen">
.orange{
  height: 80px;
  width: auto;
  background-color: #ff6700;
}
.box {
  background-color: #61c524;
  color: #fff;
  padding: 10px 25px;
}
.box a,
.box a:hover{
    color: white;
    text-decoration: none;
}
.search_widget .input-group .form-control {
    font-size: 14px;
    line-height: 29px;
    border: 0px;
    width: 100%;
    font-weight: 500;
    color: #fff;
    padding-left: 20px;
    border-radius: 45px;
    z-index: 0;
    background: #61c524;
}
.search_widget .input-group ::placeholder {
    font-size: 14px;
    font-weight: 500;
    color: #ffffff !important;
}
.search_widget .input-group .btn-default {
    position: absolute;
    right: 20px;
    background: transparent;
    border: 0px;
    box-shadow: none;
    font-size: 14px;
    color: #fff;
    padding: 0px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    z-index: 1;
}
</style>
@endsection
<section class="upper-tittle">
  <div class="orange"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <h2>Judul Kegiatan</h2>
        <p>Ayo donasi literasi, untuk Indonesia yang lebih baik!</p>
        <span class="box">
          <a href="/">Beranda </a>
          <span class="lnr lnr-arrow-right"></span>
          <a href="#">Aktivitas</a>
          <span class="lnr lnr-arrow-right"></span>
          <a href="#">Judul Kegiatan</a>
        </span>
      </div>
    </div>
  </div>
  <hr>
</section>

<section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="img/literasi/7.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#">Sarana Baca,</a>
                                    <a class="active" href="#">Buku,</a>
                                    <a href="#">Terpinggir,</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">12 Dec, 2019<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2>Astronomy Binoculars A Great Alternative</h2>
                            <p class="excert">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you should have to spend money on boot camp when you can get the MCSE study
                                materials yourself at a fraction.
                            </p>
                            <p>
                                Boot camps have its supporters and its detractors. Some people do not understand why
                                you should have to spend money on boot camp when you can get the MCSE study materials
                                yourself at a fraction of the camp price. However, who has the willpower to actually
                                sit through a self-imposed MCSE training. who has the willpower to actually sit through
                                a self-imposed
                            </p>
                            <p>
                                Boot camps have its supporters and its detractors. Some people do not understand why
                                you should have to spend money on boot camp when you can get the MCSE study materials
                                yourself at a fraction of the camp price. However, who has the willpower to actually
                                sit through a self-imposed MCSE training. who has the willpower to actually sit through
                                a self-imposed
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <div class="quotes">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you should have to spend money on boot camp when you can get the MCSE study
                                materials yourself at a fraction of the camp price. However, who has the willpower to
                                actually sit through a self-imposed MCSE training.
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mt-25">
                                    <p>
                                        MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money on boot camp when you can get the
                                        MCSE study materials yourself at a fraction of the camp price. However, who has
                                        the willpower.
                                    </p>
                                    <p>
                                        MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money on boot camp when you can get the
                                        MCSE study materials yourself at a fraction of the camp price. However, who has
                                        the willpower.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid" src="img/literasi/2.jpg" alt="" style="width:110px;"></a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                                </div>
                                <div class="detials">
                                    <p>Aktivitas Sebelumnya</p>
                                    <a href="#">
                                        <h4>Sumbangkan Buku untuk...</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Aktivitas Berikutnya</p>
                                    <a href="#">
                                        <h4>Bantuan Fasilitas ....</h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid" src="img/literasi/1.jpg" alt="" style="width:110px;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                      <div class="container">
                        <div class="row justify-content-center">
                          <div class="col-lg-12 ">
                            <div class="donation-box">
                              <form action="">
                                <h4 style="margin-bottom: 20px">Donasi</h4>
                                <div class="row" style="margin-bottom: 20px">
                                  <div class="col-lg-6 col-md-6">
                                    <a href="#" class="primary-btn primary-btn1" style="text-align:center; margin-right:20px; margin-left:20px;">Donasi Buku</a>
                                  </div>
                                  <div class="col-lg-6 col-md-6">
                                    <a href="#" class="secondary-btn primary-btn1" style="text-align:center;margin-right:20px; margin-left:20px;">Donasi Uang</a>
                                  </div>
                                </div>
                                <div class="donation-input">
                                  <div class="form-group">
                                    <span class="fs-14">Rupiah</span>
                                    <input type="text" placeholder="Minimal 200.000" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Minimal 200.000'"
                                     class="form-control">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-6 col-md-6">
                                    <div class="donation-type">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optradio">
                                          Sekali
                                        </label>
                                      </div>
                                      <p>Donasi sekali ini saja</p>
                                    </div>
                                  </div>

                                  <div class="col-lg-6 col-md-6">
                                    <div class="donation-type">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="optradio">
                                          Bulanan
                                        </label>
                                      </div>
                                      <p>Donasi hanya untuk sesi ini saja</p>
                                    </div>
                                  </div>
                                </div>
                              	<a href="/donasi" class="secondary-btn secondary-btn1 w-100" style="text-align:center;background-color: #61c524;">Donasi Sekarang</a>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="comments-area">
                        <h4>05 Comments</h4>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c1.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Emilly Blunt</a></h5>
                                        <p class="date">December 4, 2019 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="Balas-btn">
                                    <a href="" class="btn-Balas">Balas</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c2.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Elsie Cunningham</a></h5>
                                        <p class="date">December 4, 2019 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="Balas-btn">
                                    <a href="" class="btn-Balas">Balas</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c3.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Annie Stephens</a></h5>
                                        <p class="date">December 4, 2019 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="Balas-btn">
                                    <a href="" class="btn-Balas">Balas</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c4.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Maria Luna</a></h5>
                                        <p class="date">December 4, 2019 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="Balas-btn">
                                    <a href="" class="btn-Balas">Balas</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c5.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Ina Hayes</a></h5>
                                        <p class="date">December 4, 2019 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="Balas-btn">
                                    <a href="" class="btn-Balas">Balas</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                      <div class="search_widget">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Cari kegiatan" style="background-color: #61c524; margin-bottom:20px;">
                          <span class="input-group-btn">
                              <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                          </span>
                        </div>
                      </div>
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
                            <h4>Mr Marker</h4>
                            <p>International Literation Department</p>
                            <div class="social_icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                            <p>Saya mengabdi pada kepedulian masyarakat. Saya ditempatkan oleh PBB di Indonesia untuk turut serta dalam pengembangan literasi dunia.</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title" style="background-color: #61c524;">Trend Kegiatan</h3>
                            <div class="media post_item">
                                <img src="img/literasi/7.jpg" alt="post" style="width: 110px">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Judul Kegiatan</h3>
                                    </a>
                                    <p>02 Jam lalu</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/literasi/3.jpg" alt="post" style="width: 110px">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Judul Kegiatan</h3>
                                    </a>
                                    <p>02 Jam lalu</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/literasi/8.jpg" alt="post" style="width: 110px">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Judul Kegiatan</h3>
                                    </a>
                                    <p>03 Jam lalu</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/literasi/4.jpg" alt="post" style="width: 110px">
                                <div class="media-body">
                                    <a href="blog-details.html">
                                        <h3>Judul Kegiatan</h3>
                                    </a>
                                    <p>01 Jam lalu</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>

                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title" style="background-color: #61c524;">Tag Kegiatan</h4>
                            <ul class="list">
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Adventure</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--  -->
@section('content')



@endsection

<!--  -->
@section('js')

@endsection

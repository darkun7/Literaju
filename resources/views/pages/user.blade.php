@extends('layouts.baseUser')

@section('title','Dasbor - LITERAJU')

<!--  -->
@section('css')
<style media="screen">
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
.upper-tittle{
  /* margin-top: 70px; */
}
.orange{
  height: 80px;
  width: auto;
  background-color: #ff6700;
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
.select_kab{
    background: none repeat scroll 0 0 #61c524;;
    color: white;
    border: 1px solid #61c524;
    border-radius: 45px;
    height: 40px;
    margin: 0 0 0 25px;
    padding: 10px;
    width: auto;
}
@media only screen and (max-width: 800px) {
.box,
.select_kab{
  display: none;
}
}
.box-menu{
height: 210px;
width: auto;
margin: 42px;
margin-top: 20px;
}
</style>
@endsection

<!--  -->
@section('content')
<section class="upper-tittle">
  <div class="orange"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h2>Halo, Pengguna Pencoba!</h2>
        <p>Riwayet aktivitas yang tersimpan</p>
      </div>
    </div>
    <div class="row"  style="margin-bottom:20px;">
      <div class="col-lg-3 col-md-6" >
          <a href="/daftar" class="primary-btn primary-btn1" style="text-align:center; ">Sarankan Tempat Literasi</a>
      </div>
      <div class="col-lg-3 col-md-6" >
          <a href="/daftar" class="secondary-btn secondary-btn1" style="text-align:center; ">Rekomendasikan Buku</a>
      </div>
    </div>
  </div>
  <hr>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 box-menu" style="background-color: #ffcc66;">
        <div class="collection-box">
          <p>Donasi Uang</p>
          <h3><span class="counter">1.2</span> Jt</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 box-menu" style="background-color: #99ff66;">
        <div class="collection-box">
          <p>Donasi Buku</p>
          <h3><span class="counter">13</h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 box-menu" style="background-color: #99ccff;">
        <div class="collection-box">
          <p>Partisipasi Kegiatan</p>
          <h3><span class="counter">2</h3>
        </div>
      </div>
    </div>

  </div>
</section>
<section class="causes-area" id="#section-n">
		<div class="container">
      <h2>Daftar Tempat Literasi</h2>
      <p>Ayo donasi literasi, untuk Indonesia yang lebih baik!</p>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-cause">
						<div class="top">
							<div class="thumb">
								<img class="c-img img-fluid" src="img/literasi/1.jpg" alt="">
							</div>
							<a href="#">
								<h3>Judul dari kegiatan Literaju</h3>
							</a>
							<p class="text">
								Text ini akan digunakan sebagai deskripsi agenda tempat literasi...
							</p>
						</div>
						<div class="middle">
							<div class="skill_main">
								<div class="skill_item">
									<div class="progress">
										<div class="progress-bar progress-bar1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
							<div class="d-flex">
								<div class="mr-50">
									<h5><span class="counter">76</span>%</h5>
									<p>Terkumpul</p>
								</div>
								<div class="mr-50">
									<h5><span class="counter">1,023</span></h5>
									<p>Buku</p>
								</div>
								<div class="">
									<h5><span class="counter">29</span></h5>
									<p>Hari lagi</p>
								</div>
							</div>
						</div>
							<a href="/kegiatan2" class="primary-btn offwhite btn-block" style="text-align:center">Rincian</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-cause">
						<div class="top">
							<div class="thumb">
								<img class="c-img img-fluid" src="img/literasi/2.jpg" alt="">
							</div>
							<a href="#">
								<h3>Judul dari kegiatan Literaju</h3>
							</a>
							<p class="text">
								Text ini akan digunakan sebagai deskripsi agenda tempat literasi...
							</p>
						</div>
						<div class="middle">
							<div class="skill_main">
								<div class="skill_item">
									<div class="progress">
										<div class="progress-bar progress-bar1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
							<div class="d-flex">
								<div class="mr-50">
									<h5><span class="counter">76</span>%</h5>
									<p>Terkumpul</p>
								</div>
								<div class="mr-50">
									<h5><span class="counter">1,023</span></h5>
									<p>Buku</p>
								</div>
								<div class="">
									<h5><span class="counter">29</span></h5>
									<p>Hari lagi</p>
								</div>
							</div>
						</div>
						<a href="/kegiatan2" class="primary-btn offwhite btn-block" style="text-align:center">Rincian</a>
					</div>
				</div>

        <div class="col-lg-4 col-md-6">
          <div class="single-cause">
            <div class="top">
              <div class="thumb">
                <img class="c-img img-fluid" src="img/literasi/4.jpg" alt="">
              </div>
              <a href="#">
                <h3>Judul dari kegiatan Literaju</h3>
              </a>
              <p class="text">
                Text ini akan digunakan sebagai deskripsi agenda tempat literasi...
              </p>
            </div>
            <div class="middle">
              <div class="skill_main">
                <div class="skill_item">
                  <div class="progress">
                    <div class="progress-bar progress-bar1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="d-flex">
                <div class="mr-50">
                  <h5><span class="counter">76</span>%</h5>
                  <p>Terkumpul</p>
                </div>
                <div class="mr-50">
                  <h5><span class="counter">1,023</span></h5>
                  <p>Buku</p>
                </div>
                <div class="">
                  <h5><span class="counter">29</span></h5>
                  <p>Hari lagi</p>
                </div>
              </div>
            </div>
            <a href="/kegiatan2" class="primary-btn offwhite btn-block" style="text-align:center">Rincian</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
					<div class="single-cause">
						<div class="top">
							<div class="thumb">
								<img class="c-img img-fluid" src="img/literasi/5.jpg" alt="">
							</div>
							<a href="#">
								<h3>Judul dari kegiatan Literaju</h3>
							</a>
							<p class="text">
								Text ini akan digunakan sebagai deskripsi agenda tempat literasi...
							</p>
						</div>
						<div class="middle">
							<div class="skill_main">
								<div class="skill_item">
									<div class="progress">
										<div class="progress-bar progress-bar1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
							<div class="d-flex">
								<div class="mr-50">
									<h5><span class="counter">76</span>%</h5>
									<p>Terkumpul</p>
								</div>
								<div class="mr-50">
									<h5><span class="counter">1,023</span></h5>
									<p>Buku</p>
								</div>
								<div class="">
									<h5><span class="counter">29</span></h5>
									<p>Hari lagi</p>
								</div>
							</div>
						</div>
						<a href="/kegiatan2" class="primary-btn offwhite btn-block" style="text-align:center">Rincian</a>
					</div>
				</div>

        <div class="col-lg-4 col-md-6">
					<div class="single-cause">
						<div class="top">
							<div class="thumb">
								<img class="c-img img-fluid" src="img/literasi/7.jpg" alt="">
							</div>
							<a href="#">
								<h3>Judul dari kegiatan Literaju</h3>
							</a>
							<p class="text">
								Text ini akan digunakan sebagai deskripsi agenda tempat literasi...
							</p>
						</div>
						<div class="middle">
							<div class="skill_main">
								<div class="skill_item">
									<div class="progress">
										<div class="progress-bar progress-bar1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
							<div class="d-flex">
								<div class="mr-50">
									<h5><span class="counter">76</span>%</h5>
									<p>Terkumpul</p>
								</div>
								<div class="mr-50">
									<h5><span class="counter">1,023</span></h5>
									<p>Buku</p>
								</div>
								<div class="">
									<h5><span class="counter">29</span></h5>
									<p>Hari lagi</p>
								</div>
							</div>
						</div>
						<a href="/kegiatan2" class="primary-btn offwhite btn-block" style="text-align:center">Rincian</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-cause">
						<div class="top">
							<div class="thumb">
								<img class="c-img img-fluid" src="img/literasi/8.jpg" alt="">
							</div>
							<a href="#">
								<h3>Judul dari kegiatan Literaju</h3>
							</a>
							<p class="text">
								Text ini akan digunakan sebagai deskripsi agenda tempat literasi...
							</p>
						</div>
						<div class="middle">
							<div class="skill_main">
								<div class="skill_item">
									<div class="progress">
										<div class="progress-bar progress-bar1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
							<div class="d-flex">
								<div class="mr-50">
									<h5><span class="counter">76</span>%</h5>
									<p>Terkumpul</p>
								</div>
								<div class="mr-50">
									<h5><span class="counter">1,023</span></h5>
									<p>Buku</p>
								</div>
								<div class="">
									<h5><span class="counter">29</span></h5>
									<p>Hari lagi</p>
								</div>
							</div>
						</div>
						<a href="/kegiatan2" class="primary-btn offwhite btn-block" style="text-align:center">Rincian</a>
					</div>
				</div>
			</div>
		</div>
    <div class="col-md-12 section-title" style="margin-top:20px;">
      <a href="/aktivitas" class="primary-btn primary-btn1">Lihat Semua</a>
    </div>
	</section>



@endsection

<!--  -->
@section('js')

@endsection

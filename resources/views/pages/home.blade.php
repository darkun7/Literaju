@extends('layouts.base')

@section('title','Home - LITERAJU')

<!--  -->
@section('css')
<style media="screen">
  #section-gap{
    background:#fff09e;
    padding: 60px 0 60px 0;
  }
  #section-n{
    padding: 60px 0 60px 0;
  }
  .row {
    margin-right: 0px;
    margin-left: 0px;
}
  .section-title {
    padding-bottom: 20px;
    text-align: center;
  }
  .dhome{
    min-height: 550px;
    background: url(/img/banner_01.png) no-repeat center center !important;
    background-size: auto;
    background-size: contain;
    margin-bottom: 120px;
  }
  .dcenter{
    margin: 250px 0 0 0px;
    color: white;
    text-align: center;
  }
  .dcenter h2{
    color:white;
  }
  .btn-box{
    width: auto;
    margin:100px 10% 0 10%;
    background-color: #fff;
    border-radius: 5px;
    align-items: center;
    position: relative;
    padding: 20px 0 20px 0;
    top: 40px;
    box-shadow: 0 10px 20px rgba(0,0,0,.1),0 6px 6px rgba(0,0,0,.1);
    text-align: center;
    /* border-radius: 10px;
    background-color: white;
    align-self: center;
    position: relative;
    margin: 100px 5% 0 5%;
    width: auto;
    height: 120px; */

  }
</style>
@endsection

<!--  -->
@section('content')
<!-- Banner Awal -->
<section class="dhome home-banner-area" >
		<div class="row justify-content-center" id="banner-home">
			<div class="dcenter">
        <p>Platform crowd sourcing donasi buku untuk pemuda Indonesia</p>
        <h2>Ayo bangun generasi muda dengan minat baca.</h2>
        <p>Jadilah donatur atau menjadi relawan dengan ikut menyukseskan event di tempat literasi.</p>
        <div class="btn-box">
            <!-- <a href="#" class="primary-btn primary-btn1" style="text-align:center; margin-right:20px; margin-left:20px;">Gabung Relawan</a><br> <i style="color:black">atau<i> <br> -->
            <a href="/daftar" class="primary-btn primary-btn1" style="text-align:center; margin-right:20px; margin-left:20px;">Gabung Relawan</a>
            <a href="/donasi" class="secondary-btn primary-btn1" style="text-align:center;margin-right:20px; margin-left:20px;">Donasi Uang/ Buku</a>
        </div>
			</div>
	</div>
</section>
<!-- Banner Awal -->

<!-- Kampanye Event -->
<section class="causes-area" id="#section-n">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 section-title">
					<h2>Tempat Donasi Literasi</h2>
					<p>
						Ayo donasi literasi, untuk Indonesia yang lebih baik!
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-cause">
						<div class="top">
							<div class="thumb">
								<img class="c-img img-fluid" src="img/literasi/3.jpg" alt="">
							</div>
							<a href="#">
								<h3>Bantu Galang Dana untuk Tingkatkan Literasi</h3>
							</a>
							<p class="text">
								Para generasi muda dari kabupaten ....
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
							<a href="#" class="primary-btn offwhite btn-block" style="text-align:center">Rincian</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-cause">
						<div class="top">
							<div class="thumb">
								<img class="c-img img-fluid" src="img/literasi/6.jpg" alt="">
							</div>
							<a href="#">
								<h3>Literasi Sejak Dini</h3>
							</a>
							<p class="text">
								TK Al Hikmah di Kabupaten Trenggalek mengajak anda ...
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
						<a href="#" class="primary-btn offwhite btn-block" style="text-align:center">Rincian</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-cause">
						<div class="top">
							<div class="thumb">
								<img class="c-img img-fluid" src="img/literasi/9.jpg" alt="">
							</div>
							<a href="#">
								<h3>Usaha Membudayakan Membaca</h3>
							</a>
							<p class="text">
								Kami membutuhkan buku pendidikan dan ilmu pengetahuan ...
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
						<a href="#" class="primary-btn offwhite btn-block" style="text-align:center">Rincian</a>
					</div>
				</div>
			</div>
		</div>
    <div class="col-md-12 section-title" style="margin-top:20px;">
      <a href="/aktivitas" class="primary-btn primary-btn1">Lihat Semua</a>
    </div>
	</section>
<!-- Kampanye Event -->

<!-- Statistik -->
<section class="collection-area" id="section-gap">
		<div class="container">
      <div class="col-md-12 section-title">
        <h2>Statistik Aktivitas Literaju</h2>
      </div>
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<div class="collection-box">
						<h3 class="color1"><span class="counter">10.3</span> K</h3>
						<p>Donatur</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<div class="collection-box">
						<h3><span class="counter">236</h3>
						<p>Outlet</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<div class="collection-box">
						<h3 class="color3"><span class="counter">2.3</span> Jt</h3>
						<p>Buku didonasikan</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<div class="collection-box">
						<h3><span class="counter">120</span> </h3>
						<p>Aktivitas</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- Statistik -->
@endsection

<!--  -->
@section('js')

@endsection

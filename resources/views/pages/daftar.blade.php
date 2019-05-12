@extends('layouts.baseNF')

@section('title','Daftar - LITERAJU')

<!--  -->
@section('css')
<style media="screen">
body {
  /* background:url(http://farm8.staticflickr.com/7064/6858179818_5d652f531c_h.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; */
}
.donation-input .form-group ::placeholder {
    color: grey;
    opacity: 1;
    font-weight: normal !important;
}
.donation-input .form-group input{
  margin-bottom: 10px;
}
</style>
@endsection

<!--  -->
@section('content')
<section class="donation-area relative section-gap-top" style="height:450px;background:#ff6700;">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-5">
				<div class="text-center text-wrap">
					<h1 class="mb-25">Gabung Bersama Kami</h1>
					<p>Jadilah pahlawan literasi dengan berbagi buku. Anda juga dapat menjadi relawan untuk membantu kami.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="donation-form-area section-gap-bottom" >
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-10 col-sm-12">
					<div class="donation-box">
						<form action="">
              <h1 style="text-align:center;margin-bottom:20px;">Daftar</h1>
							<div class="donation-input">
								<div class="form-group">
                  <input type="text" name="" placeholder="Nama Lengkap" class="form-control">
                  <input type="text" name="" placeholder="Email" class="form-control">
                  <input type="text" name="" placeholder="Nomor Telefon" class="form-control">
                  <input type="password" name="" placeholder="Password" class="form-control">
								</div>
							</div>


									<div class="donation-type">
										<div class="form-check">
                        <input type="checkbox" class="form-check-input" name="relawan" value="wanrela">  Saya ingin mendaftar sebagai <bold>Relawan</bold><br>
                        <p>Tidak wajib untuk dicentang</p>
										</div>
									</div>


								<!-- <div class="col-lg-6 col-md-6">
									<div class="donation-type">
										<div class="form-check">
											<label class="form-check-label">
												<input type="radio" class="form-check-input" name="optradio">
												Donatur
											</label>
										</div>
										<p>dummy text will be here</p>
									</div>
								</div>

								<div class="col-lg-6 col-md-6">
									<div class="donation-type">
										<div class="form-check">
											<label class="form-check-label">
												<input type="radio" class="form-check-input" name="optradio">
												Relawan
											</label>
										</div>
										<p>dummy text will be here</p>
									</div>
								</div>
							</div> -->

							<a type="button" href="/masuk" style="text-align:center;" class="secondary-btn w-100">Daftar</a>
              <a href="/masuk">Sudah punya akun? Masuk</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

<!--  -->
@section('js')

@endsection

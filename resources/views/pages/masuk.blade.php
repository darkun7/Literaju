@extends('layouts.baseNF')

@section('title','Masuk - LITERAJU')

<!--  -->
@section('css')
<style media="screen">

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
<section class="donation-area relative section-gap-top" style="height:250px;">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-5">
				<div class="text-center text-wrap">
					<!-- <h1 class="mb-25">Gabung Bersama Kami</h1>
					<p>Jadilah pahlawan literasi dengan berbagi buku. Anda juga dapat menjadi relawan untuk membantu kami.</p> -->
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
              <h1 style="text-align:center;margin-bottom:20px;">Masuk</h1>
							<div class="donation-input">
								<div class="form-group">
                  <input type="text" name="" placeholder="Email" class="form-control">
                  <input type="password" name="" placeholder="Password" class="form-control">
								</div>
							</div>

							<a type="button" href="/user" class="primary-btn primary-btn1 w-100" style="text-align:center;">Masuk</a>
              <a href="/masuk">Belum punya akun? Daftar</a><br>
              <a href="#">Masalah login?</a>
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

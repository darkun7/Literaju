@extends('layouts.base')

@section('title','Galeri - LITERAJU')

<!--  -->
@section('css')
<style media="screen">
#columns {
	column-width: 320px;
	column-gap: 15px;
  width: 90%;
	max-width: 1100px;
	margin: 50px auto;
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

div#columns figure {
	background: #fefefe;
	border: 2px solid #fcfcfc;
	box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
	margin: 0 2px 15px;
	padding: 15px;
	padding-bottom: 10px;
	transition: opacity .4s ease-in-out;
  display: inline-block;
  column-break-inside: avoid;
}

div#columns figure img {
	width: 100%; height: auto;
	border-bottom: 1px solid #ccc;
	padding-bottom: 15px;
	margin-bottom: 5px;
}

div#columns figure figcaption {
  font-size: .9rem;
	color: #444;
  line-height: 1.5;
}

div#columns small {
  font-size: 1rem;
  float: right;
  text-transform: uppercase;
  color: #aaa;
}

div#columns small a {
  color: #666;
  text-decoration: none;
  transition: .4s color;
}

div#columns:hover figure:not(:hover) {
	opacity: 0.4;
}

@media screen and (max-width: 750px) {
  #columns { column-gap: 0px; }
  #columns figure { width: 100%; }
}
</style>
@endsection

<!--  -->
@section('content')
<section class="upper-tittle">
  <div class="orange"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <h2>Galeri Literasi</h2>
        <p>Ayo donasi literasi, untuk Indonesia yang lebih baik!</p>
        <span class="box">
          <a href="/">Beranda </a>
          <span class="lnr lnr-arrow-right"></span>
          <a href="#">Galeri Literasi</a>
        </span>
      </div>
      <div class="col-sm-4">
        <br>
        <div class="search_widget">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari foto kegiatan">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
</section>
<div id="columns">
  <figure>
  <img src="img/literasi/6.jpg">
	<figcaption>Deskripsi foto. <i>Tags:</i> #contoh </figcaption>
	</figure>

	<figure>
	<img src="img/literasi/7.jpg">
	<figcaption>Deskripsi foto. <i>Tags:</i> #contoh </figcaption>
	</figure>

  <figure>
	<img src="img/literasi/5.jpg">
	<figcaption>Deskripsi foto. <i>Tags:</i> #contoh </figcaption>
	</figure>

	<figure>
	<img src="img/literasi/1.jpg">
	<figcaption>Deskripsi foto. <i>Tags:</i> #contoh </figcaption>
	</figure>

   <figure>
	 <img src="img/literasi/4.jpg">
	<figcaption>Deskripsi foto. <i>Tags:</i> #contoh </figcaption>
	</figure>

	</div>

  <section class="col-md-12 section-title" style="margin-top:20px;">
    <nav class="blog-pagination justify-content-center d-flex">
      <ul class="pagination">
          <li class="page-item">
              <a href="#" class="page-link" aria-label="Previous">
                  <span aria-hidden="true">
                      <span class="lnr lnr-chevron-left"></span>
                  </span>
              </a>
          </li>
          <li class="page-item"><a href="#" class="page-link">1</a></li>
          <li class="page-item active"><a href="#" class="page-link">2</a></li>
          <li class="page-item"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link">4</a></li>
          <li ><c href="#" class="page-link">...</c></li>
          <li class="page-item"><a href="#" class="page-link">9</a></li>
          <li class="page-item">
              <a href="#" class="page-link" aria-label="Next">
                  <span aria-hidden="true">
                      <span class="lnr lnr-chevron-right"></span>
                  </span>
              </a>
          </li>
      </ul>
    </nav>
  </section>

@endsection

<!--  -->
@section('js')

@endsection

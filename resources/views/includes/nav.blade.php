<style media="screen">
  #header.header-scrolled{
    background-color: #ff6700;
  }
  #logo{
    width: 150px;
    height: 55px;
    background-image: url(/img/logo_w.png);
    position: relative;
    margin-bottom: 0;
    transition: all 0.3s;
    background-repeat: no-repeat;
    background-attachment: contain;
    background-size: contain;
  }
  #logo:hover{
    cursor: pointer;
  }
  nav ul a{
    font-weight: 700 !important;
  }
  nav ul a:hover{
    text-decoration: underline !important;
  }
</style>
<header  id="header">
  <div class="container">
    <div class="row align-items-center justify-content-between d-flex">
      <div onClick="window.open( '/','_top' ); return false;" id="logo">
        <!-- <a href="index.html"><img style="" src="img/logo.png" height="42" width="42" alt="LITERAJU" title="" /></a> -->
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="/">Beranda</a></li>
          <li><a href="/galeri">Galeri</a></li>
          <li><a href="/aktivitas">Tempat Literasi</a></li>
          <li><a href="/daftar">Daftar</a></li>
          <li><a href="/masuk">Masuk</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </div>
</header>

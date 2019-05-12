<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/favicon.png">
	<meta name="author" content="codepixer">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="UTF-8">
	<title>@yield('title')</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Roboto:300,400,500,700" rel="stylesheet">

	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
  @yield('css')
	<style media="screen">
	.primary-btn{line-height: 47px;}
	.secondary-btn {
		background-color: #ff6700;
		line-height: 47px;
		padding: 0 35px;
		border: none;
		color: #fff;
		display: inline-block;
		font-size: 14px;
		font-weight: 500;
		position: relative;
		border: 1px solid transparent;
		-webkit-transition: all 0.3s ease 0s;
		-moz-transition: all 0.3s ease 0s;
		-o-transition: all 0.3s ease 0s;
		transition: all 0.3s ease 0s;
		cursor: pointer;
		text-transform: capitalize;
		position: relative;
	}
	.secondary-btn:hover {
    color: #ff6700;
    background-color: transparent;
    border-color: #ff6700;
	}
	.single-footer-widget .click-btn{
		background-color: #61c524;
	}
	.footer-text a:hover, .footer-text i:hover {
    color: #ff6700;
	}
	.footer-text a, .footer-text i {
    color: #61c524;
	}
	.single-cause .middle {
		margin-top: 0px;
	}
	.single-cause .top {
		padding-bottom: 10px;
	}
.blog-pagination .page-link:hover,
.blog-pagination .page-item.active .page-link {
		background-color: #61c524;
	}



	</style>
</head>

<body>

	<!-- Start Header Area -->
	@include('includes.nav')
	<!-- Start Header Area -->

	@yield('content')

	<!-- start footer Area -->
	@include('includes.footer')
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
  @yield('js')
</body>

</html>

<!doctype html>
<html lang="en">

<head>
	<title>@yield('title-pages', 'Dashboard | Klorofil - Free Bootstrap Dashboard Template')</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/linearicons/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/chartist/chartist-custom.css') }}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/klorofil-css/main.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">

		<!-- NAVBAR -->
		@include('adminPages.templates.header-admin')
		<!-- END NAVBAR -->

		<!-- LEFT SIDEBAR -->
		@include('adminPages.templates.sidebar-admin')
		<!-- END LEFT SIDEBAR -->

		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					@yield('content')
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>


		<!-- Footer -->
		@include('adminPages.templates.footer-admin')
		<!-- END FOOTER -->
	</div>
	<!-- END WRAPPER -->



	<!-- Jquery Online CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="{{ asset('assets/js/bootstrap-js/bootstrap.min.js') }} "></script>
	<script src="{{ asset('assets/js/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('assets/js/chartartist/chartist.min.js') }}"></script>
	<script src="{{ asset('assets/js/klorofil-js/klorofil-common.js') }}"></script>

	<!-- Link navigasi Active when click -->
	<script>
		$(function() {
			var current = location.pathname;
			$('#navigasiBar li a').each(function() {

				var $this = $(this);

				if ($this.attr('href').indexOf(current) !== -1) {
					$('#navigasiBar li a').removeClass('active')
					$this.addClass('active');
				}
			})
		})
	</script>



	@stuck('chart-js')


</body>

</html>
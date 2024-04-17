<!DOCTYPE HTML>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <?php
    require_once('link.php');
    ?>
    <?php
    session_start();
    if(isset($_SESSION['id'])){

   ?>
	    <?php
    }
    else{
        echo "
        <script>
       alert('Please Login');
       window.location.href='../admin';
        </script>
        ";
    }
    ?>
</head>

<body>
	<script src="../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
	<script>
		(function () {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
			}
		})();
	</script>
	<script>
		(function () {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
			}
		})();
	</script>
	<script>
		(function () {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
			}
		})();
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src='https://www.googletagmanager.com/gtag/js?id=G-98H8KRKT85'></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'G-98H8KRKT85');
	</script>

	<meta name="robots" content="noindex">

	<body>
		<link rel="stylesheet" href="../../../assests/css/font-awesome.min.css">
		<!-- New toolbar-->
		<style>
			* {
				box-sizing: border-box;
				font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
			}


			#w3lDemoBar.w3l-demo-bar {
				top: 0;
				right: 0;
				bottom: 0;
				z-index: 9999;
				padding: 40px 5px;
				padding-top: 70px;
				margin-bottom: 70px;
				background: #0D1326;
				border-top-left-radius: 9px;
				border-bottom-left-radius: 9px;
			}

			#w3lDemoBar.w3l-demo-bar a {
				display: block;
				color: #e6ebff;
				text-decoration: none;
				line-height: 24px;
				opacity: .6;
				margin-bottom: 20px;
				text-align: center;
			}

			#w3lDemoBar.w3l-demo-bar span.w3l-icon {
				display: block;
			}

			#w3lDemoBar.w3l-demo-bar a:hover {
				opacity: 1;
			}

			#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
				color: #e6ebff;
			}

			#w3lDemoBar.w3l-demo-bar .responsive-icons {
				margin-top: 30px;
				border-top: 1px solid #41414d;
				padding-top: 40px;
			}

			#w3lDemoBar.w3l-demo-bar .demo-btns {
				border-top: 1px solid #41414d;
				padding-top: 30px;
			}

			#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
				font-size: 26px;
			}

			#w3lDemoBar.w3l-demo-bar .no-margin-bottom {
				margin-bottom: 0;
			}

			.toggle-right-sidebar span {
				background: #0D1326;
				width: 50px;
				height: 50px;
				line-height: 50px;
				text-align: center;
				color: #e6ebff;
				border-radius: 50px;
				font-size: 26px;
				cursor: pointer;
				opacity: .5;
			}

			.pull-right {
				float: right;
				position: fixed;
				right: 0px;
				top: 70px;
				width: 90px;
				z-index: 99999;
				text-align: center;
			}

			/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

			#right-sidebar {
				width: 90px;
				position: fixed;
				height: 100%;
				z-index: 1000;
				right: 0px;
				top: 0;
				margin-top: 60px;
				-webkit-transition: all .5s ease-in-out;
				-moz-transition: all .5s ease-in-out;
				-o-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
				overflow-y: auto;
			}


			/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

			.hide-right-bar-notifications {
				margin-right: -300px !important;
				-webkit-transition: all .3s ease-in-out;
				-moz-transition: all .3s ease-in-out;
				-o-transition: all .3s ease-in-out;
				transition: all .3s ease-in-out;
			}



			@media (max-width: 992px) {
				#w3lDemoBar.w3l-demo-bar a.desktop-mode {
					display: none;

				}
			}

			@media (max-width: 767px) {
				#w3lDemoBar.w3l-demo-bar a.tablet-mode {
					display: none;

				}
			}

			@media (max-width: 568px) {
				#w3lDemoBar.w3l-demo-bar a.mobile-mode {
					display: none;
				}

				#w3lDemoBar.w3l-demo-bar .responsive-icons {
					margin-top: 0px;
					border-top: none;
					padding-top: 0px;
				}

				#right-sidebar,
				.pull-right {
					width: 90px;
				}

				#w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile {
					margin-bottom: 0;
				}
			}
		</style>
		
		<div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
			style="overflow: hidden; outline: none;">
		</div>
		</div>
		</div>
		</div>

		<div id="wrapper">
			<!-- Navigation -->
			<?php
			require_once('nav.php');
			?>
			<div id="page-wrapper">
				<!---728x90--->

				<div class="graphs">
					<div class="col_3">
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="pull-left fa fa-sliders icon-rounded"></i>
								<div class="stats">
									<h5><strong>Slider</strong></h5>
									<!-- <span>New Orders</span> -->
								</div>
							</div>
						</div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="pull-left fa fa-picture-o user1 icon-rounded"></i>
								<div class="stats">
									<h5><strong>Gallery</strong></h5>
									<span>New Visitors</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="pull-left fa fa-comment user2 icon-rounded"></i>
								<div class="stats">
									<h5><strong>Services</strong></h5>
									<span>New Users</span>
								</div>
							</div>
						</div>
						-->
						<div class="clearfix"> </div>
					</div>
					
				</div>
			</div>
		</div>
		
		<script src="js/bootstrap.min.js"></script>

		

</html>
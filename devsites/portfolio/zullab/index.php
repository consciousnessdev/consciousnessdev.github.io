<?php

date_default_timezone_set("Asia/Jakarta");

$b = time();
$hour = date("G",$b);
if ($hour>=0 && $hour<=11)
	{
		$say =  "Selamat Pagi";
		$bg_intro = "intro-pagi.jpg";
	}
	elseif ($hour >=12 && $hour<=14)
	{
		$say = "Selamat Siang";
		$bg_intro = "intro-siang.jpg";
	}
	elseif ($hour >=15 && $hour<=16)
	{
		$say =  "Selamat Sore";
		$bg_intro = "intro-sore.jpg";
	}
	elseif ($hour >=17 && $hour<=18)
	{
		$say =  "Selamat Petang";
		$bg_intro = "intro-petang.jpg";
	}
	elseif ($hour >=19 && $hour<=23)
	{
		$say =  "Selamat Malam";
		$bg_intro = "intro-malam.jpg";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0"/>
		<title>ZULLAB</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/style-responsive.css">
	</head>
	<body>
		<div id="header">
			<div class="container text-center">
				<div class="img-content">
					<div id="img-header" class="img-responsive"></div>
				</div>
				<div id="nav-header">
					<div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a" id="nav-next">
						<a href="#intro" title=""><i class="hi-icon fa fa-angle-down"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div id="intro">
			<div class="bg-intro" style="position: relative;background: url('img/<?php echo $bg_intro;?>') no-repeat center center;  background-size: cover;
  height: 100vh;"
			>
				<div class="vertical-center">
					<div class="container text-center">
						<div class="jumbotron intro-content">
							<h1>
								<?php echo $say;?>
							</h1>
							<p>
								Kami adalah perusahaan pengembangan perangkat lunak
							</p>
							<p>
								Kami akan membantu anda membangun Website
							</p>
							<p>
								Kami membangun website atas dasar functionality, technology &amp; security
							</p>
							<p>
								Aplikasi yang Kami buat fokus pada pembuatan Dashboard, Library(PHP)  &amp; Aplikasi Report.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="service">
			<div class="vertical-center">
				<div class="container text-center">
					<div class="row" id="service-header">
						<h1>Apa Yang Kami Kerjakan</h1>
						<p>Beberapa jasa dan produk yang kami tawarkan untuk memenuhi kebutuhan perusahaan anda.</p>
					</div>
					<div class="row" id="service-content">
						<div class="service-item col-xs-12 col-sm-4 col-md-4">
							<div class="service-point hi-icon8-wrap hi-icon-effect-8">
								<i class="hi-icon8 fa fa-dashboard custom-ico">

								</i>
								<h3>
									Dashboard
								</h3>
								<p>
									Setiap admintrator yang ingin memonitoring websitenya, dan untuk manajer perusahaan yang ingin melihat semua data transaksi dimana saja. dashboard adalah solusi untuk anda, karena kami dapat mengelola data - data anda untuk dijadikan dashborad. <a>Lihat Detail</a>.
								</p>
							</div>
						</div>
						<div class="service-item col-xs-12 col-sm-4 col-md-4">
							<div class="service-point hi-icon8-wrap hi-icon-effect-8">
								<i class="hi-icon8 fa fa-list-ul custom-ico">

								</i>
								<h3>
									Library
								</h3>
								<p>
									Jika anda seorang web developer dan membutuhkan pembuatan Library untuk website anda seperti Penomoran Dokumen,Pembuatan API, Library Email, atau bisa menyesuikan sesuai dengan yang anda inginkan, kami siap untuk mengembangkan library tersebut. <a>Lihat Detail</a>.
								</p>
							</div>
						</div>
						<div class="service-item col-xs-12 col-sm-4 col-md-4">
							<div class="service-point hi-icon8-wrap hi-icon-effect-8">
								<i class="hi-icon8 fa fa-file-text-o">

								</i>
								<h3>
									Report
								</h3>
								<p>
									Kami melayani pembuatan report untuk perusahaan anda dan menampilkannya di website anda sesuai dengan data yang anda miliki. <a>Lihat Detail</a>.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="contact">
			<div class="vertical-center">
				<div class="container text-center">
					<div class="row contact-header">
						<h1>Tetap Terhubung</h1>
						<p>Kami akan Senang untuk Merealisasikan Impian Digital Anda.</p>
					</div>
					<div class="row contact-content">
						<span class="fa fa-envelope-o"></span> <a href="mailto:ario@zullab.co.id">ario@zullab.co.id</a><br/>
						<span class="fa fa-phone"></span> +62 8111 3194 4
					</div>

				</div>
			</div>
			<div id="top-nav">
				<div class="hi-icontop-wrap hi-icontop-effect-1 hi-icontop-effect-1a" id="nav-top">
					<a href="#header" title=""><i class="hi-icontop fa fa-angle-up"></i></a>
				</div>
			</div>
		</div>
		<!-- <div id="top-nav">
			<div class="container text-center">
				<div class="row top-navlink"">
					<div class="hi-icontop-wrap hi-icontop-effect-1 hi-icontop-effect-1a" id="nav-top">
						<a href="#header" title=""><i class="hi-icontop fa fa-angle-up"></i></a>
					</div>
				</div>
			</div>
		</div> -->
		<div id="footer">
			<p>&copy2016 TSOTF</p>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>

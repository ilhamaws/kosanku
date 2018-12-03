<!DOCTYPE html>
<html>

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="author" content="CodePixar">

	<meta name="description" content="">

	<meta name="keywords" content="">

	<meta charset="UTF-8">

	<title>Kosanku</title>

	<link href="//fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/ion.rangeSlider.css">
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/ion.rangeSlider.skinFlat.css">
	<link rel="stylesheet" href="//cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/nice-select.css">
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/style.css">
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/card-style.css">
</head>

<body>
	<header class="main-header">
		<div class="menutop-wrap">
			<div class="menu-top container">
				<div class="d-flex justify-content-end align-items-center">
					<ul class="list">
						<li><a href="<?php echo base_url('login'); ?>" style="color: #6c757d;">login / register</a>&nbsp;&nbsp;&nbsp;</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="main-menu" id="navbar-menu">
			<div class="container">
				<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<h1>
							<a href="home" style="color: #777777;">Kosanku</a>
						</h1>
						<!-- <a href="index.html"><img src="img/logo.png" alt="" title="" /></a> -->
					</div>
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<!-- <li class="<?php echo menuActive('http://localhost/kosanku/home') ?>"><a href="home.php">Beranda</a></li> -->
							<li class="<?php echo menuActive('/kosanku/home') ?>"><a href="home">Beranda</a></li>
							<!-- <li><a href="properties.html">properties</a></li> -->
							<li class=" <?php echo menuActive('/kosanku/tentang') ?>"><a href="tentang">Tentang</a></li>
							<li class=" <?php echo menuActive('/kosanku/kosan') ?>"><a href="kosan">Kosan</a>
								<ul>
									<li><a href="kosan/?putra.html">Putra</a></li>
									<li><a href="kosan/?putri.html">Putri</a></li>
									<li><a href="kosan/?campuran.html">Campuran</a></li>
								</ul>
							</li>
							<li class="menu-default"><a href="">Berita kos</a>
								<ul>
									<li><a href="kosan-rekomendasi.html">Kosan rekomendasi</a></li>
									<li><a href="<?php echo base_url('pages/serba_serbi'); ?>">Serba-serbi kosan</a></li>
								</ul>
							</li>
							<li class="<?php echo menuActive('/kosanku/kontak') ?>"><a href="kontak">Hubungi kami</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

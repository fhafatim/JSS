<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Login Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?= base_url('assets/css/default/app.min.css');?>" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url(<?= base_url() ?>/assets/img/login-bg/login-bg-11.jpg)"></div>
				<div class="news-caption">
					<h4 class="caption-title"><b>SIPERMEN</b></h4>
					<p>
						
					</p>
				</div>
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content">
				<!-- begin login-header -->
				<div class="login-header">
					<div class="brand">
						<span class="logo"></span> <b>SIPERMEN</b>
						<small>Silakan Login Terlebih Dahulu</small>
					</div>
					<div class="icon">
						<i class="fa fa-sign-in-alt"></i>
					</div>
				</div>
				<!-- end login-header -->
				<!-- begin login-content -->
				<div class="login-content">
					<form action="<?= base_url()?>auth" method="POST" class="margin-bottom-0">
						<?php
						 echo $this->session->flashdata('message');
						$this->session->unset_userdata('message');
						?>
						<div class="form-group m-b-15">
							<input type="text" class="form-control form-control-lg" name="email" placeholder="Email Address" required />
						</div>
						<div class="form-group m-b-15">
							<input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required />
						</div>
						<div class="checkbox checkbox-css m-b-30">
							<input type="checkbox" id="remember_me_checkbox" value="" />
							<label for="remember_me_checkbox">
							Remember Me
							</label>
						</div>
						<div class="login-buttons m-b-40">
							<button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
						</div>
						<hr/>
						<div class="m-t-20  text-inverse">
						<p class="text-center"><a href="<?php echo $login_url;?>"><img src="./assets1/sign_in.jpg" width="300"></a></p>
						</div>
						<div class="m-t-20 m-b-40  text-inverse">
							Not a member yet? Click <a href="<?= base_url() ?>home/register">here</a> to register.
						</div>
						<hr />
						<p class="text-center text-grey-darker mb-0">
							&copy; Color Admin All Right Reserved 2020
						</p>
					</form>
				</div>
				<!-- end login-content -->
			</div>
			<!-- end right-container -->
		</div>
		<!-- end login -->
		
		<!-- begin theme-panel -->
		<!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?= base_url('assets/js/app.min.js');?>"></script>
	<script src="<?= base_url('assets/js/theme/default.min.js');?>"></script>
	<!-- ================== END BASE JS ================== -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Dashboard V3</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?= base_url()?>/assets/css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
	<link href="<?= base_url()?>/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
	<link href="<?= base_url()?>/assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
	<link href="<?= base_url()?>/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Color</b> Admin</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header --><!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li class="navbar-form">
					<form action="" method="POST" name="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter keyword" />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</li>
				<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle f-s-14">
						<i class="fa fa-bell"></i>
						<span class="label">5</span>
					</a>
					<div class="dropdown-menu media-list dropdown-menu-right">
						<div class="dropdown-header">NOTIFICATIONS (5)</div>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-bug media-object bg-silver-darker"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
								<div class="text-muted f-s-10">3 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<img src="../assets/img/user/user-1.jpg" class="media-object" alt="" />
								<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">John Smith</h6>
								<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
								<div class="text-muted f-s-10">25 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<img src="../assets/img/user/user-2.jpg" class="media-object" alt="" />
								<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">Olivia</h6>
								<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
								<div class="text-muted f-s-10">35 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-plus media-object bg-silver-darker"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading"> New User Registered</h6>
								<div class="text-muted f-s-10">1 hour ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-envelope media-object bg-silver-darker"></i>
								<i class="fab fa-google text-warning media-object-icon f-s-14"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading"> New Email From John</h6>
								<div class="text-muted f-s-10">2 hour ago</div>
							</div>
						</a>
						<div class="dropdown-footer text-center">
							<a href="javascript:;">View more</a>
						</div>
					</div>
				</li>
				<li class="dropdown navbar-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="../assets/img/user/user-13.jpg" alt="" /> 
						<span class="d-none d-md-inline">Adam Schwartz</span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Inbox</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:;" class="dropdown-item">Log Out</a>
					</div>
				</li>
			</ul>
			<!-- end header-nav -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="../assets/img/user/user-13.jpg" alt="" />
							</div>
							<div class="info">
								<b class="caret pull-right"></b>Sean Ngu
								<small>Front end developer</small>
							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
							<li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
							<li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
							<li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
						</ul>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav"><li class="nav-header">Navigation</li>
					<li>
						<a href="widget.html">
							<i class="fa fa-th-large"></i>
							<span>Dashboard</span> 
						</a>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<span class="badge pull-right">10</span>
							<i class="fa fa-hdd"></i>
							<span>Pengajuan</span>
						</a>
						<ul class="sub-menu">
							<li><a href="email_inbox.html">Inbox</a></li>
							<li><a href="email_compose.html">Compose</a></li>
							<li><a href="email_detail.html">Detail</a></li>
						</ul>
					</li>
					<li>
						<a href="widget.html">
							<i class="fab fa-simplybuilt"></i>
							<span>Widgets <span class="label label-theme">NEW</span></span> 
						</a>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-gem"></i>
							<span>UI Elements <span class="label label-theme">NEW</span></span> 
						</a>
						<ul class="sub-menu">
							<li><a href="ui_general.html">General <i class="fa fa-paper-plane text-theme"></i></a></li>
							<li><a href="ui_typography.html">Typography</a></li>
							<li><a href="ui_tabs_accordions.html">Tabs & Accordions</a></li>
							<li><a href="ui_unlimited_tabs.html">Unlimited Nav Tabs</a></li>
							<li><a href="ui_modal_notification.html">Modal & Notification <i class="fa fa-paper-plane text-theme"></i></a></li>
							<li><a href="ui_widget_boxes.html">Widget Boxes</a></li>
							<li><a href="ui_media_object.html">Media Object</a></li>
							<li><a href="ui_buttons.html">Buttons <i class="fa fa-paper-plane text-theme"></i></a></li>
							<li><a href="ui_icons.html">Icons</a></li>
							<li><a href="ui_simple_line_icons.html">Simple Line Icons</a></li>
							<li><a href="ui_ionicons.html">Ionicons</a></li>
							<li><a href="ui_tree.html">Tree View</a></li>
							<li><a href="ui_language_bar_icon.html">Language Bar & Icon</a></li>
							<li><a href="ui_social_buttons.html">Social Buttons</a></li>
							<li><a href="ui_tour.html">Intro JS</a></li>
						</ul>
					</li>
					<li>
						<a href="bootstrap_4.html">
							<div class="icon-img">
								<img src="../assets/img/logo/logo-bs4.png" alt="" />
							</div>
							<span>Bootstrap 4 <span class="label label-theme">NEW</span></span> 
						</a>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-list-ol"></i>
							<span>Form Stuff <span class="label label-theme">NEW</span></span> 
						</a>
						<ul class="sub-menu">
							<li><a href="form_elements.html">Form Elements <i class="fa fa-paper-plane text-theme"></i></a></li>
							<li><a href="form_plugins.html">Form Plugins <i class="fa fa-paper-plane text-theme"></i></a></li>
							<li><a href="form_slider_switcher.html">Form Slider + Switcher</a></li>
							<li><a href="form_validation.html">Form Validation</a></li>
							<li><a href="form_wizards.html">Wizards <i class="fa fa-paper-plane text-theme"></i></a></li>
							<li><a href="form_wysiwyg.html">WYSIWYG</a></li>
							<li><a href="form_editable.html">X-Editable</a></li>
							<li><a href="form_multiple_upload.html">Multiple File Upload</a></li>
							<li><a href="form_summernote.html">Summernote</a></li>
							<li><a href="form_dropzone.html">Dropzone</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-table"></i>
							<span>Tables</span>
						</a>
						<ul class="sub-menu">
							<li><a href="table_basic.html">Basic Tables</a></li>
							<li class="has-sub">
								<a href="javascript:;"><b class="caret"></b> Managed Tables</a>
								<ul class="sub-menu">
									<li><a href="table_manage.html">Default</a></li>
									<li><a href="table_manage_autofill.html">Autofill</a></li>
									<li><a href="table_manage_buttons.html">Buttons</a></li>
									<li><a href="table_manage_colreorder.html">ColReorder</a></li>
									<li><a href="table_manage_fixed_columns.html">Fixed Column</a></li>
									<li><a href="table_manage_fixed_header.html">Fixed Header</a></li>
									<li><a href="table_manage_keytable.html">KeyTable</a></li>
									<li><a href="table_manage_responsive.html">Responsive</a></li>
									<li><a href="table_manage_rowreorder.html">RowReorder</a></li>
									<li><a href="table_manage_scroller.html">Scroller</a></li>
									<li><a href="table_manage_select.html">Select</a></li>
									<li><a href="table_manage_combine.html">Extension Combination</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-cash-register"></i>
							<span>POS System <span class="label label-theme">NEW</span></span> 
						</a>
						<ul class="sub-menu">
							<li><a href="pos_customer_order.html" target="_blank">Customer Order</a></li>
							<li><a href="pos_kitchen_order.html" target="_blank">Kitchen Order</a></li>
							<li><a href="pos_counter_checkout.html" target="_blank">Counter Checkout</a></li>
							<li><a href="pos_table_booking.html" target="_blank">Table Booking</a></li>
							<li><a href="pos_menu_stock.html" target="_blank">Menu Stock</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-star"></i>
							<span>Front End</span>
						</a>
						<ul class="sub-menu">
							<li><a href="../../../frontend/template/template_one_page_parallax/index.html" target="_blank">One Page Parallax</a></li>
							<li><a href="../../../frontend/template/template_blog/index.html" target="_blank">Blog</a></li>
							<li><a href="../../../frontend/template/template_forum/index.html" target="_blank">Forum</a></li>
							<li><a href="../../../frontend/template/template_e_commerce/index.html" target="_blank">E-Commerce</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-envelope"></i>
							<span>Email Template</span>
						</a>
						<ul class="sub-menu">
							<li><a href="email_system.html">System Template</a></li>
							<li><a href="email_newsletter.html">Newsletter Template</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-chart-pie"></i>
							<span>Chart <span class="label label-theme">NEW</span></span>
						</a>
						<ul class="sub-menu">
							<li><a href="chart-flot.html">Flot Chart</a></li>
							<li><a href="chart-js.html">Chart JS</a></li>
							<li><a href="chart-d3.html">d3 Chart</a></li>
							<li><a href="chart-apex.html">Apex Chart <i class="fa fa-paper-plane text-theme"></i></a></li>
						</ul>
					</li>
					<li>
						<a href="calendar.html">
							<i class="fa fa-calendar"></i> 
							<span>Calendar</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-map"></i>
							<span>Map</span>
						</a>
						<ul class="sub-menu">
							<li><a href="map_vector.html">Vector Map</a></li>
							<li><a href="map_google.html">Google Map</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-image"></i>
							<span>Gallery</span>
						</a>
						<ul class="sub-menu">
							<li><a href="gallery.html">Gallery v1</a></li>
							<li><a href="gallery_v2.html">Gallery v2</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-cogs"></i>
							<span>Page Options <span class="label label-theme">NEW</span></span>
						</a>
						<ul class="sub-menu">
							<li><a href="page_blank.html">Blank Page</a></li>
							<li><a href="page_with_footer.html">Page with Footer</a></li>
							<li><a href="page_without_sidebar.html">Page without Sidebar</a></li>
							<li><a href="page_with_right_sidebar.html">Page with Right Sidebar</a></li>
							<li><a href="page_with_minified_sidebar.html">Page with Minified Sidebar</a></li>
							<li><a href="page_with_two_sidebar.html">Page with Two Sidebar</a></li>
							<li><a href="page_with_line_icons.html">Page with Line Icons</a></li>
							<li><a href="page_with_ionicons.html">Page with Ionicons</a></li>
							<li><a href="page_full_height.html">Full Height Content</a></li>
							<li><a href="page_with_wide_sidebar.html">Page with Wide Sidebar</a></li>
							<li><a href="page_with_light_sidebar.html">Page with Light Sidebar</a></li>
							<li><a href="page_with_mega_menu.html">Page with Mega Menu</a></li>
							<li><a href="page_with_top_menu.html">Page with Top Menu</a></li>
							<li><a href="page_with_boxed_layout.html">Page with Boxed Layout</a></li>
							<li><a href="page_with_mixed_menu.html">Page with Mixed Menu</a></li>
							<li><a href="page_boxed_layout_with_mixed_menu.html">Boxed Layout with Mixed Menu</a></li>
							<li><a href="page_with_transparent_sidebar.html">Page with Transparent Sidebar</a></li>
							<li><a href="page_with_search_sidebar.html">Page with Search Sidebar <i class="fa fa-paper-plane text-theme"></i></a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-gift"></i>
							<span>Extra <span class="label label-theme">NEW</span></span>
						</a>
						<ul class="sub-menu">
							<li><a href="extra_timeline.html">Timeline</a></li>
							<li><a href="extra_coming_soon.html">Coming Soon Page</a></li>
							<li><a href="extra_search_results.html">Search Results</a></li>
							<li><a href="extra_invoice.html">Invoice</a></li>
							<li><a href="extra_404_error.html">404 Error Page</a></li>
							<li><a href="extra_profile.html">Profile Page</a></li>
							<li><a href="extra_scrum_board.html">Scrum Board <i class="fa fa-paper-plane text-theme"></i></a></li>
							<li><a href="extra_cookie_acceptance_banner.html">Cookie Acceptance Banner <i class="fa fa-paper-plane text-theme"></i></a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-key"></i>
							<span>Login & Register</span>
						</a>
						<ul class="sub-menu">
							<li><a href="login.html">Login</a></li>
							<li><a href="login_v2.html">Login v2</a></li>
							<li><a href="login_v3.html">Login v3</a></li>
							<li><a href="register_v3.html">Register v3</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-cubes"></i>
							<span>Version <span class="label label-theme">NEW</span></span>
						</a>
						<ul class="sub-menu">
							<li><a href="../template_html/index_v3.html">HTML</a></li>
							<li><a href="../template_ajax/">AJAX</a></li>
							<li><a href="../template_angularjs/">ANGULAR JS</a></li>
							<li><a href="../template_angularjs10/">ANGULAR JS 10</a></li>
							<li><a href="javascript:alert('Laravel Version only available in downloaded version.');">LARAVEL</a></li>
							<li><a href="../template_vuejs/">VUE JS</a></li>
							<li><a href="../template_reactjs/">REACT JS</a></li>
							<li><a href="javascript:alert('.NET Core 3.1 MVC Version only available in downloaded version.');">ASP.NET <i class="fa fa-paper-plane text-theme"></i></a></li>
							<li><a href="../template_material/index_v3.html">MATERIAL DESIGN</a></li>
							<li><a href="../template_apple/index_v3.html">APPLE DESIGN</a></li>
							<li><a href="../template_transparent/index_v3.html">TRANSPARENT DESIGN <i class="fa fa-paper-plane text-theme"></i></a></li>
							<li><a href="../template_facebook/index_v3.html">FACEBOOK DESIGN <i class="fa fa-paper-plane text-theme"></i></a></li>
							<li><a href="../template_google/index_v3.html">GOOGLE DESIGN <i class="fa fa-paper-plane text-theme"></i></a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-medkit"></i>
							<span>Helper</span>
						</a>
						<ul class="sub-menu">
							<li><a href="helper_css.html">Predefined CSS Classes</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-align-left"></i>
							<span>Menu Level</span>
						</a>
						<ul class="sub-menu">
							<li class="has-sub">
								<a href="javascript:;">
									<b class="caret"></b>
									Menu 1.1
								</a>
								<ul class="sub-menu">
									<li class="has-sub">
										<a href="javascript:;">
											<b class="caret"></b>
											Menu 2.1
										</a>
										<ul class="sub-menu">
											<li><a href="javascript:;">Menu 3.1</a></li>
											<li><a href="javascript:;">Menu 3.2</a></li>
										</ul>
									</li>
									<li><a href="javascript:;">Menu 2.2</a></li>
									<li><a href="javascript:;">Menu 2.3</a></li>
								</ul>
							</li>
							<li><a href="javascript:;">Menu 1.2</a></li>
							<li><a href="javascript:;">Menu 1.3</a></li>
						</ul>
					</li>
					<!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
					<!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb float-xl-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
				<li class="breadcrumb-item active">Dashboard v3</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header mb-3">Dashboard v3</h1>
			<!-- end page-header -->
			<!-- begin daterange-filter -->
			<div class="d-sm-flex align-items-center mb-3">
				<a href="#" class="btn btn-inverse mr-2 text-truncate" id="daterange-filter">
					<i class="fa fa-calendar fa-fw text-white-transparent-5 ml-n1"></i> 
					<span>1 Jun 2020 - 7 Jun 2020</span>
					<b class="caret"></b>
				</a>
				<div class="text-muted f-w-600 mt-2 mt-sm-0">compared to <span id="daterange-prev-date">24 Mar-30 Apr 2020</span></div>
			</div>
			<!-- end daterange-filter -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-6 -->
				<div class="col-xl-6">
					<!-- begin card -->
					<div class="card border-0 mb-3 overflow-hidden bg-dark text-white">
						<!-- begin card-body -->
						<div class="card-body">
							<!-- begin row -->
							<div class="row">
								<!-- begin col-7 -->
								<div class="col-xl-7 col-lg-8">
									<!-- begin title -->
									<div class="mb-3 text-grey">
										<b>TOTAL SALES</b>
										<span class="ml-2">
											<i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Total sales" data-placement="top" data-content="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i>
										</span>
									</div>
									<!-- end title -->
									<!-- begin total-sales -->
									<div class="d-flex mb-1">
										<h2 class="mb-0">$<span data-animation="number" data-value="64559.25">0.00</span></h2>
										<div class="ml-auto mt-n1 mb-n1"><div id="total-sales-sparkline"></div></div>
									</div>
									<!-- end total-sales -->
									<!-- begin percentage -->
									<div class="mb-3 text-grey">
										<i class="fa fa-caret-up"></i> <span data-animation="number" data-value="33.21">0.00</span>% compare to last week
									</div>
									<!-- end percentage -->
									<hr class="bg-white-transparent-2" />
									<!-- begin row -->
									<div class="row text-truncate">
										<!-- begin col-6 -->
										<div class="col-6">
											<div class="f-s-12 text-grey">Total sales order</div>
											<div class="f-s-18 m-b-5 f-w-600 p-b-1" data-animation="number" data-value="1568">0</div>
											<div class="progress progress-xs rounded-lg bg-dark-darker m-b-5">
												<div class="progress-bar progress-bar-striped rounded-right bg-teal" data-animation="width" data-value="55%" style="width: 0%"></div>
											</div>
										</div>
										<!-- end col-6 -->
										<!-- begin col-6 -->
										<div class="col-6">
											<div class="f-s-12 text-grey">Avg. sales per order</div>
											<div class="f-s-18 m-b-5 f-w-600 p-b-1">$<span data-animation="number" data-value="41.20">0.00</span></div>
											<div class="progress progress-xs rounded-lg bg-dark-darker m-b-5">
												<div class="progress-bar progress-bar-striped rounded-right" data-animation="width" data-value="55%" style="width: 0%"></div>
											</div>
										</div>
										<!-- end col-6 -->
									</div>
									<!-- end row -->
								</div>
								<!-- end col-7 -->
								<!-- begin col-5 -->
								<div class="col-xl-5 col-lg-4 align-items-center d-flex justify-content-center">
									<img src="../assets/img/svg/img-1.svg" height="150px" class="d-none d-lg-block" />
								</div>
								<!-- end col-5 -->
							</div>
							<!-- end row -->
						</div>
						<!-- end card-body -->
					</div>
					<!-- end card -->
				</div>
				<!-- end col-6 -->
				<!-- begin col-6 -->
				<div class="col-xl-6">
					<!-- begin row -->
					<div class="row">
						<!-- begin col-6 -->
						<div class="col-sm-6">
							<!-- begin card -->
							<div class="card border-0 text-truncate mb-3 bg-dark text-white">
								<!-- begin card-body -->
								<div class="card-body">
									<!-- begin title -->
									<div class="mb-3 text-grey">
										<b class="mb-3">CONVERSION RATE</b> 
										<span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Conversion Rate" data-placement="top" data-content="Percentage of sessions that resulted in orders from total number of sessions." data-original-title="" title=""></i></span>
									</div>
									<!-- end title -->
									<!-- begin conversion-rate -->
									<div class="d-flex align-items-center mb-1">
										<h2 class="text-white mb-0"><span data-animation="number" data-value="2.19">0.00</span>%</h2>
										<div class="ml-auto">
											<div id="conversion-rate-sparkline"></div>
										</div>
									</div>
									<!-- end conversion-rate -->
									<!-- begin percentage -->
									<div class="mb-4 text-grey">
										<i class="fa fa-caret-down"></i> <span data-animation="number" data-value="0.50">0.00</span>% compare to last week
									</div>
									<!-- end percentage -->
									<!-- begin info-row -->
									<div class="d-flex mb-2">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-red f-s-8 mr-2"></i>
											Added to cart
										</div>
										<div class="d-flex align-items-center ml-auto">
											<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="262">0</span>%</div>
											<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="3.79">0.00</span>%</div>
										</div>
									</div>
									<!-- end info-row -->
									<!-- begin info-row -->
									<div class="d-flex mb-2">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-warning f-s-8 mr-2"></i>
											Reached checkout
										</div>
										<div class="d-flex align-items-center ml-auto">
											<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="11">0</span>%</div>
											<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="3.85">0.00</span>%</div>
										</div>
									</div>
									<!-- end info-row -->
									<!-- begin info-row -->
									<div class="d-flex">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-lime f-s-8 mr-2"></i>
											Sessions converted
										</div>
										<div class="d-flex align-items-center ml-auto">
											<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="57">0</span>%</div>
											<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="2.19">0.00</span>%</div>
										</div>
									</div>
									<!-- end info-row -->
								</div>
								<!-- end card-body -->
							</div>
							<!-- end card -->
						</div>
						<!-- end col-6 -->
						<!-- begin col-6 -->
						<div class="col-sm-6">
							<!-- begin card -->
							<div class="card border-0 text-truncate mb-3 bg-dark text-white">
								<!-- begin card-body -->
								<div class="card-body">
									<!-- begin title -->
									<div class="mb-3 text-grey">
										<b class="mb-3">STORE SESSIONS</b> 
										<span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Store Sessions" data-placement="top" data-content="Number of sessions on your online store. A session is a period of continuous activity from a visitor." data-original-title="" title=""></i></span>
									</div>
									<!-- end title -->
									<!-- begin store-session -->
									<div class="d-flex align-items-center mb-1">
										<h2 class="text-white mb-0"><span data-animation="number" data-value="70719">0</span></h2>
										<div class="ml-auto">
											<div id="store-session-sparkline"></div>
										</div>
									</div>
									<!-- end store-session -->
									<!-- begin percentage -->
									<div class="mb-4 text-grey">
										<i class="fa fa-caret-up"></i> <span data-animation="number" data-value="9.5">0.00</span>% compare to last week
									</div>
									<!-- end percentage -->
									<!-- begin info-row -->
									<div class="d-flex mb-2">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-teal f-s-8 mr-2"></i>
											Mobile
										</div>
										<div class="d-flex align-items-center ml-auto">
											<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="25.7">0.00</span>%</div>
											<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="53210">0</span></div>
										</div>
									</div>
									<!-- end info-row -->
									<!-- begin info-row -->
									<div class="d-flex mb-2">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-blue f-s-8 mr-2"></i>
											Desktop
										</div>
										<div class="d-flex align-items-center ml-auto">
											<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="16.0">0.00</span>%</div>
											<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="11959">0</span></div>
										</div>
									</div>
									<!-- end info-row -->
									<!-- begin info-row -->
									<div class="d-flex">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-aqua f-s-8 mr-2"></i>
											Tablet
										</div>
										<div class="d-flex align-items-center ml-auto">
											<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="7.9">0.00</span>%</div>
											<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="5545">0</span></div>
										</div>
									</div>
									<!-- end info-row -->
								</div>
								<!-- end card-body -->
							</div>
							<!-- end card -->
						</div>
						<!-- end col-6 -->
					</div>
					<!-- end row -->
				</div>
				<!-- end col-6 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-8 -->
				<div class="col-xl-8 col-lg-6">
					<!-- begin card -->
					<div class="card border-0 mb-3 bg-dark text-white">
						<div class="card-body">
							<div class="mb-3 text-grey"><b>VISITORS ANALYTICS</b> <span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Top products with units sold" data-placement="top" data-content="Products with the most individual units sold. Includes orders from all sales channels." data-original-title="" title=""></i></span></div>
							<div class="row">
								<div class="col-xl-3 col-4">
									<h3 class="mb-1"><span data-animation="number" data-value="127.1">0</span>K</h3>
									<div>New Visitors</div>
									<div class="text-grey f-s-11 text-truncate"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="25.5">0.00</span>% from previous 7 days</div>
								</div>
								<div class="col-xl-3 col-4">
									<h3 class="mb-1"><span data-animation="number" data-value="179.9">0</span>K</h3>
									<div>Returning Visitors</div>
									<div class="text-grey f-s-11 text-truncate"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="5.33">0.00</span>% from previous 7 days</div>
								</div>
								<div class="col-xl-3 col-4">
									<h3 class="mb-1"><span data-animation="number" data-value="766.8">0</span>K</h3>
									<div>Total Page Views</div>
									<div class="text-grey f-s-11 text-truncate"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="0.323">0.00</span>% from previous 7 days</div>
								</div>
							</div>
						</div>
						<div class="card-body p-0">
							<div style="height: 269px">
								<div id="visitors-line-chart" class="widget-chart-full-width nvd3-inverse-mode" style="height: 254px"></div>
							</div>
						</div>
					</div>
					<!-- end card -->
				</div>
				<!-- end col-8 -->
				<!-- begin col-4 -->
				<div class="col-xl-4 col-lg-6">
					<!-- begin card -->
					<div class="card border-0 mb-3 bg-dark text-white">
						<div class="card-body">
							<div class="mb-2 text-grey">
								<b>SESSION BY LOCATION</b>
								<span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Total sales" data-placement="top" data-content="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i></span>
							</div>
							<div id="visitors-map" class="mb-2" style="height: 200px"></div>
							<div>
								<div class="d-flex align-items-center text-white mb-2">
									<div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(../assets/img/flag/us.jpg)"></div>
									<div class="d-flex w-100">
										<div>United States</div>
										<div class="ml-auto text-grey"><span data-animation="number" data-value="39.85">0.00</span>%</div>
									</div>
								</div>
								<div class="d-flex align-items-center text-white mb-2">
									<div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(../assets/img/flag/cn.jpg)"></div>
									<div class="d-flex w-100">
										<div>China</div>
										<div class="ml-auto text-grey"><span data-animation="number" data-value="14.23">0.00</span>%</div>
									</div>
								</div>
								<div class="d-flex align-items-center text-white mb-2">
									<div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(../assets/img/flag/de.jpg)"></div>
									<div class="d-flex w-100">
										<div>Germany</div>
										<div class="ml-auto text-grey"><span data-animation="number" data-value="12.83">0.00</span>%</div>
									</div>
								</div>
								<div class="d-flex align-items-center text-white mb-2">
									<div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(../assets/img/flag/fr.jpg)"></div>
									<div class="d-flex w-100">
										<div>France</div>
										<div class="ml-auto text-grey"><span data-animation="number" data-value="11.14">0.00</span>%</div>
									</div>
								</div>
								<div class="d-flex align-items-center text-white mb-0">
									<div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(../assets/img/flag/jp.jpg)"></div>
									<div class="d-flex w-100">
										<div>Japan</div>
										<div class="ml-auto text-grey"><span data-animation="number" data-value="10.75">0.00</span>%</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end card -->
				</div>
				<!-- end col-4 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-4 -->
				<div class="col-xl-4 col-lg-6">
					<!-- begin card -->
					<div class="card border-0 mb-3 bg-dark-darker text-white">
						<!-- begin card-body -->
						<div class="card-body" style="background: no-repeat bottom right; background-image: url(../assets/img/svg/img-4.svg); background-size: auto 60%;">
							<!-- begin title -->
							<div class="mb-3 text-grey">
								<b>SALES BY SOCIAL SOURCE</b>
								<span class="text-grey ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Sales by social source" data-placement="top" data-content="Total online store sales that came from a social referrer source."></i></span>
							</div>
							<!-- end title -->
							<!-- begin sales -->
							<h3 class="m-b-10">$<span data-animation="number" data-value="55547.89">0.00</span></h3>
							<!-- end sales -->
							<!-- begin percentage -->
							<div class="text-grey m-b-1"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="45.76">0.00</span>% increased</div>
							<!-- end percentage -->
						</div>
						<!-- end card-body -->
						<!-- begin widget-list -->
						<div class="widget-list widget-list-rounded inverse-mode">
							<!-- begin widget-list-item -->
							<a href="#" class="widget-list-item rounded-0 p-t-3">
								<div class="widget-list-media icon">
									<i class="fab fa-apple bg-indigo text-white"></i>
								</div>
								<div class="widget-list-content">
									<div class="widget-list-title">Apple Store</div>
								</div>
								<div class="widget-list-action text-nowrap text-grey">
									$<span data-animation="number" data-value="34840.17">0.00</span>
								</div>
							</a>
							<!-- end widget-list-item -->
							<!-- begin widget-list-item -->
							<a href="#" class="widget-list-item">
								<div class="widget-list-media icon">
									<i class="fab fa-facebook-f bg-blue text-white"></i>
								</div>
								<div class="widget-list-content">
									<div class="widget-list-title">Facebook</div>
								</div>
								<div class="widget-list-action text-nowrap text-grey">
									$<span data-animation="number" data-value="12502.67">0.00</span>
								</div>
							</a>
							<!-- end widget-list-item -->
							<!-- begin widget-list-item -->
							<a href="#" class="widget-list-item">
								<div class="widget-list-media icon">
									<i class="fab fa-twitter bg-aqua text-white"></i>
								</div>
								<div class="widget-list-content">
									<div class="widget-list-title">Twitter</div>
								</div>
								<div class="widget-list-action text-nowrap text-grey">
									$<span data-animation="number" data-value="4799.20">0.00</span>
								</div>
							</a>
							<!-- end widget-list-item -->
							<!-- begin widget-list-item -->
							<a href="#" class="widget-list-item">
								<div class="widget-list-media icon">
									<i class="fab fa-google bg-red text-white"></i>
								</div>
								<div class="widget-list-content">
									<div class="widget-list-title">Google Adwords</div>
								</div>
								<div class="widget-list-action text-nowrap text-grey">
									$<span data-animation="number" data-value="3405.85">0.00</span>
								</div>
							</a>
							<!-- end widget-list-item -->
							<!-- begin widget-list-item -->
							<a href="#" class="widget-list-item p-b-3">
								<div class="widget-list-media icon">
									<i class="fab fa-instagram bg-pink text-white"></i>
								</div>
								<div class="widget-list-content">
									<div class="widget-list-title">Instagram</div>
								</div>
								<div class="widget-list-action text-nowrap text-grey">
									$<span data-animation="number" data-value="0.00">0.00</span>
								</div>
							</a>
							<!-- end widget-list-item -->
						</div>
						<!-- end widget-list -->
					</div>
					<!-- end card -->
				</div>
				<!-- end col-4 -->
				<!-- end col-4 -->
				<!-- begin col-4 -->
				<div class="col-xl-4 col-lg-6">
					<!-- begin card -->
					<div class="card border-0 mb-3 bg-dark text-white">
						<!-- begin card-body -->
						<div class="card-body">
							<!-- begin title -->
							<div class="mb-3 text-grey">
								<b>TOP PRODUCTS BY UNITS SOLD</b>
								<span class="ml-2 "><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Top products with units sold" data-placement="top" data-content="Products with the most individual units sold. Includes orders from all sales channels."></i></span>
							</div>
							<!-- end title -->
							<!-- begin product -->
							<div class="d-flex align-items-center m-b-15">
								<div class="widget-img rounded-lg m-r-10 bg-white p-3 width-30">
									<div class="h-100 w-100" style="background: url(../assets/img/product/product-8.jpg) center no-repeat; background-size: auto 100%;"></div>
								</div>
								<div class="text-truncate">
									<div>Apple iPhone XR (2019)</div>
									<div class="text-grey">$799.00</div>
								</div>
								<div class="ml-auto text-center">
									<div class="f-s-13"><span data-animation="number" data-value="195">0</span></div>
									<div class="text-grey f-s-10">sold</div>
								</div>
							</div>
							<!-- end product -->
							<!-- begin product -->
							<div class="d-flex align-items-center m-b-15">
								<div class="widget-img rounded-lg m-r-10 bg-white p-3 width-30">
									<div class="h-100 w-100" style="background: url(../assets/img/product/product-9.jpg) center no-repeat; background-size: auto 100%;"></div>
								</div>
								<div class="text-truncate">
									<div>Apple iPhone XS (2019)</div>
									<div class="text-grey">$1,199.00</div>
								</div>
								<div class="ml-auto text-center">
									<div class="f-s-13"><span data-animation="number" data-value="185">0</span></div>
									<div class="text-grey f-s-10">sold</div>
								</div>
							</div>
							<!-- end product -->
							<!-- begin product -->
							<div class="d-flex align-items-center m-b-15">
								<div class="widget-img rounded-lg m-r-10 bg-white p-3 width-30">
									<div class="h-100 w-100" style="background: url(../assets/img/product/product-10.jpg) center no-repeat; background-size: auto 100%;"></div>
								</div>
								<div class="text-truncate">
									<div>Apple iPhone XS Max (2019)</div>
									<div class="text-grey">$3,399</div>
								</div>
								<div class="ml-auto text-center">
									<div class="f-s-13"><span data-animation="number" data-value="129">0</span></div>
									<div class="text-grey f-s-10">sold</div>
								</div>
							</div>
							<!-- end product -->
							<!-- begin product -->
							<div class="d-flex align-items-center m-b-15">
								<div class="widget-img rounded-lg m-r-10 bg-white p-3 width-30">
									<div class="h-100 w-100" style="background: url(../assets/img/product/product-11.jpg) center no-repeat; background-size: auto 100%;"></div>
								</div>
								<div class="text-truncate">
									<div>Huawei Y5 (2019)</div>
									<div class="text-grey">$99.00</div>
								</div>
								<div class="ml-auto text-center">
									<div class="f-s-13"><span data-animation="number" data-value="96">0</span></div>
									<div class="text-grey f-s-10">sold</div>
								</div>
							</div>
							<!-- end product -->
							<!-- begin product -->
							<div class="d-flex align-items-center">
								<div class="widget-img rounded-lg m-r-10 bg-white p-3 width-30">
									<div class="h-100 w-100" style="background: url(../assets/img/product/product-12.jpg) center no-repeat; background-size: auto 100%;"></div>
								</div>
								<div class="text-truncate">
									<div>Huawei Nova 4 (2019)</div>
									<div class="text-grey">$499.00</div>
								</div>
								<div class="ml-auto text-center">
									<div class="f-s-13"><span data-animation="number" data-value="55">0</span></div>
									<div class="text-grey f-s-10">sold</div>
								</div>
							</div>
							<!-- end product -->
						</div>
						<!-- end card-body -->
					</div>
					<!-- end card -->
				</div>
				<!-- end col-4 -->
				<!-- begin col-4 -->
				<div class="col-xl-4 col-lg-6">
					<!-- begin card -->
					<div class="card border-0 mb-3 bg-dark text-white">
						<!-- begin card-body -->
						<div class="card-body">
							<!-- begin title -->
							<div class="mb-3 text-grey">
								<b>MARKETING CAMPAIGN</b>
								<span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Marketing Campaign" data-placement="top" data-content="Campaign that run for getting more returning customers."></i></span>
							</div>
							<!-- end title -->
							<!-- begin row -->
							<div class="row align-items-center p-b-1">
								<!-- begin col-4 -->
								<div class="col-4">
									<div class="height-100 d-flex align-items-center justify-content-center">
										<img src="../assets/img/svg/img-2.svg" class="mw-100 mh-100" />
									</div>
								</div>
								<!-- end col-4 -->
								<!-- begin col-8 -->
								<div class="col-8">
									<div class="m-b-2 text-truncate">Email Marketing Campaign</div>
									<div class="m-b-2  text-grey f-s-11">Mon 12/6 - Sun 18/6</div>
									<div class="d-flex align-items-center m-b-2">
										<div class="flex-grow-1">
											<div class="progress progress-xs rounded-corner bg-white-transparent-1">
												<div class="progress-bar progress-bar-striped bg-indigo" data-animation="width" data-value="80%" style="width: 0%"></div>
											</div>
										</div>
										<div class="ml-2 f-s-11 width-30 text-center"><span data-animation="number" data-value="80">0</span>%</div>
									</div>
									<div class="text-grey f-s-11 m-b-15 text-truncate">
										57.5% people click the email
									</div>
									<a href="#" class="btn btn-xs btn-indigo f-s-10 pl-2 pr-2">View campaign</a>
								</div>
								<!-- end col-8 -->
							</div>
							<!-- end row -->
							<hr class=" bg-white-transparent-2 m-t-20 m-b-20" />
							<!-- begin row -->
							<div class="row align-items-center">
								<!-- begin col-4 -->
								<div class="col-4">
									<div class="height-100 d-flex align-items-center justify-content-center">
										<img src="../assets/img/svg/img-3.svg" class="mw-100 mh-100" />
									</div>
								</div>
								<!-- end col-4 -->
								<!-- begin col-8 -->
								<div class="col-8">
									<div class="m-b-2 text-truncate">Facebook Marketing Campaign</div>
									<div class="m-b-2  text-grey f-s-11">Sat 10/6 - Sun 18/6</div>
									<div class="d-flex align-items-center m-b-2">
										<div class="flex-grow-1">
											<div class="progress progress-xs rounded-corner bg-white-transparent-1">
												<div class="progress-bar progress-bar-striped bg-warning" data-animation="width" data-value="60%" style="width: 0%"></div>
											</div>
										</div>
										<div class="ml-2 f-s-11 width-30 text-center"><span data-animation="number" data-value="60">0</span>%</div>
									</div>
									<div class="text-grey f-s-11 m-b-15 text-truncate">
										+124k visitors from facebook
									</div>
									<a href="#" class="btn btn-xs btn-warning f-s-10 pl-2 pr-2">View campaign</a>
								</div>
								<!-- end col-8 -->
							</div>
							<!-- end row -->
						</div>
						<!-- end card-body -->
					</div>
					<!-- end card -->
				</div>
				<!-- end col-4 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->
		
		<!-- begin theme-panel -->
		<div class="theme-panel theme-panel-lg">
			<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
			<div class="theme-panel-content">
				<h5>App Settings</h5><ul class="theme-list clearfix">
					<li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="../assets/css/default/theme/red.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-pink" data-theme="pink" data-theme-file="../assets/css/default/theme/pink.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Pink">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../assets/css/default/theme/orange.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-yellow" data-theme="yellow" data-theme-file="../assets/css/default/theme/yellow.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Yellow">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-lime" data-theme="lime" data-theme-file="../assets/css/default/theme/lime.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Lime">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-green" data-theme="green" data-theme-file="../assets/css/default/theme/green.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green">&nbsp;</a></li>
					<li class="active"><a href="javascript:;" class="bg-teal" data-theme="default" data-theme-file="" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-aqua" data-theme="aqua" data-theme-file="../assets/css/default/theme/aqua.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Aqua">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="../assets/css/default/theme/blue.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../assets/css/default/theme/purple.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-indigo" data-theme="indigo" data-theme-file="../assets/css/default/theme/indigo.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Indigo">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="../assets/css/default/theme/black.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
				</ul>
				<div class="divider"></div>
				<div class="row m-t-10">
					<div class="col-6 control-label text-inverse f-w-600">Header Fixed</div>
					<div class="col-6 d-flex">
						<div class="custom-control custom-switch ml-auto">
							<input type="checkbox" class="custom-control-input" name="header-fixed" id="headerFixed" value="1" checked />
							<label class="custom-control-label" for="headerFixed">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-6 control-label text-inverse f-w-600">Header Inverse</div>
					<div class="col-6 d-flex">
						<div class="custom-control custom-switch ml-auto">
							<input type="checkbox" class="custom-control-input" name="header-inverse" id="headerInverse" value="1" />
							<label class="custom-control-label" for="headerInverse">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-6 control-label text-inverse f-w-600">Sidebar Fixed</div>
					<div class="col-6 d-flex">
						<div class="custom-control custom-switch ml-auto">
							<input type="checkbox" class="custom-control-input" name="sidebar-fixed" id="sidebarFixed" value="1" checked />
							<label class="custom-control-label" for="sidebarFixed">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-6 control-label text-inverse f-w-600">Sidebar Grid</div>
					<div class="col-6 d-flex">
						<div class="custom-control custom-switch ml-auto">
							<input type="checkbox" class="custom-control-input" name="sidebar-grid" id="sidebarGrid" value="1" />
							<label class="custom-control-label" for="sidebarGrid">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Sidebar Gradient</div>
					<div class="col-md-6 d-flex">
						<div class="custom-control custom-switch ml-auto">
							<input type="checkbox" class="custom-control-input" name="sidebar-gradient" id="sidebarGradient" value="1" />
							<label class="custom-control-label" for="sidebarGradient">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="divider"></div>
				<h5>Admin Design (5)</h5>
				<div class="theme-version">
					<a href="../template_html/index_v2.html" class="active">
						<span style="background-image: url(../assets/img/theme/default.jpg);"></span>
					</a>
					<a href="../template_transparent/index_v2.html">
						<span style="background-image: url(../assets/img/theme/transparent.jpg);"></span>
					</a>
				</div>
				<div class="theme-version">
					<a href="../template_apple/index_v2.html">
						<span style="background-image: url(../assets/img/theme/apple.jpg);"></span>
					</a>
					<a href="../template_material/index_v2.html">
						<span style="background-image: url(../assets/img/theme/material.jpg);"></span>
					</a>
				</div>
				<div class="theme-version">
					<a href="../template_facebook/index_v2.html">
						<span style="background-image: url(../assets/img/theme/facebook.jpg);"></span>
					</a>
					<a href="../template_google/index_v2.html">
						<span style="background-image: url(../assets/img/theme/google.jpg);"></span>
					</a>
				</div>
				<div class="divider"></div>
				<h5>Language Version (7)</h5>
				<div class="theme-version">
					<a href="../template_html/index.html" class="active">
						<span style="background-image: url(../assets/img/version/html.jpg);"></span>
					</a>
					<a href="../template_ajax/index.html">
						<span style="background-image: url(../assets/img/version/ajax.jpg);"></span>
					</a>
				</div>
				<div class="theme-version">
					<a href="../template_angularjs/index.html">
						<span style="background-image: url(../assets/img/version/angular1x.jpg);"></span>
					</a>
					<a href="../template_angularjs10/index.html">
						<span style="background-image: url(../assets/img/version/angular10x.jpg);"></span>
					</a>
				</div>
				<div class="theme-version">
					<a href="javascript:alert('Laravel Version only available in downloaded version.');">
						<span style="background-image: url(../assets/img/version/laravel.jpg);"></span>
					</a>
					<a href="../template_vuejs/index.html">
						<span style="background-image: url(../assets/img/version/vuejs.jpg);"></span>
					</a>
				</div>
				<div class="theme-version">
					<a href="../template_reactjs/index.html">
						<span style="background-image: url(../assets/img/version/reactjs.jpg);"></span>
					</a>
					<a href="javascript:alert('.NET Core 3.1 MVC Version only available in downloaded version.');">
						<span style="background-image: url(../assets/img/version/dotnet.jpg);"></span>
					</a>
				</div>
				<div class="divider"></div>
				<h5>Frontend Design (4)</h5>
				<div class="theme-version">
					<a href="../../../frontend/template/template_one_page_parallax/index.html">
						<span style="background-image: url(../assets/img/theme/one-page-parallax.jpg);"></span>
					</a>
					<a href="../../../frontend/template/template_e_commerce/index.html">
						<span style="background-image: url(../assets/img/theme/e-commerce.jpg);"></span>
					</a>
				</div>
				<div class="theme-version">
					<a href="../../../frontend/template/template_blog/index.html">
						<span style="background-image: url(../assets/img/theme/blog.jpg);"></span>
					</a>
					<a href="../../../frontend/template/template_forum/index.html">
						<span style="background-image: url(../assets/img/theme/forum.jpg);"></span>
					</a>
				</div>
				<div class="divider"></div>
				<div class="row m-t-10">
					<div class="col-md-12">
						<a href="https://seantheme.com/color-admin/documentation/" class="btn btn-inverse btn-block btn-rounded" target="_blank"><b>Documentation</b></a>
						<a href="javascript:;" class="btn btn-default btn-block btn-rounded" data-click="reset-local-storage"><b>Reset Local Storage</b></a>
					</div>
				</div>
			</div>
		</div>
		<!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?= base_url()?>/assets/js/app.min.js"></script>
	<script src="<?= base_url()?>/assets/js/theme/default.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?= base_url()?>/assets/plugins/d3/d3.min.js"></script>
	<script src="<?= base_url()?>/assets/plugins/nvd3/build/nv.d3.min.js"></script>
	<script src="<?= base_url()?>/assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
	<script src="<?= base_url()?>/assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js"></script>
	<script src="<?= base_url()?>/assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
	<script src="<?= base_url()?>/assets/plugins/moment/min/moment.min.js"></script>
	<script src="<?= base_url()?>/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="<?= base_url()?>/assets/js/demo/dashboard-v3.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
</body>
</html>
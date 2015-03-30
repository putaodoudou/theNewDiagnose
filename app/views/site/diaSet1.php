<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title>添加新样本</title>

	<link rel="stylesheet" href="http://fonts.useso.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/xenon-core.css">
	<link rel="stylesheet" href="assets/css/xenon-forms.css">
	<link rel="stylesheet" href="assets/css/xenon-components.css">
	<link rel="stylesheet" href="assets/css/xenon-skins.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.1.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body">
	
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others fixed">
			
			<div class="sidebar-menu-inner">	
				
				<header class="logo-env">
					
					<!-- logo -->
					<div class="logo">
						<a href="dashboard-1.html" class="logo-expanded">
							<img src="assets/images/logo@2x.png" width="80" alt="" />
						</a>
						
						<a href="dashboard-1.html" class="logo-collapsed">
							<img src="assets/images/logo-collapsed@2x.png" width="40" alt="" />
						</a>
					</div>
					
					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
						<a href="#" data-toggle="user-info-menu">
							<i class="fa-bell-o"></i>
							<span class="badge badge-success">7</span>
						</a>
						
						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>
					
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
					<div class="settings-icon">
						<a href="#" data-toggle="settings-pane" data-animate="true">
							<i class="linecons-cog"></i>
						</a>
					</div>
					
								
				</header>
						
				
						
				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<li>
						<a href="dashboard-1.html">
							<i class="linecons-cog"></i>
							<span class="title">Dashboard</span>
						</a>
						<ul>
							<li>
								<a href="dashboard-1.html">
									<span class="title">Dashboard 1</span>
								</a>
							</li>
							<li>
								<a href="dashboard-2.html">
									<span class="title">Dashboard 2</span>
								</a>
							</li>
							<li>
								<a href="dashboard-3.html">
									<span class="title">Dashboard 3</span>
								</a>
							</li>
							<li>
								<a href="dashboard-4.html">
									<span class="title">Dashboard 4</span>
								</a>
							</li>
							<li>
								<a href="skin-generator.html">
									<span class="title">Skin Generator</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="layout-variants.html">
							<i class="linecons-desktop"></i>
							<span class="title">Layouts</span>
						</a>
						<ul>
							<li>
								<a href="layout-variants.html">
									<span class="title">Layout Variants &amp; API</span>
								</a>
							</li>
							<li>
								<a href="layout-collapsed-sidebar.html">
									<span class="title">Collapsed Sidebar</span>
								</a>
							</li>
							<li>
								<a href="layout-static-sidebar.html">
									<span class="title">Static Sidebar</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-menu.html">
									<span class="title">Horizontal Menu</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-plus-sidebar.html">
									<span class="title">Horizontal &amp; Sidebar Menu</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-menu-click-to-open-subs.html">
									<span class="title">Horizontal Open On Click</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-menu-min.html">
									<span class="title">Horizontal Menu Minimal</span>
								</a>
							</li>
							<li>
								<a href="layout-right-sidebar.html">
									<span class="title">Right Sidebar</span>
								</a>
							</li>
							<li>
								<a href="layout-chat-open.html">
									<span class="title">Chat Open</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-sidebar-menu-collapsed-right.html">
									<span class="title">Both Menus &amp; Collapsed</span>
								</a>
							</li>
							<li>
								<a href="layout-boxed.html">
									<span class="title">Boxed Layout</span>
								</a>
							</li>
							<li>
								<a href="layout-boxed-horizontal-menu.html">
									<span class="title">Boxed &amp; Horizontal Menu</span>
								</a>
							</li>
							<li>
								<a href="http://www.cssmoban.com">
									<span class="title">weidea.net</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="ui-panels.html">
							<i class="linecons-note"></i>
							<span class="title">UI Elements</span>
						</a>
						<ul>
							<li>
								<a href="ui-panels.html">
									<span class="title">Panels</span>
								</a>
							</li>
							<li>
								<a href="ui-buttons.html">
									<span class="title">Buttons</span>
								</a>
							</li>
							<li>
								<a href="ui-tabs-accordions.html">
									<span class="title">Tabs &amp; Accordions</span>
								</a>
							</li>
							<li>
								<a href="ui-modals.html">
									<span class="title">Modals</span>
								</a>
							</li>
							<li>
								<a href="ui-breadcrumbs.html">
									<span class="title">Breadcrumbs</span>
								</a>
							</li>
							<li>
								<a href="ui-blockquotes.html">
									<span class="title">Blockquotes</span>
								</a>
							</li>
							<li>
								<a href="ui-progressbars.html">
									<span class="title">Progress Bars</span>
								</a>
							</li>
							<li>
								<a href="ui-navbars.html">
									<span class="title">Navbars</span>
								</a>
							</li>
							<li>
								<a href="ui-alerts.html">
									<span class="title">Alerts</span>
								</a>
							</li>
							<li>
								<a href="ui-pagination.html">
									<span class="title">Pagination</span>
								</a>
							</li>
							<li>
								<a href="ui-typography.html">
									<span class="title">Typography</span>
								</a>
							</li>
							<li>
								<a href="ui-other-elements.html">
									<span class="title">Other Elements</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="ui-widgets.html">
							<i class="linecons-star"></i>
							<span class="title">Widgets</span>
						</a>
					</li>
					<li>
						<a href="mailbox-main.html">
							<i class="linecons-mail"></i>
							<span class="title">Mailbox</span>
							<span class="label label-success pull-right">5</span>
						</a>
						<ul>
							<li>
								<a href="mailbox-main.html">
									<span class="title">Inbox</span>
								</a>
							</li>
							<li>
								<a href="mailbox-compose.html">
									<span class="title">Compose Message</span>
								</a>
							</li>
							<li>
								<a href="mailbox-message.html">
									<span class="title">View Message</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="tables-basic.html">
							<i class="linecons-database"></i>
							<span class="title">Tables</span>
						</a>
						<ul>
							<li>
								<a href="tables-basic.html">
									<span class="title">Basic Tables</span>
								</a>
							</li>
							<li>
								<a href="tables-responsive.html">
									<span class="title">Responsive Table</span>
								</a>
							</li>
							<li>
								<a href="tables-datatables.html">
									<span class="title">Data Tables</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="active opened active">
						<a href="forms-native.html">
							<i class="linecons-params"></i>
							<span class="title">Forms</span>
						</a>
						<ul>
							<li class="active">
								<a href="forms-native.html">
									<span class="title">Native Elements</span>
								</a>
							</li>
							<li>
								<a href="forms-advanced.html">
									<span class="title">Advanced Plugins</span>
								</a>
							</li>
							<li>
								<a href="forms-wizard.html">
									<span class="title">Form Wizard</span>
								</a>
							</li>
							<li>
								<a href="forms-validation.html">
									<span class="title">Form Validation</span>
								</a>
							</li>
							<li>
								<a href="forms-input-masks.html">
									<span class="title">Input Masks</span>
								</a>
							</li>
							<li>
								<a href="forms-file-upload.html">
									<span class="title">File Upload</span>
								</a>
							</li>
							<li>
								<a href="forms-editors.html">
									<span class="title">Editors</span>
								</a>
							</li>
							<li>
								<a href="forms-sliders.html">
									<span class="title">Sliders</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="extra-gallery.html">
							<i class="linecons-beaker"></i>
							<span class="title">Extra</span>
							<span class="label label-purple pull-right hidden-collapsed">New Items</span>
						</a>
						<ul>
							<li>
								<a href="extra-icons-fontawesome.html">
									<span class="title">Icons</span>
									<span class="label label-warning pull-right">4</span>
								</a>
								<ul>
									<li>
										<a href="extra-icons-fontawesome.html">
											<span class="title">Font Awesome</span>
										</a>
									</li>
									<li>
										<a href="extra-icons-linecons.html">
											<span class="title">Linecons</span>
										</a>
									</li>
									<li>
										<a href="extra-icons-elusive.html">
											<span class="title">Elusive</span>
										</a>
									</li>
									<li>
										<a href="extra-icons-meteocons.html">
											<span class="title">Meteocons</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="extra-maps-google.html">
									<span class="title">Maps</span>
								</a>
								<ul>
									<li>
										<a href="extra-maps-google.html">
											<span class="title">Google Maps</span>
										</a>
									</li>
									<li>
										<a href="extra-maps-advanced.html">
											<span class="title">Advanced Map</span>
										</a>
									</li>
									<li>
										<a href="extra-maps-vector.html">
											<span class="title">Vector Map</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="extra-gallery.html">
									<span class="title">Gallery</span>
								</a>
							</li>
							<li>
								<a href="extra-calendar.html">
									<span class="title">Calendar</span>
								</a>
							</li>
							<li>
								<a href="extra-profile.html">
									<span class="title">Profile</span>
								</a>
							</li>
							<li>
								<a href="extra-login.html">
									<span class="title">Login</span>
								</a>
							</li>
							<li>
								<a href="extra-lockscreen.html">
									<span class="title">Lockscreen</span>
								</a>
							</li>
							<li>
								<a href="extra-login-light.html">
									<span class="title">Login Light</span>
								</a>
							</li>
							<li>
								<a href="extra-timeline.html">
									<span class="title">Timeline</span>
								</a>
							</li>
							<li>
								<a href="extra-timeline-center.html">
									<span class="title">Timeline Centerd</span>
								</a>
							</li>
							<li>
								<a href="extra-notes.html">
									<span class="title">Notes</span>
								</a>
							</li>
							<li>
								<a href="extra-image-crop.html">
									<span class="title">Image Crop</span>
								</a>
							</li>
							<li>
								<a href="extra-portlets.html">
									<span class="title">Portlets</span>
								</a>
							</li>
							<li>
								<a href="blank-sidebar.html">
									<span class="title">Blank Page</span>
								</a>
							</li>
							<li>
								<a href="extra-search.html">
									<span class="title">Search</span>
								</a>
							</li>
							<li>
								<a href="extra-invoice.html">
									<span class="title">Invoice</span>
								</a>
							</li>
							<li>
								<a href="extra-not-found.html">
									<span class="title">404 Page</span>
								</a>
							</li>
							<li>
								<a href="extra-tocify.html">
									<span class="title">Tocify</span>
								</a>
							</li>
							<li>
								<a href="extra-loader.html">
									<span class="title">Loading Progress</span>
								</a>
							</li>
							<li>
								<a href="extra-page-loading-ol.html">
									<span class="title">Page Loading Overlay</span>
								</a>
							</li>
							<li>
								<a href="extra-notifications.html">
									<span class="title">Notifications</span>
								</a>
							</li>
							<li>
								<a href="extra-nestable-lists.html">
									<span class="title">Nestable Lists</span>
								</a>
							</li>
							<li>
								<a href="extra-scrollable.html">
									<span class="title">Scrollable</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="charts-main.html">
							<i class="linecons-globe"></i>
							<span class="title">Charts</span>
						</a>
						<ul>
							<li>
								<a href="charts-main.html">
									<span class="title">Chart Variants</span>
								</a>
							</li>
							<li>
								<a href="charts-range.html">
									<span class="title">Range Selector</span>
								</a>
							</li>
							<li>
								<a href="charts-sparklines.html">
									<span class="title">Sparklines</span>
								</a>
							</li>
							<li>
								<a href="charts-map.html">
									<span class="title">Map Charts</span>
								</a>
							</li>
							<li>
								<a href="charts-gauges.html">
									<span class="title">Circular Gauges</span>
								</a>
							</li>
							<li>
								<a href="charts-bar-gauges.html">
									<span class="title">Bar Gauges</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">
							<i class="linecons-cloud"></i>
							<span class="title">Menu Levels</span>
						</a>
						<ul>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.1</span>
								</a>
								<ul>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.1</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.2</span>
										</a>
										<ul>
											<li>
												<a href="#">
													<i class="entypo-flow-cascade"></i>
													<span class="title">Menu Level 3.1</span>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="entypo-flow-cascade"></i>
													<span class="title">Menu Level 3.2</span>
												</a>
												<ul>
													<li>
														<a href="#">
															<i class="entypo-flow-branch"></i>
															<span class="title">Menu Level 4.1</span>
														</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.3</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.2</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.3</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
						
			</div>
			
		</div>
		
		<div class="main-content">
					
			<!-- User Info, Notifications and Menu Bar -->
			<nav class="navbar user-info-navbar" role="navigation">
				
				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
					
					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>
					
					<li class="dropdown hover-line">
						<a href="#" data-toggle="dropdown">
							<i class="fa-envelope-o"></i>
							<span class="badge badge-green">15</span>
						</a>
							
						<ul class="dropdown-menu messages">
							<li>
									
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
								
									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>
											
											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>
									
									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>
											
											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything. 
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>
											
											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>
											
											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>
									
									<!-- Repeated -->
									
									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>
											
											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>
									
									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>
											
											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything. 
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>
											
											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>
											
											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>
									
								</ul>
								
							</li>
							
							<li class="external">
								<a href="blank-sidebar.html">
									<span>All Messages</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>
					
					<li class="dropdown hover-line">
						<a href="#" data-toggle="dropdown">
							<i class="fa-bell-o"></i>
							<span class="badge badge-purple">7</span>
						</a>
							
						<ul class="dropdown-menu notifications">
							<li class="top">
								<p class="small">
									<a href="#" class="pull-right">Mark all Read</a>
									You have <strong>3</strong> new notifications.
								</p>
							</li>
							
							<li>
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
									<li class="active notification-success">
										<a href="#">
											<i class="fa-user"></i>
											
											<span class="line">
												<strong>New user registered</strong>
											</span>
											
											<span class="line small time">
												30 seconds ago
											</span>
										</a>
									</li>
									
									<li class="active notification-secondary">
										<a href="#">
											<i class="fa-lock"></i>
											
											<span class="line">
												<strong>Privacy settings have been changed</strong>
											</span>
											
											<span class="line small time">
												3 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-primary">
										<a href="#">
											<i class="fa-thumbs-up"></i>
											
											<span class="line">
												<strong>Someone special liked this</strong>
											</span>
											
											<span class="line small time">
												2 minutes ago
											</span>
										</a>
									</li>
									
									<li class="notification-danger">
										<a href="#">
											<i class="fa-calendar"></i>
											
											<span class="line">
												John cancelled the event
											</span>
											
											<span class="line small time">
												9 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-info">
										<a href="#">
											<i class="fa-database"></i>
											
											<span class="line">
												The server is status is stable
											</span>
											
											<span class="line small time">
												yesterday at 10:30am
											</span>
										</a>
									</li>
									
									<li class="notification-warning">
										<a href="#">
											<i class="fa-envelope-o"></i>
											
											<span class="line">
												New comments waiting approval
											</span>
											
											<span class="line small time">
												last week
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="external">
								<a href="#">
									<span>View all notifications</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>
					
				</ul>
				
				
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
					
					<li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->
						
						<form method="get" action="extra-search.html">
							<input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />
							
							<button type="submit" class="btn btn-link">
								<i class="linecons-search"></i>
							</button>
						</form>
						
					</li>
					
					<li class="dropdown user-profile">
						<a href="#" data-toggle="dropdown">
							<img src="assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								Arlind Nushi
								<i class="fa-angle-down"></i>
							</span>
						</a>
						
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li>
								<a href="#edit-profile">
									<i class="fa-edit"></i>
									New Post
								</a>
							</li>
							<li>
								<a href="#settings">
									<i class="fa-wrench"></i>
									Settings
								</a>
							</li>
							<li>
								<a href="#profile">
									<i class="fa-user"></i>
									Profile
								</a>
							</li>
							<li>
								<a href="#help">
									<i class="fa-info"></i>
									Help
								</a>
							</li>
							<li class="last">
								<a href="extra-lockscreen.html">
									<i class="fa-lock"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
					
					<li>
						<a href="#" data-toggle="chat">
							<i class="fa-comments-o"></i>
						</a>
					</li>
					
				</ul>
				
			</nav>
			<div class="page-title">
				
				<div class="title-env">
					<h1 class="title">Native Elements</h1>
					<p class="description">Plain text boxes, select dropdowns and other basic form elements</p>
				</div>
				
					<div class="breadcrumb-env">
					
								<ol class="breadcrumb bc-1">
									<li>
							<a href="dashboard-1.html"><i class="fa-home"></i>Home</a>
						</li>
								<li>
						
										<a href="forms-native.html">Forms</a>
								</li>
							<li class="active">
						
										<strong>Native Elements</strong>
								</li>
								</ol>
								
				</div>
					
			</div>
			<div class="row">
				<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Default form inputs</h3>
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
								</a>
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						<div class="panel-body">
							
							<form role="form" class="form-horizontal">
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Input text field</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="field-1" placeholder="Placeholder">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Password</label>
									
									<div class="col-sm-10">
										<input type="password" class="form-control" id="field-2" placeholder="Placeholder (Password)">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Disabled input</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" placeholder="Placeholder" disabled>
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-3">Email field</label>
									
									<div class="col-sm-10">
										<input type="email" class="form-control" id="field-3" placeholder="Enter your email&hellip;">
										<p class="help-block">Example block-level help text here. Emails inputs are validated on native HTML5 forms.</p>
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-4">File Field</label>
									
									<div class="col-sm-10">
										<input type="file" class="form-control" id="field-4">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-5">Text area</label>
									
									<div class="col-sm-10">
										<textarea class="form-control" cols="5" id="field-5"></textarea>
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-5">Auto grow</label>
									
									<div class="col-sm-10">
										<textarea class="form-control autogrow" cols="5" id="field-5" placeholder="I will grow as you enter new lines."></textarea>
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group has-error">
									<label class="col-sm-2 control-label" for="field-6">Error field</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="field-6" placeholder="Hello I am an error">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group has-warning">
									<label class="col-sm-2 control-label" for="field-7">Warning field</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="field-7" placeholder="Hello I am a warning">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group has-success">
									<label class="col-sm-2 control-label" for="field-8">Success field</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="field-8" placeholder="Hello I am a success message">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group has-info">
									<label class="col-sm-2 control-label" for="field-9">Info field</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="field-9" placeholder="Hello I am an info message">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-11">Input size</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control input-sm" id="field-13" placeholder=".input-sm">
										<br />
										<input type="text" class="form-control" id="field-14" placeholder="Normal input">
										<br />
										<input type="text" class="form-control input-lg" id="field-15" placeholder=".input-lg">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-11">Input text position</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control text-center" id="field-11" placeholder="Placeholder">
										<br />
										<input type="text" class="form-control text-right" id="field-12" placeholder="Placeholder">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Select list</label>
									
									<div class="col-sm-10">
										<select class="form-control">
											<option>Option 1</option>
											<option>Option 2</option>
											<option>Option 3</option>
											<option>Option 4</option>
											<option>Option 5</option>
										</select>
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Checkboxes</label>
									
									<div class="col-sm-10">
										<div class="checkbox">
											<label>
												<input type="checkbox">
												Default checkbox
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox">
												Another one
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" disabled>
												Disabled option
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" checked disabled>
												Checked and disabled option
											</label>
										</div>
										
										<br />
										<strong>Inline checkboxes</strong>
										
										<p>
											<label class="checkbox-inline">
												<input type="checkbox">
												Inline checkbox 1
											</label>
											<label class="checkbox-inline">
												<input type="checkbox">
												Inline checkbox 2
											</label>
											<label class="checkbox-inline">
												<input type="checkbox">
												Inline checkbox 3
											</label>
										</p>
										
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Radio buttons</label>
									
									<div class="col-sm-10">
										<div class="radio">
											<label>
												<input type="radio" name="radio-1" checked>
												Default radio
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="radio-1">
												Another one
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" disabled>
												Disabled option
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" checked disabled>
												Checked and disabled option
											</label>
										</div>
										
										<br />
										<strong>Inline radio buttons</strong>
										
										<p>
											<label class="radio-inline">
												<input type="radio" name="radio-2" checked>
												Inline radio button 1
											</label>
											<label class="radio-inline">
												<input type="radio" name="radio-2">
												Inline radio button 2
											</label>
											<label class="radio-inline">
												<input type="radio" name="radio-2">
												Inline radio button 3
											</label>
										</p>
										
									</div>
								</div>
								
								
							</form>
							
						</div>
					</div>
					
				</div>
			</div>
			
			
			
			<div class="row">
				<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Replaced radio and checkboxes</h3>
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
								</a>
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						<div class="panel-body">
							
							<form role="form" class="form-horizontal">
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Checkboxes</label>
									
									<div class="col-sm-10">
										<div class="form-block">
											<label>
												<input type="checkbox" class="cbr">
												Default checkbox
											</label>
											<br />
											<label>
												<input type="checkbox" class="cbr">
												Another one
											</label>
											<br />
											<label>
												<input type="checkbox" class="cbr" disabled>
												Disabled option
											</label>
											<br />
											<label>
												<input type="checkbox" class="cbr" checked disabled>
												Checked and disabled option
											</label>
										</div>
										
										<br />
										<strong>Inline checkboxes</strong>
										
										<p>
											<label class="cbr-inline">
												<input type="checkbox" class="cbr">
												Inline checkbox 1
											</label>
											<label class="cbr-inline">
												<input type="checkbox" class="cbr">
												Inline checkbox 2
											</label>
											<label class="cbr-inline">
												<input type="checkbox" class="cbr">
												Inline checkbox 3
											</label>
										</p>
										
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Radio buttons</label>
									
									<div class="col-sm-10">
										
										<div class="form-block">
											<label>
												<input type="radio" name="radio-1" class="cbr" checked>
												Default radio
											</label>
											<br />
											<label>
												<input type="radio" name="radio-1" class="cbr">
												Another one
											</label>
											<br />
											<label>
												<input type="radio" class="cbr" disabled>
												Disabled option
											</label>
											<br />
											<label>
												<input type="radio" class="cbr" checked disabled>
												Checked and disabled option
											</label>
										</div>
										
										<br />
										<strong>Inline radio buttons</strong>
										
										<p>
											<label class="cbr-inline">
												<input type="radio" name="radio-2" class="cbr" checked>
												Inline radio button 1
											</label>
											<label class="cbr-inline">
												<input type="radio" name="radio-2" class="cbr">
												Inline radio button 2
											</label>
											<label class="cbr-inline">
												<input type="radio" name="radio-2" class="cbr">
												Inline radio button 3
											</label>
										</p>
										
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Checkbox styles</label>
									
									<div class="col-sm-3">
										
										<div class="form-block">
											<label>
												<input type="checkbox" class="cbr">
												Default style
											</label>
											<br />
											<label>
												<input type="checkbox" class="cbr cbr-primary">
												Primary color
											</label>
											<br />
											<label>
												<input type="checkbox" class="cbr cbr-secondary">
												Secondary color
											</label>
											<br />
											<label>
												<input type="checkbox" class="cbr cbr-red">
												Red color
											</label>
											<br />
											<label>
												<input type="checkbox" class="cbr cbr-turquoise">
												Turquoise color
											</label>
										</div>
										
									</div>
									
									<div class="col-sm-3">
										
										<div class="form-block">
											<label>
												<input type="checkbox" class="cbr cbr-blue">
												Blue color
											</label>
											<br />
											<label>
												<input type="checkbox" class="cbr cbr-info">
												Info color
											</label>
											<br />
											<label>
												<input type="checkbox" class="cbr cbr-warning">
												Warning color
											</label>
											<br />
											<label>
												<input type="checkbox" class="cbr cbr-danger">
												Danger color
											</label>
											<br />
											<label>
												<input type="checkbox" class="cbr cbr-orange">
												Orange color
											</label>
										</div>
										
									</div>
									
									<div class="col-sm-3">
										
										<div class="form-block">
											<label>
												<input type="checkbox" class="cbr cbr-success">
												Success color
											</label>
											<br />
											<label>
												<input type="checkbox" class="cbr cbr-purple">
												Purple color
											</label>
											<br />
											<label>
												<input type="checkbox" class="cbr cbr-gray">
												Gray color
											</label>
											<br />
											<label>
												<input type="checkbox" class="cbr cbr-pink">
												Pink color
											</label>
											<br />
											<label>
												<input type="checkbox" class="cbr cbr-yellow">
												Yellow color
											</label>
										</div>
										
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Radio styles</label>
									
									<div class="col-sm-3">
										
										<div class="form-block">
											<label>
												<input type="radio" name="radio-3"class="cbr">
												Default style
											</label>
											<br />
											<label>
												<input type="radio" name="radio-3"class="cbr cbr-primary">
												Primary color
											</label>
											<br />
											<label>
												<input type="radio" name="radio-3"class="cbr cbr-secondary">
												Secondary color
											</label>
											<br />
											<label>
												<input type="radio" name="radio-3"class="cbr cbr-red">
												Red color
											</label>
											<br />
											<label>
												<input type="radio" name="radio-3" class="cbr cbr-turquoise">
												Turquoise color
											</label>
										</div>
										
									</div>
									
									<div class="col-sm-3">
										
										<div class="form-block">
											<label>
												<input type="radio" name="radio-3"class="cbr cbr-blue">
												Blue color
											</label>
											<br />
											<label>
												<input type="radio" name="radio-3"class="cbr cbr-info">
												Info color
											</label>
											<br />
											<label>
												<input type="radio" name="radio-3"class="cbr cbr-warning">
												Warning color
											</label>
											<br />
											<label>
												<input type="radio" name="radio-3"class="cbr cbr-danger">
												Danger color
											</label>
											<br />
											<label>
												<input type="radio" name="radio-3" class="cbr cbr-orange">
												Orange color
											</label>
										</div>
										
									</div>
									
									<div class="col-sm-3">
										
										<div class="form-block">
											<label>
												<input type="radio" name="radio-3"class="cbr cbr-success">
												Success color
											</label>
											<br />
											<label>
												<input type="radio" name="radio-3"class="cbr cbr-purple">
												Purple color
											</label>
											<br />
											<label>
												<input type="radio" name="radio-3"class="cbr cbr-gray">
												Gray color
											</label>
											<br />
											<label>
												<input type="radio" name="radio-3" class="cbr cbr-yellow">
												Yellow color
											</label>
											<br />
											<label>
												<input type="radio" name="radio-3" class="cbr cbr-pink">
												Pink color
											</label>
										</div>
										
									</div>
								</div>
								
							</form>
							
						</div>
					</div>
				
				</div>
			</div>
			
			
			
			<div class="row">
				<div class="col-sm-6">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">iSwitch Checkbox Replacement</h3>
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
								</a>
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						<div class="panel-body">
							
							<form role="form" class="form-horizontal">
								
								<div class="form-group">
									<label class="col-sm-3 control-label">Colors</label>
									
									<div class="col-sm-9">
										<div class="form-block">
											<input type="checkbox" checked class="iswitch">
											<input type="checkbox" checked class="iswitch iswitch-primary">
											<input type="checkbox" checked class="iswitch iswitch-secondary">
											<input type="checkbox" checked class="iswitch iswitch-red">
											<input type="checkbox" checked class="iswitch iswitch-blue">
											<input type="checkbox" checked class="iswitch iswitch-purple">
											<br />
											<input type="checkbox" class="iswitch iswitch-warning">
											<input type="checkbox" class="iswitch iswitch-danger">
											<input type="checkbox" class="iswitch iswitch-info">
											<input type="checkbox" class="iswitch iswitch-success">
											<input type="checkbox" class="iswitch iswitch-gray">
											<input type="checkbox" class="iswitch iswitch-orange">
											<br />
											<input type="checkbox" class="iswitch iswitch-pink">
											<input type="checkbox" class="iswitch iswitch-yellow">
											<input type="checkbox" class="iswitch iswitch-turquoise">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-3 control-label">Sizes</label>
									
									<div class="col-sm-9">
										<div class="form-block">
											<input type="checkbox" class="iswitch iswitch-secondary">
										</div>
											
										<div class="form-block">
											<input type="checkbox" checked class="iswitch-lg iswitch-info">
										</div>
											
										<div class="form-block">
											<input type="checkbox" class="iswitch-xlg iswitch-red">
										</div>
									</div>
								</div>
							
							</form>
						
						</div>
					</div>
					
				</div>
				<div class="col-sm-6">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Vertical Form Placement</h3>
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
								</a>
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						<div class="panel-body">
							
							<form role="form">
								
								<div class="form-group">
									<label for="email-1">Email address:</label>
									<input type="email" class="form-control" id="email-1" placeholder="Enter your email&hellip;">
								</div>
								
								<div class="form-group">
									<label for="password-1">Password:</label>
									<input type="password" class="form-control" id="password-1" placeholder="Enter your password">
								</div>
								
								<div class="form-group">
									<label>
										<input type="checkbox" class="cbr" checked>
										Remember me next time
									</label>
								</div>
								
								<div class="form-group">
									<button type="button" class="btn btn-gray btn-single">Sign in</button>
									<button type="button" class="btn btn-info btn-single pull-right">Register now</button>
								</div>
								
							</form>
							
						</div>
					</div>
				</div>
			</div>
			
			
			
			<div class="row">
				<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Inline Form</h3>
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
								</a>
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						<div class="panel-body">
							
							<form role="form" class="form-inline">
								
								<div class="form-group">
									<input type="text" class="form-control" size="25" placeholder="Username" />
								</div>
								
								<div class="form-group">
									<input type="password" class="form-control" size="25" placeholder="Password" />
								</div>
								
								<div class="form-group">
									<button class="btn btn-secondary btn-single">Sign in</button>
								</div>
								
								<div class="form-group">
									<label class="cbr-inline">
										<input type="checkbox" class="cbr" checked>
										Remember me
									</label>
								</div>
								
								<div class="form-group pull-right">
									<button class="btn btn-white btn-single">Create new account</button>
								</div>
								
							</form>
						
						</div>
					</div>
				
				</div>
			</div>
			
			
			
			<div class="row">
				<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Input groups with addons</h3>
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
								</a>
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						<div class="panel-body">
							
							<form role="form" class="form-horizontal">
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Addon on the left</label>
									
									<div class="col-sm-10">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input type="text" class="form-control" placeholder="Username">
										</div>
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Addon on the right</label>
									
									<div class="col-sm-10">
										<div class="input-group">
											<input type="text" class="form-control">
											<span class="input-group-addon">.00</span>
										</div>
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Both addons</label>
									
									<div class="col-sm-10">
										<div class="input-group">
											<span class="input-group-addon">$</span>
											<input type="text" class="form-control">
											<span class="input-group-addon">.00</span>
										</div>
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Addon with icon</label>
									
									<div class="col-sm-10">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="linecons-mail"></i>
											</span>
											<input type="email" class="form-control" placeholder="Enter your email">
										</div>
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Minimal type &amp; sizes</label>
									
									<div class="col-sm-10">
										<div class="input-group input-group-sm input-group-minimal">
											<span class="input-group-addon">
												<i class="linecons-location"></i>
											</span>
											<input type="email" class="form-control" placeholder="Current city">
										</div>
										<br />
										<div class="input-group input-group-minimal">
											<input type="email" class="form-control" placeholder="Search for something&hellip;">
											<span class="input-group-addon">
												<i class="linecons-search"></i>
											</span>
										</div>
										<br />
										<div class="input-group input-group-lg input-group-minimal">
											<span class="input-group-addon">
												<i class="linecons-pencil"></i>
											</span>
											<input type="email" class="form-control no-right-border" placeholder="Chat message">
											<span class="input-group-addon">
												<i class="linecons-paper-plane"></i>
											</span>
										</div>
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Button assigned</label>
									
									<div class="col-sm-10">
									
										<div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-info" type="button">Go!</button>
											</span>
											
											<input type="text" class="form-control no-left-border form-focus-info">
										</div>
										
										<br />
									
										<div class="input-group">
											<input type="text" class="form-control no-right-border form-focus-purple">
											
											<span class="input-group-btn">
												<button class="btn btn-purple" type="button">Submit</button>
											</span>
										</div>
										
										<br />
			
										<div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-warning" type="button">Check validation</button>
											</span>
											
											<input type="email" class="form-control no-left-border no-right-border form-focus-warning">
											
											<span class="input-group-btn">
												<button class="btn btn-warning" type="button">Register Email</button>
											</span>
										</div>
									
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Dropdown addon</label>
									
									<div class="col-sm-10">
									
										<div class="input-group">
											<span class="input-group-btn">
												<button type="button" class="btn btn-red dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												
												<ul class="dropdown-menu dropdown-red no-spacing">
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</span>
											
											<input type="text" class="form-control no-left-border form-focus-red">
										</div>
										
										<br />
									
										<div class="input-group">
											<input type="text" class="form-control no-right-border form-focus-info">
											
											<span class="input-group-btn">
												<button type="button" class="btn btn-info">Action</button>
												<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
													<i class="fa-info"></i>
												</button>
												
												<ul class="dropdown-menu dropdown">
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</span>
										</div>
									
									</div>
								</div>
							
							</form>
						
						</div>
					</div>
					
				</div>
			</div>
			
			
			
			<div class="row">
				<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Input Grid</h3>
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
								</a>
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						<div class="panel-body">
							
							<div class="row col-margin">
								<div class="col-xs-12">
									<input type="text" class="form-control" placeholder="xs-12" />
								</div>
									
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder=".col-xs-6" />
								</div>
									
								<div class="col-xs-6">
									<input type="text" class="form-control" placeholder=".col-xs-6" />
								</div>
									
								<div class="col-xs-3">
									<input type="text" class="form-control" placeholder=".col-xs-3" />
								</div>
									
								<div class="col-xs-3">
									<input type="text" class="form-control" placeholder=".col-xs-3" />
								</div>
									
								<div class="col-xs-3">
									<input type="text" class="form-control" placeholder=".col-xs-3" />
								</div>
									
								<div class="col-xs-3">
									<input type="text" class="form-control" placeholder=".col-xs-3" />
								</div>
									
								<div class="col-xs-2">
									<input type="text" class="form-control" placeholder=".col-xs-2" />
								</div>
									
								<div class="col-xs-2">
									<input type="text" class="form-control" placeholder=".col-xs-2" />
								</div>
									
								<div class="col-xs-2">
									<input type="text" class="form-control" placeholder=".col-xs-2" />
								</div>
									
								<div class="col-xs-2">
									<input type="text" class="form-control" placeholder=".col-xs-2" />
								</div>
									
								<div class="col-xs-2">
									<input type="text" class="form-control" placeholder=".col-xs-2" />
								</div>
									
								<div class="col-xs-2">
									<input type="text" class="form-control" placeholder=".col-xs-2" />
								</div>
									
								<div class="col-xs-1">
									<input type="text" class="form-control" placeholder=".xs-1" />
								</div>
									
								<div class="col-xs-1">
									<input type="text" class="form-control" placeholder=".xs-1" />
								</div>
									
								<div class="col-xs-1">
									<input type="text" class="form-control" placeholder=".xs-1" />
								</div>
									
								<div class="col-xs-1">
									<input type="text" class="form-control" placeholder=".xs-1" />
								</div>
									
								<div class="col-xs-1">
									<input type="text" class="form-control" placeholder=".xs-1" />
								</div>
									
								<div class="col-xs-1">
									<input type="text" class="form-control" placeholder=".xs-1" />
								</div>
									
								<div class="col-xs-1">
									<input type="text" class="form-control" placeholder=".xs-1" />
								</div>
									
								<div class="col-xs-1">
									<input type="text" class="form-control" placeholder=".xs-1" />
								</div>
									
								<div class="col-xs-1">
									<input type="text" class="form-control" placeholder=".xs-1" />
								</div>
									
								<div class="col-xs-1">
									<input type="text" class="form-control" placeholder=".xs-1" />
								</div>
									
								<div class="col-xs-1">
									<input type="text" class="form-control" placeholder=".xs-1" />
								</div>
									
								<div class="col-xs-1">
									<input type="text" class="form-control" placeholder=".xs-1" />
								</div>
							</div>
						
						</div>
					</div>
				
				</div>
			</div>
			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<footer class="main-footer sticky footer-type-1">
				
				<div class="footer-inner">
				
					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy; 2014 
						<strong>Xenon</strong> 
						More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
					</div>
					
					
					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up">
					
						<a href="#" rel="go-top">
							<i class="fa-angle-up"></i>
						</a>
						
					</div>
					
				</div>
				
			</footer>
		</div>
		
			
		<!-- start: Chat Section -->
		<div id="chat" class="fixed">
			
			<div class="chat-inner">
			
				
				<h2 class="chat-header">
					<a href="#" class="chat-close" data-toggle="chat">
						<i class="fa-plus-circle rotate-45deg"></i>
					</a>
					
					Chat
					<span class="badge badge-success is-hidden">0</span>
				</h2>
				
				<script type="text/javascript">
				// Here is just a sample how to open chat conversation box
				jQuery(document).ready(function($)
				{
					var $chat_conversation = $(".chat-conversation");
					
					$(".chat-group a").on('click', function(ev)
					{
						ev.preventDefault();
						
						$chat_conversation.toggleClass('is-open');
						
						$(".chat-conversation textarea").trigger('autosize.resize').focus();
					});
					
					$(".conversation-close").on('click', function(ev)
					{
						ev.preventDefault();
						$chat_conversation.removeClass('is-open');
					});
				});
				</script>
				
				
				<div class="chat-group">
					<strong>Favorites</strong>
					
					<a href="#"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
				</div>
				
				
				<div class="chat-group">
					<strong>Work</strong>
					
					<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
				</div>
				
				
				<div class="chat-group">
					<strong>Other</strong>
					
					<a href="#"><span class="user-status is-online"></span> <em>Dennis E. Johnson</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Stuart A. Shire</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Janet I. Matas</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Mindy A. Smith</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Herman S. Foltz</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Gregory E. Robie</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Nellie T. Foreman</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>William R. Miller</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Vivian J. Hall</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Melinda A. Anderson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Gary M. Mooneyham</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert C. Medina</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Dylan C. Bernal</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Marc P. Sanborn</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Kenneth M. Rochester</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Rachael D. Carpenter</em></a>
				</div>
			
			</div>
			
			<!-- conversation template -->
			<div class="chat-conversation">
				
				<div class="conversation-header">
					<a href="#" class="conversation-close">
						&times;
					</a>
					
					<span class="user-status is-online"></span>
					<span class="display-name">Arlind Nushi</span> 
					<small>Online</small>
				</div>
				
				<ul class="conversation-body">	
					<li>
						<span class="user">Arlind Nushi</span>
						<span class="time">09:00</span>
						<p>Are you here?</p>
					</li>
					<li class="odd">
						<span class="user">Brandon S. Young</span>
						<span class="time">09:25</span>
						<p>This message is pre-queued.</p>
					</li>
					<li>
						<span class="user">Brandon S. Young</span>
						<span class="time">09:26</span>
						<p>Whohoo!</p>
					</li>
					<li class="odd">
						<span class="user">Arlind Nushi</span>
						<span class="time">09:27</span>
						<p>Do you like it?</p>
					</li>
				</ul>
				
				<div class="chat-textarea">
					<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
				</div>
				
			</div>
			
		</div>
		<!-- end: Chat Section -->
		
		
	</div>
	
	
	



	<!-- Bottom Scripts -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script>

</body>
</html>
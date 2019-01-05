<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="main.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	


<?
$basename = basename($_SERVER["REQUEST_URI"], ".php");
$editname = basename($_SERVER["REQUEST_URI"]);
$test = $_SERVER["REQUEST_URI"];
?>

<!-- ==============================================
Navigation Section
=============================================== -->
<header id="header-container" class="fullwidth  <?php echo $nav = ($basename == 'index' || $basename == '')  ?>"> 
	<!-- Header -->
	<div id="header">
	    
		<div class="container" style="background-color: #24292e;margin-top:-40px;height:60px; bottom:-40px; position:relative;">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo" style="border-right:none;">
					<a href="index.php">
						<img src="assets/logo/<?php echo $nav = ($basename == 'index' || $basename == '') ? 'logo3.png' : 'logo.png'; ?>" data-sticky-logo="assets/logo/logo.png" alt="">
					</a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive" style="bottom:10px; left:-25px;">
					<li>
							<a><input type="text" style="height:30px; padding-left:5px; margin-bottom: 15px;border:none;padding-right:120px;background-color:hsla(0,0%,100%,.125) ; border-radius: 3px; margin-left:-35px; "placeholder="Search Sanjaa" data-unscoped-placeholder="Search Sanja" data-scoped-placeholder="Search" autocapitalize="off" aria-autocomplete="list" aria-controls="jump-to-results" aria-label="Search Sanja" data-jump-to-suggestions-path="/_graphql/GetSuggestedNavigationDestinations#csrf-token=w/GienOMAeA+/gjK0gK1iPbgm+cSjIho4x1npINzyo3bEDVAHfXMlgunqBbZLnIUgpRSn8by/E8ZEUn1VF1vwg==" spellcheck="false" autocomplete="off" ></a>
							</li>
					<li>
							<a href="how.php" class="<?php echo $active = ($basename == 'how') ? ' current' : ''; ?>"><span style="color:white; font-weight:bold;">
								Description </span>
							</a>
						</li>
						<!-- li>
							<a href="index.php" class="<?php echo $active = ($basename == 'index') ? ' current' : ''; ?>">
								<?php echo $lang['home']; ?>
							</a>
						</li -->
						<li>
							<a href="jobs.php" class="<?php echo $active = ($basename == 'jobs') ? ' current' : ''; ?>">
							<span style="color:white; font-weight:bold;">
								Jobs </span>
							</a>
					     <ul><li>
							<a href="jobs.php" class="<?php echo $active = ($basename == 'jobs') ? ' current' : ''; ?>">
								Works Available
							</a>
						</li>
						<li>
							<a  href="#" class="<?php echo $active = ($basename == 'services' || $basename == 'freelancers') ? ' current' : ''; ?>">
								For Employers
							</a>
							<ul class="dropdown-nav">
								<li><a href="freelancers.php">Find Freelancers</a></li>
								<li><a href="services.php">Find Services</a></li>
							</ul>
                            </li> 
							</ul>
						</li>

						<!-- li>
							<a href="#" class="<?php echo $active = ($basename == 'about' || $basename == 'contact' || $basename == 'faq') ? ' current' : ''; ?>">
								More
							</a>
							<ul class="dropdown-nav">
								<li><a href="about.php">About us</a></li>
								<li><a href="faq.php">Faq</a></li>
								<li><a href="contact.php">Contact us</a></li>
							</ul>
						</li -->
						<li>
							<a href="#">
							<span style="color:white; font-weight:bold;">
								Languages </span>
							</a>
							<ul class="dropdown-nav">
								<li class="m_2"><a href="<?php echo $test; ?>?lang=english">English</a></li>
								<li class="m_2"><a href="<?php echo $test; ?>?lang=french">French</a></li>
							</ul>
						</li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side" style="background-color:#24292e;>

				<?php
			  //Start new Admin object
			  $admin = new Admin();
			  //Start new Client object
			  $client = new Client();
			  //Start new Freelancer object
			  $freelancer = new Freelancer();

			  if ($admin->isLoggedIn()) { ?>

					<!-- User Menu -->
					<div class="header-widget">

						<!-- Messages -->
						<div class="header-notifications user-menu">
							<div class="header-notifications-trigger">
								<a href="#">
									<div class="user-avatar status-online"><img src="Admin/<?php echo escape($admin->data()->imagelocation); ?>" alt="">
									</div>
								</a>
							</div>

							<!-- Dropdown -->
							<div class="header-notifications-dropdown">

								<!-- User Status -->
								<div class="user-status">

									<!-- User Name / Avatar -->
									<div class="user-details">
										<div class="user-avatar status-online"><img src="Admin/<?php echo escape($admin->data()->imagelocation); ?>" alt="">
										</div>
										<div class="user-name">
											<?php echo escape($admin->data()->name); ?> <span>Admin</span>
										</div>
									</div>

									<!-- User Status Switcher -->
									<div class="status-switch" id="snackbar-user-status">
										<label class="user-online current-status">Online</label>
										<label class="user-invisible">Invisible</label>
										<!-- Status Indicator -->
										<span class="status-indicator" aria-hidden="true"></span>
									</div>
							</div>

							<ul class="user-menu-small-nav">
								<li><a href="Admin/dashboard.php"><i class="icon-material-outline-dashboard"></i> <?php echo $lang['dashboard']; ?></a></li>
								<li><a href="Admin/profile.php?a=profile"><i class="icon-feather-user"></i> <?php echo $lang['view']; ?> <?php echo $lang['profile']; ?></a></li>
								<li><a href="Admin/logout.php"><i class="icon-material-outline-power-settings-new"></i> <?php echo $lang['logout']; ?></a></li>
							</ul>

							</div>
						</div>

					</div>
					<!-- User Menu / End -->

					<?php } elseif($client->isLoggedIn()) { ?>

												<!--  User Notifications -->
												<div class="header-widget hide-on-mobile">
													<?php
													$msg = DB::getInstance()->get("message", "*", ["ORDER" => "date_added DESC",
																																						"AND" => ["user_to" => $client->data()->clientid,
																																											"active" => 1,
																																											"opened" => 0,
																																											"delete_remove" => 0
																																										 ]]);

													 ?>
													<!-- Messages -->
													<div class="header-notifications">
														<div class="header-notifications-trigger">
															<a href="#"><i class="icon-feather-mail"></i><span><?php echo $msg->count(); ?></span></a>
														</div>

														<!-- Dropdown -->
														<div class="header-notifications-dropdown">

															<div class="header-notifications-headline">
																<h4>Messages</h4>
																<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
																	<i class="icon-feather-check-square"></i>
																</button>
															</div>

															<div class="header-notifications-content">
																<div class="header-notifications-scroll" data-simplebar>
																	<ul>
																		<?php
																					if($msg->count()) {
																						$x = 1;
																					foreach($msg->results() as $row) {
																						$usr = DB::getInstance()->get("freelancer", "*", ["freelancerid" => $row->user_from, "LIMIT" => 1]);
																						if ($usr->count()) {
																							foreach ($usr->results() as $single) {
																								$img = $single->imagelocation ;
																								$user_name = $single->name ;
																							}
																						}

																			?>
																		<!-- Notification -->
																		<li class="notifications-not-read">
																			<a href="<?php echo $site_base_url ;?>/Client/messagenotification.php?id=<?php echo $row->user_from; ?>">
																				<span class="notification-avatar status-online"><img src="Freelancer/<?php echo $img; ?>" alt=""></span>
																				<div class="notification-text">
																					<strong><?php echo $user_name; ?></strong>
																					<p class="notification-msg-text"><?php echo truncateHtml($row->message, 80); ?></p>
																					<span class="color"><?php echo ago($row->date_added); ?></span>
																				</div>
																			</a>
																		</li>
																	<?php }

																}else {
																	echo '<b>No New Message</b>';
																}
																		 ?>
																	</ul>
																</div>
															</div>

															<a href="<?php echo $site_base_url; ?>/Client/inbox.php" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
														</div>
													</div>

												</div>
												<!--  User Notifications / End -->


						<!-- User Menu -->
						<div class="header-widget">

							<!-- Messages -->
							<div class="header-notifications user-menu">
								<div class="header-notifications-trigger">
									<a href="#">
										<div class="user-avatar status-online"><img src="Client/<?php echo escape($client->data()->imagelocation); ?>" alt="">
										</div>
									</a>
								</div>

								<!-- Dropdown -->
								<div class="header-notifications-dropdown">

									<!-- User Status -->
									<div class="user-status">

										<!-- User Name / Avatar -->
										<div class="user-details">
											<div class="user-avatar status-online"><img src="Client/<?php echo escape($client->data()->imagelocation); ?>" alt="">
											</div>
											<div class="user-name">
												<?php echo escape($client->data()->name); ?> <span>Client</span>
											</div>
										</div>

										<!-- User Status Switcher -->
										<div class="status-switch" id="snackbar-user-status">
											<label class="user-online current-status">Online</label>
											<label class="user-invisible">Invisible</label>
											<!-- Status Indicator -->
											<span class="status-indicator" aria-hidden="true"></span>
										</div>
								</div>

								<ul class="user-menu-small-nav">
									<li><a href="Client/"><i class="icon-material-outline-dashboard"></i> <?php echo $lang['dashboard']; ?></a></li>
									<li><a href="Client/profile.php?a=profile"><i class="icon-feather-user"></i> <?php echo $lang['view']; ?> <?php echo $lang['profile']; ?></a></li>
									<li><a href="Client/logout.php"><i class="icon-material-outline-power-settings-new"></i> <?php echo $lang['logout']; ?></a></li>
								</ul>

								</div>
							</div>

						</div>
						<!-- User Menu / End -->

					<?php } elseif($freelancer->isLoggedIn()) { ?>

						<!--  User Notifications -->
						<div class="header-widget hide-on-mobile">
							<?php
							$msg = DB::getInstance()->get("message", "*", ["ORDER" => "date_added DESC",
																																"AND" => ["user_to" => $freelancer->data()->freelancerid,
																																					"active" => 1,
																																					"opened" => 0,
																																					"delete_remove" => 0
																																				 ]]);

							 ?>
							<!-- Messages -->
							<div class="header-notifications">
								<div class="header-notifications-trigger">
									<a href="#"><i class="icon-feather-mail"></i><span><?php echo $msg->count(); ?></span></a>
								</div>

								<!-- Dropdown -->
								<div class="header-notifications-dropdown">

									<div class="header-notifications-headline">
										<h4>Messages</h4>
										<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
											<i class="icon-feather-check-square"></i>
										</button>
									</div>

									<div class="header-notifications-content">
										<div class="header-notifications-scroll" data-simplebar>
											<ul>
												<?php
															if($msg->count()) {
																$x = 1;
															foreach($msg->results() as $row) {
																$usr = DB::getInstance()->get("client", "*", ["clientid" => $row->user_from, "LIMIT" => 1]);
																if ($usr->count()) {
																	foreach ($usr->results() as $single) {
																		$img = $single->imagelocation ;
																		$user_name = $single->name ;
																	}
																}

													?>
												<!-- Notification -->
												<li class="notifications-not-read">
													<a href="<?php echo $site_base_url ;?>/Freelancer/messagenotification.php?id=<?php echo $row->user_from; ?>">
														<span class="notification-avatar status-online"><img src="Client/<?php echo $img; ?>" alt=""></span>
														<div class="notification-text">
															<strong><?php echo $user_name; ?></strong>
															<p class="notification-msg-text"><?php echo truncateHtml($row->message, 80); ?></p>
															<span class="color"><?php echo ago($row->date_added); ?></span>
														</div>
													</a>
												</li>
											<?php }

										}else {
											echo '<b>No New Message</b>';
										}
												 ?>
											</ul>
										</div>
									</div>

									<a href="<?php echo $site_base_url; ?>/Freelancer/inbox.php" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
								</div>
							</div>

						</div>
						<!--  User Notifications / End -->


						<!-- User Menu -->
						<div class="header-widget">

							<!-- Messages -->
							<div class="header-notifications user-menu">
								<div class="header-notifications-trigger">
									<a href="#">
										<div class="user-avatar status-online"><img src="Freelancer/<?php echo escape($freelancer->data()->imagelocation); ?>" alt="">
										</div>
									</a>
								</div>

								<!-- Dropdown -->
								<div class="header-notifications-dropdown">

									<!-- User Status -->
									<div class="user-status">

										<!-- User Name / Avatar -->
										<div class="user-details">
											<div class="user-avatar status-online"><img src="Freelancer/<?php echo escape($freelancer->data()->imagelocation); ?>" alt="">
											</div>
											<div class="user-name">
												<?php echo escape($freelancer->data()->name); ?> <span>Freelancer</span>
											</div>
										</div>

										<!-- User Status Switcher -->
										<div class="status-switch" id="snackbar-user-status">
											<label class="user-online current-status">Online</label>
											<label class="user-invisible">Invisible</label>
											<!-- Status Indicator -->
											<span class="status-indicator" aria-hidden="true"></span>
										</div>
								</div>

								<ul class="user-menu-small-nav">
									<li><a href="Freelancer/index.php"><i class="icon-material-outline-dashboard"></i> <?php echo $lang['dashboard']; ?></a></li>
									<li><a href="Freelancer/profile.php?a=profile"><i class="icon-feather-user"></i> <?php echo $lang['view']; ?> <?php echo $lang['profile']; ?></a></li>
									<li><a href="Freelancer/logout.php"><i class="icon-material-outline-power-settings-new"></i> <?php echo $lang['logout']; ?></a></li>
								</ul>

								</div>
							</div>

						</div>
						<!-- User Menu / End -->

				<?php } else { ?>

        <div class="header-widget" >
					<a style="top:20px;position:relative;" href="#sign-in-dialog" class="popup-with-zoom-anim log-in-button" ><i class="icon-feather-log-in" style="color:gray;"></i> <span style="text-align:center; color:whitesmoke; position: center;">Log In / Register</span></a>
				</div>

			<?php } ?>

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
</body>
</html>

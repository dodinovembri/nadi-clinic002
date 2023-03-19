<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="keywords" content="<?= $config->keyword ?>" />
	<meta name="description" content="<?= $config->description ?>" />  
      
    <title>Config Menu | <?= $config->name ?></title>
    <?= $this->include('extranet/components/styles') ?>
</head>

<body class="text-left">
	<div class="app-admin-wrap layout-sidebar-large">
		<?= $this->include('extranet/components/header') ?>
		<?= $this->include('extranet/components/sidebar') ?>
		<div class="main-content-wrap sidenav-open d-flex flex-column">
			<div class="main-content">
				<div class="breadcrumb">
					<h1>Config Menu</h1>
					<ul>
						<li>Config Menu</li>
					</ul>
				</div>
				<div class="separator-breadcrumb border-top"></div>
				<?= $this->include('extranet/components/flashmessage') ?>
				<div class="row">
					<div class="col-md-12">
						<form action="<?= base_url('extranet/config-menu/update/' . $config_menu->id) ?>" method="post" enctype="multipart/form-data">
							<div class="card mb-4">
								<div class="card-body">
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-3 form-group mb-3">
											<label>Home</label>
											<input class="form-control" type="text" name="home" value="<?= $config_menu->home ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Service</label>
											<input class="form-control" type="text" name="service" value="<?= $config_menu->service ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Pricing</label>
											<input class="form-control" type="text" name="pricing" value="<?= $config_menu->pricing ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Our Apps</label>
											<input class="form-control" type="text" name="our_apps" value="<?= $config_menu->our_apps ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>About Us</label>
											<input class="form-control" type="text" name="about_us" value="<?= $config_menu->about_us ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Contact Us</label>
											<input class="form-control" type="text" name="contact_us" value="<?= $config_menu->contact_us ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Signin</label>
											<input class="form-control" type="text" name="signin" value="<?= $config_menu->signin ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Get Started</label>
											<input class="form-control" type="text" name="get_started" value="<?= $config_menu->get_started ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Tell Bussiness</label>
											<input class="form-control" type="text" name="tell_bussiness" value="<?= $config_menu->tell_bussiness ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Watch Video</label>
											<input class="form-control" type="text" name="watch_video" value="<?= $config_menu->watch_video ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Plan Pricing</label>
											<input class="form-control" type="text" name="plan_pricing" value="<?= $config_menu->plan_pricing ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Day Trial</label>
											<input class="form-control" type="text" name="day_trial" value="<?= $config_menu->day_trial ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-3 form-group mb-3">
											<label>Daily</label>
											<input class="form-control" type="text" name="daily" value="<?= $config_menu->daily ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Monthly</label>
											<input class="form-control" type="text" name="monthly" value="<?= $config_menu->monthly ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Yearly</label>
											<input class="form-control" type="text" name="yearly" value="<?= $config_menu->yearly ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Day</label>
											<input class="form-control" type="text" name="day" value="<?= $config_menu->day ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Month</label>
											<input class="form-control" type="text" name="month" value="<?= $config_menu->month ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Year</label>
											<input class="form-control" type="text" name="year" value="<?= $config_menu->year ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Lets Try</label>
											<input class="form-control" type="text" name="lets_try" value="<?= $config_menu->lets_try ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Chat Us</label>
											<input class="form-control" type="text" name="chat_us" value="<?= $config_menu->chat_us ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Email Us</label>
											<input class="form-control" type="text" name="email_us" value="<?= $config_menu->email_us ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Call Us</label>
											<input class="form-control" type="text" name="call_us" value="<?= $config_menu->call_us ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Our App Category</label>
											<input class="form-control" type="text" name="our_app_category" value="<?= $config_menu->our_app_category ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Choose App Category</label>
											<input class="form-control" type="text" name="choose_app_category" value="<?= $config_menu->choose_app_category ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-3 form-group mb-3">
											<label>Choose App</label>
											<input class="form-control" type="text" name="choose_app" value="<?= $config_menu->choose_app ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
											<button class="btn btn-primary" type="submit">Submit</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?= $this->include('extranet/components/footer') ?>
		</div>
	</div>
	<?= $this->include('extranet/components/scripts') ?>
</body>

</html>
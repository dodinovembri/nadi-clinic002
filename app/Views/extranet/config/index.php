<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="keywords" content="<?= $config->keyword ?>" />
	<meta name="description" content="<?= $config->description ?>" />  
      
    <title>Config | <?= $config->name ?></title>
    <?= $this->include('extranet/components/styles') ?>
</head>

<body class="text-left">
	<div class="app-admin-wrap layout-sidebar-large">
		<?= $this->include('extranet/components/header') ?>
		<?= $this->include('extranet/components/sidebar') ?>
		<div class="main-content-wrap sidenav-open d-flex flex-column">
			<div class="main-content">
				<div class="breadcrumb">
					<h1>Config</h1>
					<ul>
						<li>Config</li>
					</ul>
				</div>
				<div class="separator-breadcrumb border-top"></div>
				<?= $this->include('extranet/components/flashmessage') ?>
				<div class="row">
					<div class="col-md-12">
						<form action="<?= base_url('extranet/config/update/' . $config->id) ?>" method="post" enctype="multipart/form-data">
							<div class="card mb-4">
								<div class="card-body">
									<h5>General Config</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-4 form-group mb-3">
											<label>Name</label>
											<input class="form-control" type="text" name="name" value="<?= $config->name ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Author</label>
											<input class="form-control" type="text" name="author" value="<?= $config->author ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Description</label>
											<textarea class="form-control" type="text" rows="5" name="description"><?= $config->description ?></textarea>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Title</label>
											<input class="form-control" type="text" name="title" value="<?= $config->title ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Home Title</label>
											<input class="form-control" type="text" name="hero_title" value="<?= $config->hero_title ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Home Subtitle</label>
											<textarea class="form-control" type="text" rows="5" name="hero_subtitle"><?= $config->hero_subtitle ?></textarea>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Service Title</label>
											<input class="form-control" type="text" name="service_title" value="<?= $config->service_title ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Service Subtitle</label>
											<textarea class="form-control" type="text" rows="5" name="service_subtitle"><?= $config->service_subtitle ?></textarea>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Pricing Title</label>
											<input class="form-control" type="text" name="pricing_title" value="<?= $config->pricing_title ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Pricing Subtitle</label>
											<textarea class="form-control" type="text" rows="5" name="pricing_subtitle"><?= $config->pricing_subtitle ?></textarea>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Pricing Daily Title</label>
											<input class="form-control" type="text" name="pricing_daily_title" value="<?= $config->pricing_daily_title ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Pricing Daily Subtitle</label>
											<textarea class="form-control" type="text" rows="5" name="pricing_daily_subtitle" ><?= $config->pricing_daily_subtitle ?></textarea>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Pricing Daily Price</label>
											<input class="form-control" type="text" name="pricing_daily_price" value="<?= $config->pricing_daily_price ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Pricing Monthly Title</label>
											<input class="form-control" type="text" name="pricing_monthly_title" value="<?= $config->pricing_monthly_title ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Pricing Monthly Subtitle</label>
											<textarea class="form-control" type="text" rows="5" name="pricing_monthly_subtitle" ><?= $config->pricing_monthly_subtitle ?></textarea>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Pricing Monthly Price</label>
											<input class="form-control" type="text" name="pricing_monthly_price" value="<?= $config->pricing_monthly_price ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Pricing Yearly Title</label>
											<input class="form-control" type="text" name="pricing_yearly_title" value="<?= $config->pricing_yearly_title ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Pricing Yearly Subtitle</label>
											<textarea class="form-control" type="text" rows="5" name="pricing_yearly_subtitle"><?= $config->pricing_yearly_subtitle ?></textarea>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Pricing Yearly Price</label>
											<input class="form-control" type="text" name="pricing_yearly_price" value="<?= $config->pricing_yearly_price ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Subscribe Title</label>
											<input class="form-control" type="text" name="subscribe_title" value="<?= $config->subscribe_title ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Subscribe Subtitle</label>
											<textarea class="form-control" type="text" rows="5" name="subscribe_subtitle" ><?= $config->subscribe_subtitle ?></textarea>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Brand Title</label>
											<input class="form-control" type="text" name="brand_title" value="<?= $config->brand_title ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Brand Subtitle</label>
											<textarea class="form-control" type="text" rows="5" name="brand_subtitle"><?= $config->brand_subtitle ?></textarea>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Copyright</label>
											<input class="form-control" type="text" name="copyright" value="<?= $config->copyright ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Contact Us Subtitle</label>
											<textarea class="form-control" type="text" rows="5" name="contact_us_subtitle"><?= $config->contact_us_subtitle ?></textarea>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Chat Us Description</label>
											<textarea class="form-control" type="text" rows="5" name="chat_us_description"><?= $config->chat_us_description ?></textarea>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Email Us Description</label>
											<textarea class="form-control" type="text" rows="5" name="email_us_description"><?= $config->email_us_description ?></textarea>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Call Us Description</label>
											<textarea class="form-control" type="text" rows="5" name="call_us_description"><?= $config->call_us_description ?></textarea>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Whatsapp Url</label>
											<textarea class="form-control" type="text" rows="5" name="whatsapp_url"><?= $config->whatsapp_url ?></textarea>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Email Address</label>
											<input class="form-control" type="text" name="email_address" value="<?= $config->email_address ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Phone Number</label>
											<input class="form-control" type="text" name="phone_number" value="<?= $config->phone_number ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Config Image</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-4 form-group mb-3">
											<label>Favicon</label>
											<input class="form-control" type="file" name="favicon" value="<?= $config->favicon ?>" />
											<sub>.jpg or .png file, size: <span style="color:red"><b>80x80</b></span> pixels</sub><br>
											<img src="<?= base_url('assets/images/favicon/'.$config->favicon) ?>" style="margin-top:10px" height="60" alt="">
											<span><?= $config->favicon ?></span>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Logo White</label>
											<input class="form-control" type="file" name="logo_white" value="<?= $config->logo_white ?>" />
											<sub>.jpg or .png file, size: <span style="color:red"><b>110x35</b></span> pixels</sub><br>
											<img src="<?= base_url('assets/images/logo/'.$config->logo_white) ?>" style="margin-top:10px" height="60" alt="">
											<span><?= $config->logo_white ?></span>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Logo Black</label>
											<input class="form-control" type="file" name="logo_black" value="<?= $config->logo_black ?>" />
											<sub>.jpg or .png file, size: <span style="color:red"><b>110x35</b></span> pixels</sub><br>
											<img src="<?= base_url('assets/images/logo/'.$config->logo_black) ?>" style="margin-top:10px" height="60" alt="">
											<span><?= $config->logo_black ?></span>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Background Image Login</label>
											<input class="form-control" type="file" name="auth_background_image" value="<?= $config->auth_background_image ?>" />
											<sub>.jpg or .png file, size: <span style="color:red"><b>2000x1330</b></span> pixels</sub><br>
											<img src="<?= base_url('assets/images/auth/'.$config->auth_background_image) ?>" style="margin-top:10px" height="60" alt="">
											<span><?= $config->auth_background_image ?></span>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Background Home Image</label>
											<input class="form-control" type="file" name="hero_background_image" value="<?= $config->hero_background_image ?>" />
											<sub>.jpg or .png file, size: <span style="color:red"><b>1920x1080</b></span> pixels</sub><br>
											<img src="<?= base_url('assets/images/hero/'.$config->hero_background_image) ?>" style="margin-top:10px" height="60" alt="">
											<span><?= $config->hero_background_image ?></span>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Banner Image Home</label>
											<input class="form-control" type="file" name="hero_banner_image" value="<?= $config->hero_banner_image ?>" />
											<sub>.jpg or .png file, size: <span style="color:red"><b>590x420</b></span> pixels</sub><br>
											<img src="<?= base_url('assets/images/hero/'.$config->hero_banner_image) ?>" style="margin-top:10px" height="60" alt="">
											<span><?= $config->hero_banner_image ?></span>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>User Image Default</label>
											<input class="form-control" type="file" name="user_image_default" value="<?= $config->user_image_default ?>" />
											<sub>.jpg or .png file, size: <span style="color:red"><b>120x120</b></span> pixels</sub><br>
											<img src="<?= base_url('assets/images/users/'.$config->user_image_default) ?>" style="margin-top:10px" height="60" alt="">
											<span><?= $config->user_image_default ?></span>
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
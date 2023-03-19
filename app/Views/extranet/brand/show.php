<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="<?= $config->keyword ?>" />
    <meta name="description" content="<?= $config->description ?>" />

    <title>Brand | <?= $config->name ?></title>
    <?= $this->include('extranet/components/styles') ?>
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <!-- Header & Sidebar -->
        <?= $this->include('extranet/components/header') ?>
        <?= $this->include('extranet/components/sidebar') ?>
        <!-- Main -->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Brand Detail</h1>
                    <ul>
                        <li><a href="<?= base_url('extranet/brand') ?>">Brands</a></li>
                        <li>Brand Detail</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Name</label>
                                        <input class="form-control" type="text" value="<?= $brand->name ?>" disabled/>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Image</label>
                                        <img src="<?= base_url('assets/images/brands/' . $brand->image) ?>" height="120" alt="Brand Image">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Status</label>
                                        <input class="form-control" type="text" value="<?= $brand->status == 1 ? 'Active' : 'Inactive' ?>" disabled/>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 20px;">
                                        <a href="<?= base_url('extranet/brand') ?>"><button class="btn btn-primary">Back to List</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end of main-content -->
            </div>
            <?= $this->include('extranet/components/footer') ?>
        </div>
    </div>
	<?= $this->include('extranet/components/scripts') ?>
</body>

</html>
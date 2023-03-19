<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="<?= $config->keyword ?>" />
    <meta name="description" content="<?= $config->description ?>" />

    <title>App Type | <?= $config->name ?></title>
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
                    <h1>App Types</h1>
                    <ul>
                        <li><a href="#">App Types</a></li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <a href="<?= base_url('extranet/app-type/create') ?>"><button class="btn btn-primary ripple" type="button">Create New</button><br><br></a>
                <div class="row mb-4">
                    <div class="col-md-12 mb-4">
                        <?= $this->include('extranet/components/flashmessage') ?>
                        <div class="card text-left">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="width:10px">No</th>
                                                <th>Image</th>
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th style="width:25px">Status</th>
                                                <th style="width:80px">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;
                                            foreach ($app_types as $key => $value) {
                                                $no++; ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td>
                                                        <img src="<?= base_url('assets/images/app_types/' . $value->image) ?>" height="20" alt="">
                                                    </td>
                                                    <td><?= $value->code ?></td>
                                                    <td><?= $value->name ?></td>
                                                    <td>
                                                        <?php if ($value->status == 1) {
                                                            echo "Active";
                                                        } elseif ($value->status == 0) {
                                                            echo "Inactive";
                                                        } ?>
                                                    </td>
                                                    <td>
                                                        <a class="text-success mr-2" href="<?= base_url('extranet/app-type/show/' . $value->id) ?>">
                                                            <i class="nav-icon i-Eye font-weight-bold"></i>
                                                        </a>
                                                        <a class="text-success mr-2" href="<?= base_url('extranet/app-type/edit/' . $value->id) ?>">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a class="text-danger mr-2" href="#">
                                                            <i class="nav-icon i-Close-Window font-weight-bold" data-toggle="modal" data-target="#deleteModal<?= $value->id ?>"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="deleteModal<?= $value->id ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="deleteModalLabel">Delete Data</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Are you sure want to delete this data?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                <a href="<?= base_url('extranet/app-type/destroy/' . $value->id) ?>"><button class="btn btn-primary ml-2" type="button">Delete</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?= $this->include('extranet/components/footer') ?>
        </div>
    </div>
	<?= $this->include('extranet/components/scripts') ?>
</body>

</html>
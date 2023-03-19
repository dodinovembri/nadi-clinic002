<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="<?= $config->keyword ?>" />
    <meta name="description" content="<?= $config->description ?>" />

    <title>Task | <?= $config->name ?></title>
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
                    <h1>Task Detail</h1>
                    <ul>
                        <li><a href="<?= base_url('extranet/task') ?>">Tasks</a></li>
                        <li>Task Detail</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Title</label>
                                        <input class="form-control" type="text" value="<?= $task->title ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="5" type="text" disabled><?= $task->description ?></textarea>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Assign Date</label>
                                        <input class="form-control" type="text" value="<?= $task->assign_date ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Start Date</label>
                                        <input class="form-control" type="text" value="<?= $task->start_date ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Finish Date</label>
                                        <input class="form-control" type="text" value="<?= $task->finish_date ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Status</label>
                                        <input class="form-control" type="text" value="<?php if ($task->status == 1) {
                                            echo "Open";
                                        }elseif ($task->status == 2) {
                                            echo "On Process";
                                        }elseif ($task->status == 3) {
                                            echo "Closed";
                                        }else{
                                            echo "Undefined Status";
                                        } ?>" disabled/>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 20px;">
                                        <a href="<?= base_url('extranet/task') ?>"><button class="btn btn-primary">Back to List</button></a>
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
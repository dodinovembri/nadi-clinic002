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
                    <h1>Edit Task</h1>
                    <ul>
                        <li><a href="<?= base_url('extranet/task') ?>">Tasks</a></li>
                        <li>Edit Task</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="<?= base_url('extranet/task/update/' . $task->id) ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Title</label>
                                            <input class="form-control" type="text" name="title" value="<?= $task->title ?>" placeholder="Enter title" required />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Description</label>
                                            <textarea class="form-control" type="text" rows="5" name="description" placeholder="Enter description" required><?= $task->description ?></textarea>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Assign Date</label>
                                            <input class="form-control" type="date" name="assign_date" value="<?= $task->assign_date ?>" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Start Date</label>
                                            <input class="form-control" type="date" name="start_date" value="<?= $task->start_date ?>" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Finish Date</label>
                                            <input class="form-control" type="date" name="finish_date" value="<?= $task->finish_date ?>" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <?php if ($task->status == 1) { ?>
                                                    <option value="1">Open</option>
                                                    <option value="2">On Process</option>
                                                    <option value="3">Closed</option>
                                                <?php } elseif ($task->status == 2) { ?>
                                                    <option value="2">On Process</option>
                                                    <option value="1">Open</option>
                                                    <option value="3">Closed</option>
                                                <?php } elseif ($task->status == 3) { ?>
                                                    <option value="3">Closed</option>
                                                    <option value="1">Open</option>
                                                    <option value="2">On Process</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 20px;">
                                            <button class="btn btn-primary">Submit</button>
                                            <a href="<?= base_url('extranet/task') ?>"><button type="button" class="btn btn-warning">Cancel</button></a>
                                        </div>
                                    </div>
                                </form>
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
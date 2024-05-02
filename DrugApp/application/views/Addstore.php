<?php $this->load->view('includes/header'); ?>
<header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
        <img class="rounded-circle" src="<?php echo base_url('assets/images/bfc.png');?>" style="width: 75px; height:75px;">
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="<?php echo base_url('index.php/SigninController'); ?>">Sign out</a>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-primary text-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('index.php/DashboardController'); ?>">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#myModal">
                            <span data-feather="file"></span>
                            Add User
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/AddstoreController') ?>">
                            <span data-feather="shopping-cart"></span>
                            Add Store
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/formscontroller/FormfiveController') ?>">
                            <span data-feather="users"></span>
                            Form 5
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            Form 6
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            Form 7
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Form 5 Report
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Form 6 Report
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Form 7 Report
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Year-end sale
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>

            <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
            <!-- <div class="container-fluid">
                <button id="openPopup" class="btn btn-primary">+ Add medicose</button>
                <div id="popupForm" class="popup-form">
                    <h2>Popup Form</h2>
                    <form action="<?php echo site_url('controller/method'); ?>" method="post">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <button id="closePopup" class="btn btn-danger">Close</button>
                </div>
            </div> -->

            <div class="container-fluid">
                <h2 class="mt-2 mb-2">Add Store</h2>
                <?php echo validation_errors(); ?>
                <div class="form-group alert alert-success">
                    <?php if ($this->session->flashdata('success')) { ?>
                        <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
                    <?php } ?>
                </div>
                <div class="form-group alert alert-danger">
                    <?php if ($this->session->flashdata('error')) { ?>
                        <p style="color: #000;"><?php echo $this->session->flashdata('error'); ?></p>
                    <?php } ?>
                </div>
                <form action="<?php echo base_url('index.php/AddstoreController/uploaddata/'); ?>" method="post" class="d-block">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Store Name" name="storename">
                            <?php echo form_error('storename', "<div style='color:red;'>,</div>"); ?>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Owner Name" name="ownername">
                            <?php echo form_error('ownername', "<div style='color:red;'>,</div>"); ?>

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Address" name="address">
                            <?php echo form_error('address', "<div style='color:red'>,</div>"); ?>


                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Name of drugs" name="drugs">
                            <?php echo form_error('drugs', "<div style='color:red'>,</div>"); ?>


                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Drugs Name" name="drugsname">
                            <?php echo form_error('drugsname', "<div style='color:red'>,</div>"); ?>

                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Manufacture Name" name="manufacture">
                            <?php echo form_error('manufacture', "<div style='color:red'>,</div>"); ?>


                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Reg.No" name="reg">
                            <?php echo form_error('reg', "<div style='color:red'>,</div>"); ?>

                        </div>
                    </div>
                    <div class="row mt-3">
                        <input type="submit" name="submit" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Store Name</th>
                            <th scope="col">Owner Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Name of Drugs</th>
                            <th scope="col">Action</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($getstore) && !empty($getstore)) : ?>
                            <?php foreach ($getstore as $row) { ?>
                                <tr>
                                    <td><?php echo $row->id ?></td>
                                    <td><?php echo $row->storename ?></td>
                                    <td><?php echo $row->ownername ?></td>
                                    <td><?php echo $row->address ?></td>
                                    <td><?php echo $row->drugs ?></td>
                                    <td>
                                        <a href="<?php echo base_url('index.php/DeleteController/index/') . $row->id; ?>" class="btn btn-danger">Delete</a>
                                        <a href="<?php echo base_url('index.php/AddstoreController/edit/') . $row->id; ?>" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="6">No records found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>

    </div>
</div>


<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add User</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="<?php echo base_url('index.php/AdduserController/NewAdmin'); ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="User Name" name="newname">
                        <?php echo form_error('newname', "<div style='color:red;'>,</div>"); ?>

                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="User email" name="newemail">
                        <?php echo form_error('newname', "<div style='color:red;'>,</div>"); ?>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="User password" name="newpassw">
                        <?php echo form_error('newname', "<div style='color:red;'>,</div>"); ?>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" name="submit" value="submit">

                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
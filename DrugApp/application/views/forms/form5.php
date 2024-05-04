<?php $this->load->view('includes/header'); ?>
<header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Antinorcotics</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="<?php echo base_url('index.php/DashboardController/logout'); ?>">Sign out</a>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-primary sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('index.php/DashboardController'); ?>">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#myModal">
                            <span data-feather="file"></span>
                            Add User 1111111
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/AddstoreController') ?>">
                            <span data-feather="shopping-cart"></span>
                            Add Store
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
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
                        <a class="nav-link" href="<?php echo base_url('index.php/Report/FormReportController/getdata/') ?>">
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

            <h2>Form 5</h2>
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
            <div class="container-fluid mt-4">
                <form action="<?php echo base_url('index.php/formscontroller/FormfiveController/formfivedata'); ?>" method="post" class="form-5 mx-auto">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Store Name here" name="store">
                            <?php echo form_error('store','<div class="alert alert-danger">', '</div>'); ?>

                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Store Owner here" name="storeowner">
                            <?php echo form_error('storeowner','<div class="alert alert-danger">', '</div>'); ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Store Address here" name="storeaddress">
                            <?php echo form_error('storeaddress','<div class="alert alert-danger">', '</div>'); ?>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Name of Drugs" name="drugname">
                            <?php echo form_error('drugname','<div class="alert alert-danger">', '</div>'); ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Name of Manufacture" name="manufacture">
                            <?php echo form_error('manufacture','<div class="alert alert-danger">', '</div>'); ?>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Registeration" name="reg">
                            <?php echo form_error('reg','<div class="alert alert-danger">', '</div>'); ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Batch No" name="batch">
                            <?php echo form_error('batch','<div class="alert alert-danger">', '</div>'); ?>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Quantity" name="qty">
                            <?php echo form_error('qty','<div class="alert alert-danger">', '</div>'); ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12 mx-auto">
                            <input type="submit" class="form-control btn btn-primary" name="submit" value="submit">
                        </div>
                    </div>
                </form>

            </div>
        </main>
    </div>
</div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        var popform = document.getElementById('popupForm');
        var openform = document.getElementById('openPopup');
        var closeform = document.getElementById('closePopup');

        openform.addEventListener("click", function() {
            popform.style.display = 'block';
        });
        closeform.addEventListener("click", function() {
            popform.style.display = 'none';
        });

    });
</script> -->


    <?php $this->load->view('includes/footer'); ?>
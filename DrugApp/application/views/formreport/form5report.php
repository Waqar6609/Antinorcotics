<?php $this->load->view('includes/header'); ?>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-primary sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#myModal">
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

            <h2>Form 5</h2>
            <div class="table-responsive">
                <table class="table table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th>Store Name</th>
                            <th>Owner</th>
                            <th>Address</th>
                            <th>Drugs Name</th>
                            <th>Manufacturer</th>
                            <th>Reg:No</th>
                            <th>Batch:No</th>
                            <th>Quantity</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($report as $row){ ?>
                        <tr>
                            <td><?php echo $row->store_name; ?></td>
                            <td><?php echo $row->store_owner; ?></td>
                            <td><?php echo $row->store_address; ?></td>
                            <td><?php echo $row->drugs_name; ?></td>
                            <td><?php echo $row->manufacturer; ?></td>
                            <td><?php echo $row->registeration; ?></td>
                            <td><?php echo $row->batch; ?></td>
                            <td><?php echo $row->quantity; ?></td>
                            <td>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                            
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
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
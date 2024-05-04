<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="container-fluid">
    <div class="row">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"> Form 5</h1>
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
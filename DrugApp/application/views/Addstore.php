<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>


<div class="container-fluid">
    <div class="row">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Add Store</h1>
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
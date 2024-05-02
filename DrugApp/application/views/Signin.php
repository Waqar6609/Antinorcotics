<?php $this->load->view('includes/header'); ?>

<div class="container-fluid" id="login-box">
    <div class="row h-100">
        <div class="col-md-8 col-sm-12 h-100  d-flex  justify-content-center ">
        <form action="<?php echo base_url('index.php/SigninController/loginprocess'); ?>" class="m-auto signin-form text-center" method="post">
                <img class="rounded-circle" src="<?php echo base_url('assets/images/bfc.png'); ?>" alt="logo" style="width: 75px; height:75px;" />
                <h2>Signin!</h2>
                <div class="form-group">
                    <input type="email" name="email" placeholder="enter your work email" class="form-control" value="<?= set_value('email') ?>">
                    <?php echo form_error('email', "<div style='color:red'>", "</div>"); ?>

                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="enter password" class="form-control" value="<?= set_value('password') ?>">
                    <?php echo form_error('password', "<div style='color:red'>", "</div>"); ?>

                </div>
                <div class="form-group">
                    <select class="form-control" name="usertype">
                        <option disabled>Admin</option>
                        <option>Admin</option>
                        <option>User</option>
                    </select>
                    <?php echo form_error('usertype', "<div style='color:red'>", "</div>"); ?>

                </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary" name="submit" value="submit">
                </div>
            </form>
            <?php if (isset($error)) : ?>
                <div><?php echo $error; ?></div>
            <?php endif; ?>

        </div>
        <div class="col-md-4 col-sm-12 bg-primary d-flex align-items-center justify-content-center flex-column p-3">
            <h3 class="text-center" style="color: rgb(0, 255, 255);font-size:24px;line-height:24px;font: weight 500;">Excited to have you<br> as one of our</h3>
            <h1 class="text-center" style="color: #eee; font-weight:500;">180,000<br><span style="font-size:16px;">Users</span></h1>
            <p class="text-center" style="font-size: 18px;color:#eee;">Thanks for being a part of our community!Heart</p>
        </div>

    </div>
</div>
<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('partials/header') ?>

<!-- Page Header-->
<header class="masthead"
    style="background-image: url('<?= base_url('assets/clean-blog/assets/img/home-bg.jpg') ?>')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Login</h1>
                    <span class="subheading">Simple Blog using Codeigniter</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-6 col-lg-8 col-xl-7">


    <?= $this->session->flashdata('message'); ?>

        <?php echo form_open(); ?>
            <div class="form-group">
                <label for="username">Username</label>
                <?php echo form_input('username', set_value('username'), 'class="form-control" id="username"'); ?>
            </div>

            <div class="form-group">
                <label for="password">password</label>
                <?php echo form_password('password', set_value('password'), 'class="form-control" id="password"'); ?>
            </div>

            <div class="my-3">
                <button class="btn btn-primary" type="submit">login</button>
            </div>
        <!-- </form> -->
        <?php echo form_close(); ?>

        </div>
    </div>
</div>

<?php $this->load->view('partials/footer') ?>
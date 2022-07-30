<?php $this->load->view('partials/header') ?>
<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>Tambah Artikel baru</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Tambah Artikel</h1>

        <div class="alert alert-warning">
        <?= validation_errors(); ?>
        </div>
        
        <?php echo form_open_multipart(); ?>
        <!-- <form action="" method="POST"> -->
            <div class="form-group">
                <label for="title">Judul</label>
                <?php echo form_input('title', set_value('title'), 'class="form-control" id="title"'); ?>
            </div>

            <div class="form-group">
                <label for="url">url</label>
                <?php echo form_input('url', set_value('url'), 'class="form-control" id="url"'); ?>
            </div>

            <div class="form-group">
                <label for="content">Konten</label>
                <?php echo form_textarea('content', set_value('content'), 'class="form-control" id="content"'); ?>
            </div>

            <div class="form-group">
                <label for="cover">Cover</label>
                <?php echo form_upload('cover', set_value('cover'), 'class="form-control" id="cover"'); ?>
            </div>

            <div class="my-3">
                <button class="btn btn-primary" type="submit">Simpan Artikel</button>
            </div>
        <!-- </form> -->
        <?php echo form_close(); ?>
        
    </div>
    </div>
</div>
    
<?php $this->load->view('partials/footer') ?>
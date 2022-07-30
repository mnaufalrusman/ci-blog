<?php $this->load->view('partials/header') ?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('<?= base_url('assets/clean-blog/assets/img/home-bg.jpg') ?>')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Welcome</h1>
                    <span class="subheading">Simple Blog using Codeigniter</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            
                <?= $this->session->flashdata('message'); ?>

            <form action="" method="GET">
                <input type="text" name="find" id="find">
                <button type="submit">Cari</button>
            </form>

            <?php foreach ($blogs as $blog): ?>
            <div class="post-preview">
                <a
                    href="<?= site_url('blog/detail/' .$blog['url']); ?>">
                    <h2 class="post-title"><?= $blog['title']; ?>
                    </h2>
                </a>
                <p class="post-meta">
                    Posted on <?= date('d M Y', strtotime($blog['date'])); ?>

                    <?php if (isset($_SESSION['username'])): ?>
                    <a class="text-info"
                        href="<?= site_url('blog/edit/' .$blog['id']); ?>">Edit</a>
                    <a class="text-danger"
                        href="<?= site_url('blog/delete/' .$blog['id']); ?>"
                        onclick="return confirm('Apa kamu yakin?')">Hapus</a>
                    <?php endif; ?>
                </p>
                <p><?= $blog['content']; ?>
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <?php endforeach; ?>

            <?= $this->pagination->create_links(); ?>
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older
                    Posts →</a></div>
        </div>
    </div>
</div>


<?php $this->load->view('partials/footer') ?>
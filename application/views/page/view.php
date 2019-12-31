<?php $this->load->view('templates/header'); ?>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-left">
                <div class="section-title mb-5">
                    <h2><?= $page['title'] ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <p>
                    <img src="<?= base_url() ?>assets/images/big_img_1.jpg" alt="Image" class="img-fluid">
                </p>
            </div>
            <div class="col-lg-6 pl-md-5 page_view">
                <?= $page['description'] ?>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
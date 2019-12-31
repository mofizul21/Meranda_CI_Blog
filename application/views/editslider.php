<?php
if (!$this->session->userdata('logged_in')) {
    redirect('dashboard/login');
}
?>

<?php $this->load->view('templates/dash_header'); ?>

<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row" id="main">
            <div class="col-sm-12 col-md-12 well" id="content">
                <h1>Edit Slider</h1>
            </div>

            <div class="col-md-6">
                <?= validation_errors() ?>

                    <?= form_open_multipart('slider/updateslider') ?>
                    <input type="hidden" name="sliderId" value="<?= $slider['id'] ?>">
                    <div class="form-group">
                        <label for="">Title:</label>
                        <input type="text" name="title" value="<?= $slider['title'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Description:</label>
                        <textarea name="desc" class="form-control"><?= $slider['description'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Link:</label>
                        <input type="text" name="link" class="form-control" value="<?= $slider['link'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Image:</label>
                        <img src="<?= base_url() ?>assets/images/<?= $slider['image'] ?>" alt="Image" height="100">
                        <input type="file" class="form-control" name="userfile">
                    </div>
                    <input type="submit" value="Update Slider" class="btn btn-primary">
                    <?= form_close() ?>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div><!-- /#wrapper -->

</body>

</html>
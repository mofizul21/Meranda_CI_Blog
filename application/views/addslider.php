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
                <h1>Add Slider</h1>
            </div>

            <div class="col-md-6">
                <div class="text-danger"><?= validation_errors() ?></div>

                <?php if ($this->session->flashdata('slider_created')) {
                    echo '<div class="alert alert-success text-center">' . $this->session->flashdata('slider_created') . '</div>';
                } ?>

                <?= form_open_multipart('slider/addslider') ?>
                <div class="form-group">
                    <label for="">Title:</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Description:</label>
                    <textarea name="desc" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Link:</label>
                    <input type="text" name="link" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Image:</label>
                    <input type="file" class="form-control" name="userfile" onchange="readURL(this);">
                    <br>
                    <img id="blah" width="150" src="http://placehold.it/180" alt="Select an Image" />
                </div>
                <input type="submit" value="Add Slider" class="btn btn-primary">
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
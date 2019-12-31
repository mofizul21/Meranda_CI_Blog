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
                <h1>Update Logo and Favicon</h1>
            </div>

            <div class="col-md-6">
                <div class="text-danger"><?= validation_errors() ?></div>

                <?php if ($this->session->flashdata('logo_updated')) {
                    echo '<div class="alert alert-success text-center">' . $this->session->flashdata('logo_updated') . '</div>';
                } ?>

                <?= form_open_multipart('general/addlogo') ?>
                <div class="form-group">
                    <label for="">Logo:</label>
                    <input type="text" name="logo" class="form-control" placeholder="Logo Text">
                </div>
                <div class="form-group">
                    <label for="">Favicon:</label>
                    <input type="file" class="form-control" name="userfile" onchange="readURL(this);">
                    <br>
                    <img id="blah" width="150" src="http://placehold.it/50" alt="Select Favicon" />
                </div>
                <input type="submit" value="Update Logo and Favicon" class="btn btn-primary">
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
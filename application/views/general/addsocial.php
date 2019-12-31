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
                <h1>Update Social Links</h1>
            </div>

            <div class="col-md-6">
                <div class="text-danger"><?= validation_errors() ?></div>

                <?php if ($this->session->flashdata('social_updated')) {
                    echo '<div class="alert alert-success text-center">' . $this->session->flashdata('social_updated') . '</div>';
                } ?>

                <?= form_open('general/addsocial') ?>
                <div class="form-group">
                    <label for="">Facebook:</label>
                    <input type="text" name="facebook" class="form-control" placeholder="Facebook Link" value="https://facebook.com">
                </div>

                <div class="form-group">
                    <label for="">Twitter:</label>
                    <input type="text" name="twitter" class="form-control" placeholder="Twitter link" value="https://twitter.com">
                </div>

                <div class="form-group">
                    <label for="">Youtube:</label>
                    <input type="text" name="youtube" class="form-control" placeholder="Youtube link" value="https://youtube.com">
                </div>

                <div class="form-group">
                    <label for="">Instagram:</label>
                    <input type="text" name="instagram" class="form-control" placeholder="Instagram link" value="https://instagram.com">
                </div>

                <input type="submit" value="Update Social Links" class="btn btn-primary">
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
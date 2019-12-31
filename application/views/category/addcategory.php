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
                <div class="text-danger"><?= validation_errors() ?></div>
            </div>

            <div class="col-md-6">
                <?= validation_errors() ?>

                <?php if ($this->session->flashdata('category_created')) {
                    echo '<div class="alert alert-success text-center">' . $this->session->flashdata('category_created') . '</div>';
                } ?>

                <?= form_open('category/addcategory') ?>
                <div class="form-group">
                    <label for="">Category Name:</label>
                    <input type="text" name="category" class="form-control" placeholder="Category Name">
                </div>

                <input type="submit" value="Add Category" class="btn btn-primary">
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
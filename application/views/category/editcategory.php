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
                <div class="text-danger"><?= validation_errors() ?></div>

                <?= form_open('category/updatecategory') ?>
                <input type="hidden" name="categoryId" value="<?= $category['id'] ?>">
                <div class="form-group">
                    <label for="">Category Name:</label>
                    <input type="text" name="category" value="<?= $category['catname'] ?>" class="form-control">
                </div>
                <input type="submit" value="Update Category" class="btn btn-primary">
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
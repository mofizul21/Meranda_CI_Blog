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
                <h1>Edit Page</h1>
            </div>

            <div class="col-md-6">
                <div class="text-danger"><?= validation_errors() ?></div>

                <?php if ($this->session->flashdata('page_created')) {
                    echo '<div class="alert alert-success text-center">' . $this->session->flashdata('page_created') . '</div>';
                } ?>

                <?= form_open('page/updatepage') ?>

                    <input type="hidden" name="pageId" value="<?= $page['id'] ?>">
                    <div class="form-group">
                        <label for="">Title:</label>
                        <input type="text" name="title" class="form-control" value="<?= $page['title'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Description:</label>
                        <textarea name="desc" class="form-control" placeholder="Page body" id="editor1"><?= $page['description'] ?></textarea>
                    </div>
                    <input type="submit" value="Update Page" class="btn btn-primary">
                <?= form_close() ?>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<script>
    CKEDITOR.replace('editor1');
</script>
</body>

</html>
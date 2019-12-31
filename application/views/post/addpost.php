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
                <h1>Add Post</h1>
            </div>
        </div>

        <div class="row">

            <div class="text-danger"><?= validation_errors() ?></div>

            <?php if ($this->session->flashdata('post_created')) {
                echo '<div class="alert alert-success text-center">' . $this->session->flashdata('post_created') . '</div>';
            } ?>

            <?= form_open_multipart('post/addpost') ?>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="">Title:</label>
                    <input type="text" name="title" class="form-control" placeholder="Post title">
                </div>
                <div class="form-group">
                    <label for="">Description:</label>
                    <textarea name="desc" class="form-control" placeholder="Post body" id="editor1"></textarea>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Image:</label>
                    <input type="file" class="form-control" name="userfile" onchange="readURL(this);">
                    <br>
                    <img id="blah" width="150" src="http://placehold.it/180x100" alt="Select an Image" />
                </div>
                <div class="form-group">
                    <label for="">Category:</label>
                    <select name="category_id" id="categories" class="form-control">
                        <option value="">Select Category</option>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?= $category['id'] ?>"><?= ucfirst($category['catname']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Author:</label>
                    <input type="text" name="author" class="form-control" placeholder="Author name">
                </div>
                <input type="submit" value="Add Post" class="btn btn-primary">
            </div>
            <?= form_close() ?>
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
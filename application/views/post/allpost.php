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
                <h1>All Posts</h1>
            </div>

            <div class="col-md-12">

                <?php
                if ($this->session->flashdata('post_deleted')) {
                    echo '<div class="alert alert-success text-center">' . $this->session->flashdata('post_deleted') . '</div>';
                }

                if ($this->session->flashdata('post_updated')) {
                    echo '<div class="alert alert-success text-center">' . $this->session->flashdata('post_updated') . '</div>';
                } 
                ?>

                <table class="table table-bordered table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($posts as $post) {
                            $i++;
                        ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $post['title'] ?></td>
                                <td align="center"><img src="<?= base_url() . 'assets/images/' . $post['image'] ?>" alt="Images" height="100"></td>
                                <td><?= ucfirst($post['catname']) ?></td>
                                <td><?= $post['author'] ?></td>
                                <td style="width:20%">
                                    <div class="mform-inline">
                                        <a href="<?= base_url() ?>post/editpost/<?= $post['id'] ?>" class="btn btn-success">Edit</a>
                                        
                                        <?= form_open('post/delete/' . $post['id']) ?>
                                        <input type="submit" onclick="return confirm('Are you sure to delete?')" value="Delete" class="btn btn-danger">
                                        <?= form_close() ?>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
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
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
                <h1>Welcome Admin!</h1>
            </div>
        </div>
        <?php if ($this->session->flashdata('user_updated')) {
            echo '<div class="alert alert-success text-center">' . $this->session->flashdata('user_updated') . '</div>';
        } ?>
    </div>
</div>

</div>

</body>

</html>
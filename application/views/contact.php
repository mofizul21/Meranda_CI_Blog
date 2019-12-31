<?php $this->load->view('templates/header'); ?>


<div class="site-section bg-light">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="section-title mb-5">
                    <h2>Contact Us</h2>
                </div>
                
                <?php
                if ($this->session->flashdata("message")) {
                    echo "<div class='alert alert-success'>" . $this->session->flashdata("message") . "</div>";
                }
                ?>

                <?= form_open('contact/send') ?>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="fname" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lname" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="eaddress">Email Address</label>
                            <input type="text" id="eaddress" name="email" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="tel">Tel. Number</label>
                            <input type="text" id="tel" name="phone" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </div>

                </form>
            </div>

        </div>


    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
<?php $this->load->view('templates/header'); ?>

<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin: 0 auto; float: none">
                <div class="section-title mb-5">
                    <h2>Send mail with attachment with CodeIgniter</h2>
                </div>

                <?php
                if ($this->session->flashdata("message")) {
                    echo "<div class='alert alert-success'>" . $this->session->flashdata("message") . "</div>";
                }
                ?>

                <form action="<?= base_url() ?>sendmail/send" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name:</label>
                                <input type="text" name="name" placeholder="Enter name" class="form-control form-control-lg" required>
                            </div>
                            <div class="form-group">
                                <label for="">Address:</label>
                                <textarea name="address" class="form-control" placeholder="Enter address" required rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="email" name="email" placeholder="Enter email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Select Skills:</label>
                                <select name="programming_languages[]" class="form-control" multiple required>
                                    <option value=".NET">.NET</option>
                                    <option value="Android">Android</option>
                                    <option value="PHP">PHP</option>
                                    <option value="JAVA">JAVA</option>
                                    <option value="CSS">CSS</option>
                                    <option value="JavaScript">JavaScript</option>
                                    <option value="CodeIgniter">CodeIgniter</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Years of Experience:</label>
                                <select name="experience" class="form-control" required>
                                    <option value="01-02 Years">01-02 Years</option>
                                    <option value="03-04 Years">03-04 Years</option>
                                    <option value="05-06 Years">05-06 Years</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Mobile:</label>
                                <input type="number" name="mobile" placeholder="Enter mobile number" class="form-control form-control-lg" pattern="\d*" required>
                            </div>
                            <div class="form-group">
                                <label for="">Select Resume:</label>
                                <input type="file" name="resume" accept=".doc, .docx, .pdf" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Additional Information:</label>
                                <textarea name="additional_information" class="form-control" placeholder="Enter Additional Information" required rows="8"></textarea>
                            </div>
                            <div class="form-group" align="right">
                                <input type="submit" value="Submit" name="submit" class="btn btn-info">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
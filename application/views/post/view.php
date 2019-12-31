<?php $this->load->view('templates/header'); ?>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 single-content">

                <p class="mb-5">
                    <img src="<?= base_url() ?>assets/images/<?= $post['image'] ?>" alt="Image" class="img-fluid">
                </p>
                <h1 class="mb-4">
                    <?= $post['title'] ?>
                </h1>
                <div class="post-meta d-flex mb-5">
                    <div class="bio-pic mr-3">
                        <img src="<?= base_url() ?>assets/images/person_1.jpg" alt="Image" class="img-fluidid">
                    </div>
                    <div class="vcard">
                        <span class="d-block">Written by: <a href="#"><?= $post['author'] ?></a></span>
                        <?php
                        $word = str_word_count(strip_tags($post['description']));
                        $m = floor($word / 200);
                        $s = floor($word % 200 / (200 / 60));
                        $est = $m . ' minute' . ($m == 1 ? '' : 's') . ', ' . $s . ' second' . ($s == 1 ? '' : 's');
                        ?>
                        <span class="date-read">Posted on: <?= date("d-m-Y", strtotime($post['created_at'])) ?> <span class="mx-1">&bullet;</span> <?= $est ?> read</span>
                    </div>
                </div>

                <?= $post['description'] ?>


                <div class="pt-5">
                    <div class="section-title">
                        <h2 class="mb-5">1 Comment(s)</h2>
                    </div>
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="vcard bio">
                                <img src="<?= base_url() ?>assets/images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>
                        </li>
                    </ul>
                    <!-- END comment-list -->

                    <div class="comment-form-wrap pt-5">
                        <div class="section-title">
                            <h2 class="mb-5">Leave a comment</h2>
                        </div>

                        <?= validation_errors() ?>
                        <form action="<?= base_url() ?>post/addcomment" method="post" class="p-5 bg-light">
                            <input type="hidden" name="commentPostId" value="<?= $post['id'] ?>">

                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn btn-primary py-3">
                            </div>

                        </form>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 ml-auto">
                <div class="section-title">
                    <h2>Recent Posts</h2>
                </div>
                <?php
                $i = 0;
                foreach (array_slice($posts, 0, 4) as $postr) {
                    $i++;
                ?>
                    <div class="trend-entry d-flex">
                        <div class="number align-self-start"><?= str_pad($i, 2, 0, STR_PAD_LEFT) ?></div>
                        <div class="trend-contents">
                            <h2><a href="<?= base_url() ?>post/view/<?= $postr['slug'] ?>"><?= $postr['title'] ?></a></h2>
                            <div class="post-meta">
                                <span class="d-block"><a href="#">Writer: <?= $postr['author'] ?></a></span>
                            </div>
                        </div>
                    </div>

                <?php } ?>

                <p>
                    <a href="<?= base_url() ?>post" class="more">See All Posts <span class="icon-keyboard_arrow_right"></span></a>
                </p>
            </div>


        </div>

    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
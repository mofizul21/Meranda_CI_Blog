<?php $this->load->view('templates/header'); ?>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section-title">
                    <h2>All Posts</h2>
                </div>
                <?php
                $i = 0;
                foreach ($posts as $post) {
                    $i++;
                ?>
                    <div class="post-entry-2 d-flex">
                        <div class="thumbnail order-md-2" style="background-image: url('<?= base_url() ?>assets/images/<?= $post['image'] ?>')"></div>
                        <div class="contents order-md-1 pl-0">
                            <h2><a href="<?= base_url() . "post/view/" . $post['slug'] ?>"><?= $post['title'] ?></a></h2>
                            <p class="mb-3"><?= word_limiter($post['title'], 20) ?></p>
                            <div class="post-meta">
                                <span class="d-block"><a href="#"><?= $post['author'] ?></a></span>
                                <?php
                                $word = str_word_count(strip_tags($post['description']));
                                $m = floor($word / 200);
                                $s = floor($word % 200 / (200 / 60));
                                $est = $m . ' minute' . ($m == 1 ? '' : 's') . ', ' . $s . ' second' . ($s == 1 ? '' : 's');
                                ?>
                                <span class="date-read">Posted on: <?= date("d-m-Y", strtotime($post['created_at'])) ?> <span class="mx-1">&bullet;</span> <?= $est ?> read</span>
                            </div>
                        </div>
                    </div>
                <?php } ?>

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
            </div>
            <ul class="pagination">
                <?= $this->pagination->create_links(); ?>
            </ul>
        </div>

    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
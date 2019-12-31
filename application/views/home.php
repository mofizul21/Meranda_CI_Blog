<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/slider'); ?>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Politics</h2>
                </div>
                <?php foreach ($posts_by_id3 as $post_by_id) : ?>
                    <div class="post-entry-2 d-flex">
                        <div class="thumbnail" style="background-image: url('<?= base_url() ?>assets/images/<?= $post_by_id['image'] ?>')"></div>
                        <div class="contents">
                            <h2><a href="<?= base_url() ?>post/view/<?= $post_by_id['slug'] ?>"><?= $post_by_id['title'] ?></a></h2>
                            <p class="mb-3"><?= word_limiter($post_by_id['description'], 20) ?></p>
                            <div class="post-meta">
                                <span class="d-block">Written by: <a href="#"><?= $post_by_id['author'] ?></a></span>
                                <span class="date-read">Posted on: <?= date("d-m-Y", strtotime($post_by_id['created_at'])) ?>
                                    <?php
                                    $word = str_word_count(strip_tags($post_by_id['description']));
                                    $m = floor($word / 200);
                                    $s = floor($word % 200 / (200 / 60));
                                    $est = $m . ' minute' . ($m == 1 ? '' : 's') . ', ' . $s . ' second' . ($s == 1 ? '' : 's');
                                    ?>
                                    <span class="mx-1">&bullet;</span> <?= $est ?> read
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Business</h2>
                </div>
                <?php foreach ($posts_by_id6 as $post_by_id) : ?>
                    <div class="post-entry-2 d-flex">
                        <div class="thumbnail" style="background-image: url('<?= base_url() ?>assets/images/<?= $post_by_id['image'] ?>')"></div>
                        <div class="contents">
                            <h2><a href="<?= base_url() ?>post/view/<?= $post_by_id['slug'] ?>"><?= $post_by_id['title'] ?></a></h2>
                            <p class="mb-3"><?= word_limiter($post_by_id['description'], 20) ?></p>
                            <div class="post-meta">
                                <span class="d-block">Written by: <a href="#"><?= $post_by_id['author'] ?></a></span>
                                <span class="date-read">Posted on: <?= date("d-m-Y", strtotime($post_by_id['created_at'])) ?>
                                    <?php
                                    $word = str_word_count(strip_tags($post_by_id['description']));
                                    $m = floor($word / 200);
                                    $s = floor($word % 200 / (200 / 60));
                                    $est = $m . ' minute' . ($m == 1 ? '' : 's') . ', ' . $s . ' second' . ($s == 1 ? '' : 's');
                                    ?>
                                    <span class="mx-1">&bullet;</span> <?= $est ?> to read
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
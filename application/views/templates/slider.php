<div class="site-section py-0">
    <div class="owl-carousel hero-slide owl-style">
        <?php foreach ($sliders as $slider) : ?>
            <div class="site-section">
                <div class="container">
                    <div class="half-post-entry d-block d-lg-flex bg-light">
                        <div class="img-bg" style="background-image: url('assets/images/<?= $slider['image'] ?>')"></div>
                        <div class="contents">
                            <h2><?= $slider['title'] ?></h2>
                            <p class="mb-3"><?= $slider['description'] ?></p>
                            <div class="post-meta">
                                <a href="<?= $slider['link'] ?>" class="btn btn-success rmore">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>

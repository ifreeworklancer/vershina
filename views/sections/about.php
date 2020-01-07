<!-- About -->
<section id="about">
    <div class="container-fluid px-lg-0">
        <div class="row justify-content-between mx-lg-0">
            <div class="col-sm-9 col-md-8 col-lg-5 col-xl-4 mx-auto">
                <div class="about-item">
                    <h2 class="about-item__title">
                        <?= $about['title']; ?>
                    </h2>
                    <div class="about-item__description">
                        <?= $about['description']; ?>
                    </div>
                    <a href="#" class="link-more link-more--dark">
                        <span>
                            больше информации
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 px-0">
                <div class="about-slider">
                    <?php foreach ($about['gallery'] as $item) : ?>
                        <div class="about-slider-item" style="background-image: url(<?= $item['image']; ?>);">
                            <div class="about-slider-item__description">
                                <p>
                                    <?= $item['description']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="about-slider-footer">
                        <div class="slider-arrow slider-arrow--about">
                            <div class="slider-arrow-item slider-arrow-item--prev">
                                <svg width="10" height="18">
                                    <use xlink:href="#arrow-prev"></use>
                                </svg>
                            </div>
                            <div class="slider-arrow-item slider-arrow-item--next">
                                <svg width="10" height="18">
                                    <use xlink:href="#arrow-next"></use>
                                </svg>
                            </div>
                        </div>
                        <a href="#" class="link-more link-more--white">
                <span>
                    перейти в фотогалерею
                </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="decor-image d-none d-lg-block"></div>
</section>
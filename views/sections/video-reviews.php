<!-- Video reviews -->
<section id="video-reviews">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-11">
                <div class="reviews-slider">
                    <?php
                    foreach ($video_reviews['gallery'] as $item) :
                        $video_link = $item['video_link'];
                        ?>
                        <div class="reviews-slider-item">
                            <div class="reviews-item">
                                <div class="reviews-item-body order-2 order-md-1">
                                    <h2 class="reviews-item__title">
                                        <?= $item['title']; ?>
                                    </h2>
                                </div>
                                <div class="reviews-item-prev order-1 order-md-2">
                                    <figure class="reviews-item__image"
                                            style="background-image: url('<?= getVideoImageLinkAttribute($video_link); ?>');"
                                            data-youtube="<?= getVideoLinkAttribute($video_link); ?>">
                                        <div class="video-play">
                                            <svg width="37" height="33">
                                                <use xlink:href="#video-icon"></use>
                                            </svg>
                                            смотреть видео
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="slider-arrow slider-arrow--reviews d-flex d-md-none">
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
                </div>
                <div class="reviews-slider-navfor">
                    <?php
                    foreach ($video_reviews['gallery'] as $item) :
                        $video_link = $item['video_link'];
                        ?>
                        <div class="reviews-slider-navfor-item">
                            <div class="reviews-item">
                                <div class="reviews-item-prev">
                                    <figure class="reviews-item__image"
                                            style="background-image: url('<?= getVideoImageLinkAttribute($video_link); ?>');">
                                    </figure>
                                </div>
                                <div class="reviews-item-body">
                                    <h6 class="reviews-item__title">
                                        <?= $item['title']; ?>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="slider-arrow slider-arrow--reviews">
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
                </div>
            </div>
            <div class="col-12 text-center">
                <a href="#" class="link-more link-more--white">
                    <span>
                        перейти в видеогалерея
                    </span>
                </a>
            </div>
        </div>
    </div>
    <img src="../../images/icons/logo-darkness.png" alt="logo" class="decor-image">
</section>
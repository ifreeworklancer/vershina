<!-- Filmography -->
<section id="filmography">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center">
                    <?= $filmography['title']; ?>
                </h2>
                <div class="filmography-slider">
                    <?php foreach ($filmography['items'] as $item) : ?>
                        <div class="filmography-slider-item">
                            <div class="filmography-item">
                                <div class="filmography-item-prev">
                                    <img src="<?= $item['image']; ?>" alt="film" class="filmography-item__image">
                                </div>
                                <div class="filmography-item-body">
                                    <div class="custom-badges">
                                        <div class="custom-badges-item">
                                            <?= $item['date']; ?>
                                        </div>
                                    </div>
                                    <h4 class="filmography-item__title">
                                        <?= $item['title']; ?>
                                    </h4>
                                    <p class="filmography-item__description">
                                        <?= $item['description']; ?>
                                    </p>
                                    <ul class="filmography-item__info">
                                        <?php foreach ($item['info'] as $val) : ?>
                                            <li>
                                                <span><?= $val['property']; ?></span>
                                                <span><?= $val['value']; ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="slider-arrow slider-arrow--filmography">
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
                <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center">
                    <a href="#" class="btn btn-outline-primary mb-4 mb-sm-0 mr-sm-5 open-sponsor">
                        Стать спонсором
                    </a>
                    <a href="#" class="link-more link-more--white">
                        <span>
                            перейти в фильмографию
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
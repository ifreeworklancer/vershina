<!-- Awards -->
<section id="awards">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="section-title text-center">
                    <?= $awards['title']; ?>
                </h2>
            </div>
            <?php foreach ($awards['items'] as $item) : ?>
                <div class="col-sm-7 col-md-6 col-lg-4">
                    <div class="awards-item">
                        <div class="awards-item-prev">
                            <img src="<?= $item['image']; ?>" alt="awards" class="awards-item__image">
                        </div>
                        <div class="awards-item__description">
                            <?= $item['description']; ?>
                        </div>
                        <div class="awards-item__info">
                            <?= $item['info']; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="col-12 text-center mt-sm-4">
                <a href="#" class="link-more link-more--dark">
                    <span>
                        больше наград
                    </span>
                </a>
            </div>
        </div>
    </div>
    <img src="../../images/icons/logo-gray.png" alt="logo" class="decor-image">
</section>
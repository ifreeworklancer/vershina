<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page description -->
    <section id="page-description">
        <h1 class="page-description__title">
            <svg width="13" height="24">
                <use xlink:href="#arrow-prev"></use>
            </svg>
            <?= $filmography['title']; ?>
        </h1>
        <img src="../images/icons/logo-darken.png" alt="logo" class="decor-image">
    </section>

    <!-- Page filmography -->
    <section id="page-filmography" class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php foreach ($filmography['items'] as $item) : ?>
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
                                <ul class="filmography-item__info mb-4">
                                    <?php foreach ($item['info'] as $val) : ?>
                                        <li>
                                            <span><?= $val['property']; ?></span>
                                            <span><?= $val['value']; ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <a href="#" class="btn btn-outline-primary"
                                   data-youtube="<?= getVideoLinkAttribute($item['video_link'])?>">
                                    Смотреть эпизоды
                                    <div class="play-icon"></div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="text-center mt-5">
                        <a href="#" class="link-more link-more--white">
                            Показать еще
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-footer-nav">
                        <li class="this-page">
                            <a href="../page/page-about.php">
                                Обо мне
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Фильмография
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Команда
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Фотогалерея
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Видеогалерея
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/base/footer.php');
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
            <?= $page_gallery['title']; ?>
        </h1>
        <img src="../images/icons/logo-darken.png" alt="logo" class="decor-image">
    </section>

    <!-- Page gallery -->
    <section id="page-gallery" class="page-content">
        <div class="container">
            <div class="row no-gutters">
                <?php foreach ($page_gallery['items'] as $item) : ?>
                    <div class="col-sm-6">
                        <div class="gallery-item gallery-item--video"
                             style="background-image: url('<?= getVideoImageLinkAttribute($item); ?>');"
                             data-youtube="<?= getVideoLinkAttribute($item); ?>">
                            <div class="video-play">
                                <svg width="37" height="33">
                                    <use xlink:href="#video-icon"></use>
                                </svg>
                                смотреть видео
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="col-12 mt-5 text-center">
                    <a href="#" class="link-more link-more--white">
                        Показать еще
                    </a>
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
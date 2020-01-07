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
            <?= $page_about['title']; ?>
        </h1>
        <img src="../images/icons/logo-darken.png" alt="logo" class="decor-image">
    </section>

    <!-- Page About -->
    <section class="page-intro">
        <div class="container h-100">
            <div class="row justify-content-center justify-content-lg-between align-items-center h-100">
                <div class="col-lg-5 d-flex align-items-end h-100 order-2 order-lg-1">
                    <figure style="background-image: url('<?= $page_about['intro']['image']; ?>');"
                            class="page-intro__image">
                </div>
                <div class="col-sm-10 col-lg-6 order-1 order-lg-2">
                    <div class="page-intro-item mb-5 mb-lg-0">
                        <h3 class="page-intro__title">
                            <?= $page_about['intro']['title']; ?>
                        </h3>
                        <div class="page-intro__description">
                            <?= $page_about['intro']['description']; ?>
                        </div>
                        <a href="#" class="btn btn-outline-primary open-sponsor">
                            Стать спонсором
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-advantages">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-9 col-xl-3 text-center text-xl-left">
                    <h3 class="section-title text-dark mb-4 mb-xl-0">
                        <?= $page_about['advantages']['title']; ?>
                    </h3>
                </div>
                <?php foreach ($page_about['advantages']['items'] as $item) : ?>
                    <div class="col-sm-7 col-md-6 col-lg-4 col-xl-3">
                        <div class="about-advantages-item">
                            <div class="about-advantages-item__value" data-counter-value="<?= $item['value'] ?>">
                                0
                            </div>
                            <div class="about-advantages-item__title">
                                <?= $item['title']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="about-info">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-start">
                <div class="col-sm-10 col-md-8 col-lg-5 order-2 order-lg-1">
                    <div class="about-info-item">
                        <h2 class="about-info-item__title text-dark">
                            <?= $page_about['info']['title']; ?>
                        </h2>
                        <div class="about-info-item__description">
                            <?= $page_about['info']['description']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-6 order-1 order-lg-2">
                    <img src="<?= $page_about['info']['image'] ?>" alt="about image" class="about-info-image">
                    <img src="../images/icons/page-about-decor.png" alt="decor" class="decor-image">
                </div>
            </div>
        </div>
    </section>

    <section id="about-frame">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <h2 class="section-title text-center text-dark mb-5">
                        <?= $page_about['frames']['title']; ?>
                    </h2>
                    <div class="frame-slider-wrapper">
                        <div class="frame-slider">
                            <?php foreach ($page_about['frames']['gallery'] as $item): ?>
                                <div class="frame-slider-item">
                                    <figure class="frame-slider-item__image"
                                            style="background-image: url('<?= $item; ?>');"></figure>
                                </div>
                            <?php endforeach; ?>
                        </div>
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
                            <a href="../../page/page-about.php">
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
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
            <?= $page_contacts['title']; ?>
        </h1>
        <img src="../images/icons/logo-darken.png" alt="logo" class="decor-image">
    </section>

    <!-- Page Team -->
    <section class="page-intro">
        <div class="container h-100">
            <div class="row justify-content-center justify-content-lg-between align-items-center h-100">
                <div class="col-lg-5 d-flex align-items-end h-100 order-2 order-lg-1">
                    <figure style="background-image: url('<?= $page_contacts['intro']['image']; ?>');"
                            class="page-intro__image">
                </div>
                <div class="col-sm-10 col-lg-6 order-1 order-lg-2">
                    <div class="page-intro-item mb-5 mb-lg-0">
                        <h3 class="page-intro__title text-primary">
                            <?= $page_contacts['intro']['title']; ?>
                        </h3>
                        <div class="page-intro__description">
                            <?= $page_contacts['intro']['description']; ?>
                            <ul class="contacts-list">
                                <li>
                                    <span>
                                        email
                                    </span>
                                    <a href="mailto:<?= $email; ?>">
                                        <?= $email; ?>
                                    </a>
                                </li>
                                <li>
                                    <span>
                                        телефон
                                    </span>
                                    <a href="tel:<?= phone_link($phone); ?>">
                                        <?= $phone; ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="page-intro-footer flex-column flex-xl-row d-flex justify-content-between align-items-start align-items-xl-center">
                            Или заполните форму, нажав на кнопку “Связаться”
                            <a href="#" class="btn btn-outline-primary open-sponsor mt-4 mt-xl-0 ml-xl-2">
                                Стать спонсором
                            </a>
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
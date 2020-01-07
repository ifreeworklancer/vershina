<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>
    <link rel="stylesheet" href="../dist/app.css">
</head>

<body>

<!-- Svg -->
<?php include(__DIR__ . '/../modules/svgs.php'); ?>

<!-- App-header -->
<header id="app-header">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <a href="/" class="logo">
                    <img src="<?= $logo; ?>" alt="logo">
                </a>
            </div>
            <div class="col-auto">
                <nav class="header-nav d-none d-lg-flex align-items-center">
                    <ul class="header-nav-list">
                        <li>
                            <a href="../../page/page-about.php">
                                Обо мне
                            </a>
                        </li>
                        <li>
                            <a href="../../page/page-filmography.php">
                                Фильмография
                            </a>
                        </li>
                        <li>
                            <a href="../../page/page-team.php">
                                Команда
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Галерея
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="../../page/page-photo-gallery.php">
                                        Фотогалерея
                                    </a>
                                </li>
                                <li>
                                    <a href="../../page/page-video-gallery.php">
                                        Видеогалерея
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../../page/page-contacts.php">
                                Контакты
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-outline-primary open-contact">
                        Связаться
                    </a>
                </nav>
                <div class="burger-menu d-lg-none">
                    <div class="line line--top"></div>
                    <div class="line line--middle"></div>
                    <div class="line line--bottom"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="menu-header">
            <ul class="social-list">
                <li>
                    <a href="<?= $facebook; ?>">
                        <svg width="15" height="15">
                            <use xlink:href="#facebook-icon"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="<?= $instagram; ?>">
                        <svg width="15" height="15">
                            <use xlink:href="#instagram-icon"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <nav class="header-nav">
            <ul class="header-nav-list">
                <li>
                    <a href="../../page/page-about.php">
                        Обо мне
                    </a>
                </li>
                <li>
                    <a href="../../page/page-filmography.php">
                        Фильмография
                    </a>
                </li>
                <li>
                    <a href="../../page/page-team.php">
                        Команда
                    </a>
                </li>
                <li>
                    <a href="#">
                        Галерея
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="../../page/page-photo-gallery.php">
                                Фотогалерея
                            </a>
                        </li>
                        <li>
                            <a href="../../page/page-video-gallery.php">
                                Видеогалерея
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../../page/page-contacts.php">
                        Контакты
                    </a>
                </li>
            </ul>
            <a href="#" class="btn btn-outline-primary open-contact">
                Связаться
            </a>
        </nav>
    </div>
</header>

<!-- Modal -->
<?php include(__DIR__ . '/../modules/modal.php'); ?>

<!-- Main -->
<main>
<!-- Intro -->
<section id="intro">
    <div class="container h-100">
        <div class="row h-100 justify-content-center justify-content-lg-end align-items-center">
            <div class="col-sm-10 col-lg-7">
                <div class="intro-item mb-5 mb-lg-0">
                    <h3 class="intro-item__title">
                        <?= $intro['title']; ?>
                    </h3>
                    <div class="intro-item__logo">
                        <img src="<?= $logo; ?>" alt="logo">
                    </div>
                    <div class="intro-item-description">
                        <?= $intro['description']; ?>
                    </div>
                    <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
                        <a href="../../page/page-about.php" class="link-more link-more--primary mb-4 mb-sm-0 mr-sm-5">
                            <span>
                                узнать больше
                            </span>
                        </a>
                        <a href="#" class="btn btn-outline-primary open-sponsor">
                            Стать спонсором
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-prev">
        <img src="<?= $intro['image']; ?>" alt="intro">
    </div>
    <div class="intro-footer d-none d-lg-flex justify-content-end align-items-center">
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
</section>
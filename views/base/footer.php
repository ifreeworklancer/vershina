</main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="container-fluid">
        <div class="row justify-content-center justify-content-md-between align-items-center">
            <div class="col-sm-auto mb-2 mb-md-0 text-center text-md-left">
                <div class="footer-copyright">
                    &copy; <?= date('Y'); ?> Все права защищены.
                </div>
            </div>
            <div class="col-sm-auto d-flex flex-column flex-sm-row justify-content-center justify-content-sm-start align-items-center">
                <ul class="contacts-list mb-2 mb-sm-0 mr-sm-3">
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
                <ul class="social-list social-list--darkness">
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
        </div>
    </div>
</footer>

<!-- Script -->
<script src="../dist/app.js"></script>
</body>

</html>
</main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-lg-5 order-2 order-sm-1">
                <ul class="contacts-list">
                    <li class="contacts-list-item contacts-list-item--phone">
                        <a href="tel:<?= phone_link($phone); ?>">
                            <svg width="20" height="20">
                                <use xlink:href="#phone-icon"></use>
                            </svg>
                            <?= $phone; ?>
                        </a>
                    </li>
                    <li class="contacts-list-item contacts-list-item--email">
                        <a href="mailto:<?= $email;?>">
                            <svg width="20" height="20">
                                <use xlink:href="#mail-icon"></use>
                            </svg>
                            <?= $email;?>
                        </a>
                    </li>
                </ul>
                <div class="copyring">
                    <div class="copyright">
                        © 2017-<?= date("Y") ?> Ditex. All rights reserved
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-6 d-flex flex-column flex-xl-row justify-content-between align-items-start order-1 order-sm-2">
                <div class="footer-item">
                    <div class="footer-item-title">
                        Остались вопросы?
                    </div>
                    <div class="footer-item-subtitle">
                        Мы с радостью ответим на них
                    </div>
                </div>
                <a href="#" class="btn btn-primary open-quest">
                    Написать нам
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<script src="dist/app.js"></script>
</body>

</html>
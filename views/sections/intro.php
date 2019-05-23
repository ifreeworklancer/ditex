<!-- Intro -->
<section id="intro">
    <div class="container h-100 position-relative">
        <div class="row h-100 align-items-center">
            <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                <div class="intro-item">
                    <div class="intro-item-image">
                        <img src="<?= $intro['logo']; ?>" alt="logo">
                    </div>
                    <div class="intro-item-description">
                        <p>
                            <?= $intro['description'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="quote">
            <div class="quote-icon">
                <svg width="70" height="60">
                    <use xlink:href="#quote-icon"></use>
                </svg>
            </div>
            <p class="quote-text">
                <?= $intro['quote_text'] ?>
            </p>
        </div>
        <a href="#advantages" class="scroll-down scroll-link">
            <div class="scroll-down-icon"></div>
            <div class="scroll-down-text">
                детальнее
            </div>
        </a>
        <ul class="social-list">
            <li>
                <a href="tg://resolve<?= $social_link['telegram'] ?>">
                    <svg width="22" height="22">
                        <use xlink:href="#telegram-icon"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="<?= $social_link['twitter'] ?>">
                    <svg width="22" height="22">
                        <use xlink:href="#twitter-icon"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="tg://resolve<?= $social_link['telegram'] ?>">
                    <svg width="22" height="22">
                        <use xlink:href="#telegram-icon"></use>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</section>

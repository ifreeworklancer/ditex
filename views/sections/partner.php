<!-- Partner -->
<section id="partner">
    <div class="container">
        <div class="row justify-content-between justify-content-xl-center align-items-center">
            <div class="col-sm-6 col-lg-5">
                <div class="partner-image">
                    <img src="<?= $partner['image']; ?>" alt="">
                </div>
            </div>
            <div class="col-sm-6 pr-sm-0">
                <div class="partner-item">
                    <h2 class="partner-item-title">
                        <?= $partner['title']; ?>
                    </h2>
                    <div class="partner-item-description">
                        <?= $partner['description']?>
                    </div>
                    <a href="#" class="btn btn-primary open-partner">
                        <?= $rest_text['become_a_partner']; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
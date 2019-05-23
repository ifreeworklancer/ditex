<!-- About -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-7 col-xl-6">
                <div class="about-item">
                    <h2 class="about-item-title">
                        <?= $about['title']; ?>
                    </h2>
                    <div class="about-item-description">
                        <?= $about['description']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-image">
        <img src="<?= $about['image']; ?>" alt="about image">
    </div>
</section>
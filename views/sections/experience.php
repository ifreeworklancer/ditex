<!-- Experience -->
<section id="experience">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-6">
                <div class="experience-item">
                    <h2 class="experience-item-title">
                        <?= $experience['title']; ?>
                    </h2>
                    <div class="experience-item-description">
                        <?= $experience['description']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="experience-image">
        <img src="<?= $experience['image']; ?>" alt="experience image">
    </div>
</section>
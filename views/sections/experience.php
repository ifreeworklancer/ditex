<!-- Experience -->
<section id="experience">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-lg-5">
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
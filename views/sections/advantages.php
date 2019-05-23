<!-- Advantages -->
<section id="advantages">
    <div class="container px-sm-0">
        <div class="row">
            <?php foreach ($advantages['item'] as $item) : ?>
                <div class="col-sm-6 col-lg-3">
                    <div class="advantages-item">
                        <div class="advantages-item-image"
                             style="background-image:url('<?= $item['image']; ?>');"></div>
                        <div class="advantages-item-description">
                            <p>
                                <?= $item['description']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
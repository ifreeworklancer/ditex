<!-- Target -->
<section id="target">
    <div class="container">
        <div class="row no-gutters justify-content-center align-items-center">
            <div class="col-sm-6">
                <div class="target-item target-item-main">
                    <div class="target-item-image target-item-image--first">
                        <img src="<?= $target['image_target']; ?>" alt="target image">
                    </div>
                    <div class="target-item-image target-item-image--second">
                        <img src="<?= $target['image_dart']; ?>" alt="dart image">
                    </div>
                    <h3 class="target-item-title">
                        <?= $target['title_first_block']; ?>
                    </h3>
                    <div class="target-item-description">
                        <?= $target['description_first_block']; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 px-3 px-sm-0">
                <div class="target-item target-item-secondary">
                    <div class="target-item-image"
                         style="background-image: url('<?= $target['image_arrow']; ?>');"></div>
                    <div class="target-item-description">
                        <?= $target['description_second_block']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
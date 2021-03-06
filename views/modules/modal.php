<div class="custom-modal custom-modal--partner">
    <div class="close-modal">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
    <div class="custom-modal-main">
        <h3 class="custom-modal-main-title">
            <?= $modal_partner['title']; ?>
        </h3>
        <div class="custom-modal-main-description">
            <p>
                <?= $modal_partner['description']; ?>
            </p>
        </div>
        <form action="#" class="form-partner">
            <div class="form-column">
                <div class="form-group">
                    <input type="text" id="user-name--partner" name="user_name__partner" class="form-control"
                           placeholder="<?= $modal_partner['placeholder_name']; ?>">
                </div>
                <div class="form-group">
                    <input type="tel" id="user-phone--partner" name="user_phone__partner" class="form-control"
                           placeholder="<?= $modal_partner['placeholder_phone']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">
                    <?= $modal_partner['submit_btn']; ?>
                </button>
            </div>
        </form>
    </div>
    <div class="custom-modal-image">
        <img src="../../images/content/modal/modal-1.png" alt="">
    </div>
</div>

<div class="custom-modal custom-modal--quest">
    <div class="close-modal">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
    <div class="custom-modal-main">
        <h3 class="custom-modal-main-title">
            <?= $modal_quest['title']; ?>
        </h3>
        <div class="custom-modal-main-description">
            <p>
                <?= $modal_quest['description']; ?>
            </p>
        </div>
        <form action="#" class="form-quest">
            <div class="form-column">
                <div class="form-group">
                    <input type="text" id="user-email--quest" name="user_email__quest" class="form-control"
                           placeholder="Email"><!-- Add class is-error -->
                    <!--                    <span class="error-text">-->
                    <!--                        Неверный формат e-mail, проверьте еще раз введенные данные-->
                    <!--                    </span>-->
                </div>
                <div class="form-group">
                    <textarea id="user-phone--quest" name="user_phone__quest"
                              class="form-control form-control--textarea"
                              placeholder="<?= $modal_quest['placeholder_message']; ?>" cols="3" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">
                    <?= $modal_quest['submit_btn']; ?>
                </button>
            </div>
        </form>
    </div>
    <div class="custom-modal-image">
        <img src="../../images/content/modal/modal-1.png" alt="">
    </div>
</div>

<div class="modal-mask"></div>
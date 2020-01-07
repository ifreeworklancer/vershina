<?php
$user_name = generateRandomString(5);
$user_phone = generateRandomString(5);
$user_email = generateRandomString(5);
$user_message = generateRandomString(5);
?>

<div class="custom-modal custom-modal--contact" style="background-image: url('../../images/bg/modal-contact-bg.jpg');">
    <div class="close-modal">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
    <div class="text-center">
        <h3 class="custom-modal__title">
            Свяжитесь со мной
        </h3>
    </div>
    <form>
        <div class="row mx-sm-0">
            <div class="col-sm mb-3 pl-sm-0 pr-sm-2">
                <div class="form-group">
                    <label for="<?= $user_name; ?>-contact">
                        Ваше имя
                    </label>
                    <input type="text" name="name-contact" id="<?= $user_name; ?>-contact" class="form-control"
                           placeholder="Александр">
                </div>
                <div class="form-group">
                    <label for="<?= $user_phone; ?>-contact">
                        Номер телефона
                    </label>
                    <input type="tel" name="phone-contact" id="<?= $user_phone; ?>-contact" class="form-control"
                           placeholder="+380 99 123 456 78">
                </div>
                <div class="form-group mb-0">
                    <label for="<?= $user_email; ?>-contact">
                        Email
                    </label>
                    <input type="email" name="email-contact" id="<?= $user_email; ?>-contact" class="form-control"
                           placeholder="user@gmail.com">
                </div>
            </div>
            <div class="col-sm mb-3 pr-sm-0 pl-sm-2">
                <div class="form-group d-flex flex-column h-100 mb-0">
                    <label for="<?= $user_message; ?>-contact">
                        Ваше сообщение (не обязательно)
                    </label>
                    <textarea name="message-contact" id="<?= $user_message; ?>-contact"
                              class="form-control flex-grow-1"
                              placeholder="текст сообщения"></textarea>
                </div>
            </div>
            <div class="col-12 px-sm-0">
                <button class="btn btn-outline-primary w-100">
                    Связаться
                </button>
            </div>
        </div>
    </form>
</div>

<div class="custom-modal custom-modal--sponsor" style="background-image: url('../../images/bg/modal-sponsor-bg.jpg');">
    <div class="close-modal">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
    <div class="text-center">
        <h3 class="custom-modal__title mb-3">
            Хотите стать спонсором?
        </h3>
        <div class="custom-modal__description">
            Текстовый блок-пояснение о спонсорском сотрудничестве
        </div>
    </div>
    <form>
        <div class="row mx-sm-0">
            <div class="col-sm mb-3 pl-sm-0 pr-sm-2">
                <div class="form-group">
                    <label for="<?= $user_name; ?>-sponsor">
                        Ваше имя
                    </label>
                    <input type="text" name="name-sponsor" id="<?= $user_name; ?>-sponsor" class="form-control"
                           placeholder="Александр">
                </div>
                <div class="form-group">
                    <label for="<?= $user_phone; ?>-sponsor">
                        Номер телефона
                    </label>
                    <input type="tel" name="phone-sponsor" id="<?= $user_phone; ?>-sponsor" class="form-control"
                           placeholder="+380 99 123 456 78">
                </div>
                <div class="form-group mb-0">
                    <label for="<?= $user_email; ?>-sponsor">
                        Email
                    </label>
                    <input type="email" name="email-sponsor" id="<?= $user_email; ?>-sponsor" class="form-control"
                           placeholder="user@gmail.com">
                </div>
            </div>
            <div class="col-sm mb-3 pr-sm-0 pl-sm-2">
                <div class="form-group d-flex flex-column h-100 mb-0">
                    <label for="<?= $user_message; ?>-sponsor">
                        Ваше сообщение (не обязательно)
                    </label>
                    <textarea name="message-contact" id="<?= $user_message; ?>-sponsor"
                              class="form-control flex-grow-1"
                              placeholder="текст сообщения"></textarea>
                </div>
            </div>
            <div class="col-12 px-sm-0">
                <button class="btn btn-outline-primary w-100">
                    Связаться
                </button>
            </div>
        </div>
    </form>
</div>

<div class="modal-mask"></div>
<form class="form-main form">
    <div class="form-main__items form__items">
        <div class="form-main__item form__item-middle">
            <div class="form-main__item-box">
                <span class="form__text">
                    <span class="form__required-field">*</span> Arbeitstyp <span class="form__tippy" data-tippy-content="Bitte wählen Sie die geforderte Art der Arbeit aus – Sie können dazu die Suchleiste verwenden."></span>
                </span>
                <?php echo get_template_part('parts/blocks/type-select') ?>
            </div>
            <span class="form__text">
                <span class="form__required-field">*</span> Farhrichtung <span class="form__tippy" data-tippy-content="Wählen Sie bitte die Fachrichtung Ihrer Arbeit aus. Wenn keine Fachrichtung passend ist, wählen Sie „Andere Fachrichtung” Je mehrere Informationen Sie eingeben, desto besser."></span>
            </span>
            <?php echo get_template_part('parts/blocks/fach-select') ?>
        </div>
        <div class="form-main__item form__item-middle">
            <span class="form__text">
                <span class="form__required-field">*</span> Thema der Arbeit <span class="form__tippy" data-tippy-content="Das ist Thema Ihrer Arbeit. Das ist sehr wichtig, Ihr Thema jetzt richtig zu schreiben."></span>
            </span>
            <textarea class="form-main__input form-main__terxtarea form-main__theme input" name="theme" placeholder="Thema der Arbeit..." required></textarea>
        </div>
        <div class="form-main__item form__item-middle">
            <span class="form__text">
                Zittirweise
            </span>
            <?php echo get_template_part('parts/blocks/zittirweise-select') ?>
        </div>
        <div class="form-main__item form__item-middle">
            <span class="form__text">
                <span class="form__required-field">*</span> Qualität <span class="form__tippy" data-tippy-content="Ist Ihnen der wissenschaftliche Grad des Autors wichtig, der Ihre Arbeit schreiben wird?"></span>
            </span>
            <?php echo get_template_part('parts/blocks/qualitat-select') ?>
        </div>
        <div class="form-main__item form__item-little">
            <span class="form__text">
                <span class="form__required-field">*</span> Seitenanzahl
            </span>
            <div class="form-counter">
                <div data-id="decrement" class="counter-btn">-</div>
                <input class="count-input input" name="number" type="number" value="30" max="1000" min="0" step="1" />
                <div data-id="increment" class="counter-btn">+</div>
            </div>
        </div>
        <div class="form-main__item form__item-little">
            <span class="form__text">
                <span class="form__required-field">*</span> Liefertermin
            </span>
            <label class="form__date-custom">
                <input class="form-main__input date-input input" name="deadline" type="text" placeholder="<?php echo date("d.m.Y"); ?>" onfocus="(this.value='<?php echo date('d.m.Y'); ?>')" readonly required>
            </label>
        </div>
        <div class="form-main__item form__item-little">
            <span class="form__text">
                Promocode
            </span>
            <input class="form-main__input input" name="promocode" type="text" placeholder="Promocode">
        </div>
        <div class="form-main__item form__item-middle">
            <span class="form__text">
                Name
            </span>
            <input class="form-main__input input" name="name" type="text" placeholder="Name">
        </div>
        <div class="form-main__item form__item-middle">
            <span class="form__text">
                <span class="form__required-field">*</span> E-mail <span class="form__tippy " data-tippy-content="Bitte geben Sie Ihre echte E-Mail-Adresse an, damit wir die höchste Qualität Ihrer Arbeit sicherstellen können."></span>
            </span>
            <input class="form-main__input input" name="email" type="mail" placeholder="E-mail..." required>
        </div>
        <div class="form-main__item form__item-middle">
            <span class="form__text">
                <span class="form__required-field">*</span> Phone <span class="form__tippy" data-tippy-content="Erfahrungsgemäß lassen sich viele Fragen am besten telefonisch klären. Falls Sie einen Rückruf wünschen, geben Sie bitte hier Ihre Telefonummer an"></span>
            </span>
            <input class="form-main__input phone-input input" name="phone" type="tel" required>
        </div>
        <div class="form-main__item form__item-middle">
            <span class="form__text">
                Ihre Verfügbarkeit
            </span>
            <?php echo get_template_part('parts/blocks/ihre-select') ?>
        </div>
        <div class="form-main__item form__item-full">
            <div class="form-main__item-box">
                <span class="form__text">
                    Kommentieren <span class="form__tippy" data-tippy-content="Das ist Thema Ihrer Arbeit. Das ist sehr wichtig, Ihr Thema jetzt richtig zu schreiben."></span>
                </span>
                <textarea class="form-main__input form-main__terxtarea form-main__komment input" name="kommentieren" placeholder="Kommentieren"></textarea>
            </div>
        </div>
    </div>
    <input class="form-main__btn btn" type="submit" value="DAS FORMULARabschicken">
    <p class="form-main__text-protect">
        Die Hinweise aus der <span>Datenschutzerklärung</span> und den <span>AGB</span> habe ich gelesen und akzeptiere diese.
    </p>
</form>
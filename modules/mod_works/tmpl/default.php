<section id="work">
    <div class="work<?= $params->get('moduleclass_sfx') ?>">
        <p class="button_work">
            <a href="<?= JRoute::_('index.php?Itemid=' . $menu) ?>">
                <?php if ($icon) : ?>
                    <img src="<?= $icon ?>">
                <?php endif ?>
                <span class="text_button"><?= $button ?></span>
            </a>
        </p>
    </div>
</section>
<script type="text/javascript" src="<?= JURI::base(true) ?>/modules/mod_Works/assets/js/scripts.js"></script>
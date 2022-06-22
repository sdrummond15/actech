<div id="contact-social">
    <ul class="contact-social social<?= $params->get('moduleclass_sfx') ?>">

        <?php
        //Linkedin
        if (!empty($linkedin)) : ?>
            <li>
                <a href="<?php echo $linkedin; ?>" target="_blank" class="linkedin">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php
        //Twitter
        if (!empty($twitter)) : ?>
            <li>
                <a href="<?php echo $twitter; ?>" target="_blank" class="twitter">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php
        //Youtube
        if (!empty($youtube)) : ?>
            <li>
                <a href="<?php echo $youtube; ?>" target="_blank" class="youtube">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php
        //Facebook
        if (!empty($facebook)) : ?>
            <li>
                <a href="<?php echo $facebook; ?>" target="_blank" class="facebook">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php
        //Instagram
        if (!empty($instagram)) : ?>
            <li>
                <a href="<?php echo $instagram; ?>" target="_blank" class="instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php
        //WhatsApp
        if (!empty($whatsapp)) :
        ?>
            <li>
                <a href="https://api.whatsapp.com/send?phone=+55<?php echo $whatsappNumber; ?><?php if (!empty($whatsapp_msg)) echo '&text=' . $whatsapp_msg; ?>" target="_blank" class="">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </li>
        <?php
        endif;
        ?>

    </ul>
</div>
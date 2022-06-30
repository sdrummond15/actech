<div id="contact">
    <ul class="contacts contact<?= $params->get('moduleclass_sfx') ?>">

        <?php
        //Telefone
        if (!empty($phone1) || !empty($phone2) || !empty($phone3)) :

            $count = 0;
            $arrayPhone = array($phone1, $phone2, $phone3);
        ?>
            <li>


                <?php foreach ($arrayPhone as $phone) : ?>

                    <?php if ($count == 0) : ?>
                        <a href="tel:+<?php echo preg_replace("/[^0-9]/", "", $phone); ?>" target="_blank" class="phone-icon">
                            <img src="images/phone-icon.png" alt="telefone actech">
                        </a>
                    <?php else : ?>
                        <span>|</span>
                    <?php endif; ?>
                    <a href="tel:+<?php echo preg_replace("/[^0-9]/", "", $phone); ?>" target="_blank" class="phone">
                        <?= $phone ?>
                    </a>
                <?php
                    $count++;
                endforeach;
                ?>
            </li>
        <?php endif; ?>

        <?php
        //E-mail
        if (!empty($email)) : ?>
            <li>
                <a href="mailto:<?php echo $email; ?>" target="_blank" class="email-icon">
                    <img src="images/email-icon.png" alt="e-mail actech">
                </a>
                <a href="mailto:<?php echo $email; ?>" target="_blank" class="email">
                    <?= $email ?>
                </a>
            </li>
        <?php endif; ?>

    </ul>
</div>
<?php

$active = JFactory::getApplication()->getMenu()->getActive();
$backgroundImage = '';
if($image){
    $backgroundImage = 'background-image: url('.$image.') !important;';
}
?>
<div id="banner-int" style="<?= $backgroundImage ?>">
    <div>
        <div class="banner-int">
            <h1><?php echo $active->title; ?></h1>
        </div>
    </div>
</div>
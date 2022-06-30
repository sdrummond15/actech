<?php
$items = $params->get('items');
if (!empty($items)) :
?>
    <div id="modproducts">
        <div id="products">

            <?php
            $count = 1;
            foreach ($items as $item) :
                $link = JRoute::_('index.php?Itemid=' . $item->menu);
                $line = ($count%3)?'line-separator': '';
            ?>
                <div class="products <?= $line ?>">
                    <div class="item-products">
                        <a href="<?= $link; ?>" class="img-products" style="background-image: url('<?= $item->image ?>')">
                        </a>
                        <h1>
                            <a href="<?= $link; ?>"><?= $item->title; ?></a>
                        </h1>
                    </div>
                </div>
            <?php
                $count++;
            endforeach;
            ?>

        </div>
    </div>
<?php endif; ?>
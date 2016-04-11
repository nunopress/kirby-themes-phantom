<?php if ($site->social_icons()->isNotEmpty()): ?>
    <section>
        <h2>Follow</h2>
        <ul class="icons">
            <?php foreach ($site->social_icons()->toStructure() as $item): ?>
                <li><a href="<?php echo $item->social_icon_link() ?>" class="icon style2 <?php echo $item->social_icon_class() ?>"><span class="label"><?php echo $item->social_icon_name()->html() ?></span></a></li>
            <?php endforeach; ?>
        </ul>
    </section>
<?php endif; ?>
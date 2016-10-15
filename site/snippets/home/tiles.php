<section class="tiles">
    <?php foreach ($page->tiles()->toStructure() as $p): ?>
        <article class="<?php echo $p->tile_style() ?>">
            <?php if ($p_image = $page->image($p->tile_cover())): ?>
                <span class="image">
                    <img src="<?php echo $p_image->url() ?>" alt="" />
                </span>
            <?php endif; ?>
            <a href="<?php echo $p->tile_page()->url() ?>">
                <h2><?php echo $p->tile_title()->html() ?></h2>

                <div class="content">
                    <?php echo $p->tile_text()->kirbytext() ?>
                </div>
            </a>
        </article>
    <?php endforeach; ?>
</section>
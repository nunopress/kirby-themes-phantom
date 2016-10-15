<section class="tiles">
    <?php foreach ($page->children()->visible() as $p): ?>
        <article class="<?php e($p->style()->isNotEmpty(), "style" . $p->style(), "style1") ?>">
            <?php if ($p_image = $p->image($p->cover())): ?>
                <span class="image">
                    <img src="<?php echo $p_image->url() ?>" alt="" />
                </span>
            <?php endif; ?>
            <a href="<?php echo $p->url() ?>">
                <h2><?php echo $p->title()->html() ?></h2>

                <div class="content">
                    <?php echo $p->home_text()->kirbytext() ?>
                </div>
            </a>
        </article>
    <?php endforeach; ?>
</section>
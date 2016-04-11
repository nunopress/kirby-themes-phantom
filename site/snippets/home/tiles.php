<section class="tiles">
    <?php foreach ($page->children()->visible() as $p): ?>
        <article class="<?php e($p->style()->isNotEmpty(), "style" . $p->style(), "style1") ?>">
                                            <span class="image">
                                                <img src="<?php echo $p->image($p->cover())->url() ?>" alt="" />
                                            </span>
            <a href="<?php echo $p->url() ?>">
                <h2><?php echo $p->title()->html() ?></h2>

                <div class="content">
                    <?php echo $p->text()->kirbytext() ?>
                </div>
            </a>
        </article>
    <?php endforeach; ?>
</section>
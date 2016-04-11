<!-- Menu -->
<nav id="menu">
    <h2>Menu</h2>
    <ul>
        <li><a href="<?php echo $site->url() ?>">Home</a></li>

        <?php foreach ($pages->visible() as $p): ?>
            <li><a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>
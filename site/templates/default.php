<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title><?php snippet('common/head_title') ?></title>

        <?php snippet('common/head_meta') ?>

        <?php snippet('common/head_js') ?>

        <?php snippet('common/head_css') ?>
    </head>
    <body class="<?php snippet('common/body_class') ?>">
        <!-- Wrapper -->
        <div id="wrapper">

            <?php snippet('common/header') ?>

            <?php snippet('common/nav') ?>

            <!-- Main -->
            <div id="main">
                <div class="inner">
                    <h1><?php echo $page->title() ?></h1>

                    <?php if ($page->cover()->isNotEmpty()): ?>
                        <span class="image main"><img src="<?php echo $page->image($page->cover())->url() ?>" alt="" /></span>
                    <?php endif; ?>

                    <?php echo $page->text()->kirbytext() ?>
                </div>
            </div>

            <?php snippet('common/footer') ?>

        </div>

        <?php snippet('common/foot_js') ?>

    </body>
</html>
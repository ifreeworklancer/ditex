<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,500,700&display=swap&subset=cyrillic"
          rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">
</head>

<body>

<!-- SVG icon -->
<?php include(__DIR__ . '/../modules/svgs.php'); ?>


<!-- App-header -->
<header id="app-header">
    <div class="container-fluid px-sm-0">
        <div class="row justify-content-between align-items-center no-gutters">
            <div class="col-auto">
                <a href="/" class="logo">
                    <img src="<?= $intro['logo']; ?>" alt="logo">
                </a>
            </div>
            <div class="col-auto">
                <nav class="header-nav">
                    <ul class="header-nav-list">
                        <?php foreach ($nav as $key => $item) : ?>
                            <li>
                                <a href="#<?= $key; ?>" class="scroll-link"><?= $item; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <ul class="lang-list" id="language-switcher">
                        <?php if ($locale == 'en'): ?>
                            <li class="lang-list-item lang-list-item-active"><a
                                        href="<?php echo url() . '?' . http_build_query(['hl' => 'en']) ?>">en</a></li>
                            <li class="lang-list-item"><a
                                        href="<?php echo url() . '?' . http_build_query(['hl' => 'ru']) ?>">ru</a></li>
                            <li class="lang-list-item"><a
                                        href="<?php echo url() . '?' . http_build_query(['hl' => 'ja']) ?>">ja</a></li>
                        <?php endif; ?>
                        <?php if ($locale == 'ru'): ?>
                            <li class="lang-list-item lang-list-item-active"><a
                                    href="<?php echo url() . '?' . http_build_query(['hl' => 'ru']) ?>">ru</a></li>
                            <li class="lang-list-item"><a
                                        href="<?php echo url() . '?' . http_build_query(['hl' => 'en']) ?>">en</a></li>
                            <li class="lang-list-item"><a
                                        href="<?php echo url() . '?' . http_build_query(['hl' => 'ja']) ?>">ja</a></li>
                        <?php endif; ?>
                        <?php if ($locale == 'ja'): ?>
                            <li class="lang-list-item lang-list-item-active"><a
                                        href="<?php echo url() . '?' . http_build_query(['hl' => 'ja']) ?>">ja</a></li>
                            <li class="lang-list-item"><a
                                        href="<?php echo url() . '?' . http_build_query(['hl' => 'en']) ?>">en</a></li>
                            <li class="lang-list-item"><a
                                        href="<?php echo url() . '?' . http_build_query(['hl' => 'ru']) ?>">ru</a></li>
                        <?php endif; ?>
                    </ul>
                    <div class="burger-menu">
                        <div class="line line--top"></div>
                        <div class="line line--middle"></div>
                        <div class="line line--bottom"></div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="menu">
        <ul class="menu-list">
            <?php foreach ($nav as $key => $item) : ?>
                <li>
                    <a href="#<?= $key; ?>" class="scroll-link"><?= $item; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</header>

<form></form>

<!-- Modal -->
<?php include(__DIR__ . '/../modules/modal.php'); ?>

<!-- Main -->
<main>
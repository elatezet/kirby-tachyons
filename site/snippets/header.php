<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/tachyons.css') ?>
  <?= css('assets/css/lauscher.css') ?>

</head>
<body class="bg-near-white sans-serif dark-gray">

  <header role="banner" class="fl w-100">
    
      <div class="fl w-25">
        <a class="dark-gray link" href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a>
      </div>

      <?php snippet('menu') ?>

  </header>

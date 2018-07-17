<!doctype html>
<html lang="<?=site()->language() ? site()->language()->code() : 'de'?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">


  <title><?=$site->title()->html()?> | <?=$page->title()->html()?></title>
  <meta name="description" content="<?=$site->description()->html()?>">

  <?=css('assets/css/tachyons.css')?>
  <?=css('assets/css/lauscher.css')?>

</head>
<body class="bg-near-white near-black">

<div class="mw9 center">

  <header role="banner" class="fl w-100 flex items-end pb5">

      <div class="fl w-50">
        <a class="link" href="<?=url()?>" alt="<?=$site->title()->html()?>" rel="home">
        <img class="pt5 ph3 o-90" src="<?= kirby()->urls()->assets() ?>/images/logo.svg"/>
      </a>
      </div>

      <div class="fl w-50">
        <?php snippet('menu')?>
      </div>
      <div class="cf"></div>
  </header>

<!doctype html>
<html lang="<?=site()->language() ? site()->language()->code() : 'en'?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">


  <title><?=$site->title()->html()?> | <?=$page->title()->html()?></title>
  <meta name="description" content="<?=$site->description()->html()?>">

  <?=css('assets/css/tachyons.css')?>
  <?=css('assets/css/lauscher.css')?>

</head>
<body class="bg-near-white near-black">

  <header role="banner" class="fl w-100">

      <div class="fl w-50 pa3">
        <a class="link" href="<?=url()?>" alt="<?=$site->title()->html()?>" rel="home">
        <img src="assets/images/logo.svg"/>
      </a>
      </div>

      <div class="fl w-50">
        <?php snippet('menu')?>
      </div>

  </header>

<?php snippet('line') ?>
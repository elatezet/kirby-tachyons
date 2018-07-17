<?php snippet('header')?>

  <main role="main">

    <header class="pa3">
      <h1><?=$page->title()->html()?></h1>
      <div class="f3 lh-heading">
        <?=$page->intro()->kirbytext()?>
      </div>
    </header>

    <div class="lh-copy ph3 pb3">
      <?=$page->text()->kirbytext()?>
    </div>

  </main>
<div class="w-100 pl3">
  <?php snippet('showcase')?>
  </div>
<?php snippet('footer')?>
<?php snippet('header')?>

  <main class="pa3" role="main">
      
      <header>
        <h1><?=$page->title()->html()?></h1>
        <div class="f3 lh-lead pb3">
          <?=$page->intro()->kirbytext()?>
        </div>

      </header>

      <div class="lh-copy">
        <?=$page->text()->kirbytext()?>
      </div>

  </main>

<?php snippet('footer')?>

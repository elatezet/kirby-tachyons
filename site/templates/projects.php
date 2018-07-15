<?php snippet('header') ?>

  <main class="pa3" role="main">

    <header class="">
      <h1><?= $page->title()->html() ?></h1>
      <div class="">
        <?= $page->text()->kirbytext() ?>
      </div>
      <hr />
    </header>
      
    <div class="">    
      <?php snippet('showcase') ?>
    </div>

  </main>

<?php snippet('footer') ?>
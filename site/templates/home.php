<?php snippet('header') ?>

  <main class="pa3" role="main">
    
    <header class="">
      <h1><?= $page->title()->html() ?></h1>
      <div class="lh-copy bold">
        <?= $page->intro()->kirbytext() ?>
      </div>
      
    </header>

    <div class="lh-copy">
      <?= $page->text()->kirbytext() ?>
    </div>
  
    <section class="">
      
      <div class="">
        <h2>Projekte</h2>
        <?php snippet('showcase', ['limit' => 3]) ?>
        <p class="lh-copy"><a href="<?= page('projects')->url() ?>" class="btn">show all projects &hellip;</a></p>
      </div>
      
    </section>

  </main>

<?php snippet('footer') ?>
<?php snippet('header') ?>

  <main class="pa3" role="main">
    
    <header class="">
      <h1><?= $page->title()->html() ?></h1>
      <div class="">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>

    <div class="">
      <?= $page->text()->kirbytext() ?>
    </div>
  
    <section class="">
      
      <div class="">
        <h2>Latest Projects</h2>
        <?php snippet('showcase', ['limit' => 3]) ?>
        <p class="projects-section-more"><a href="<?= page('projects')->url() ?>" class="btn">show all projects &hellip;</a></p>
      </div>
      
    </section>

  </main>

<?php snippet('footer') ?>
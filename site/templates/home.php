<?php snippet('header') ?>

  <main class="pa3" role="main">
    
    <header class="">
      <h1><?= $page->title()->html() ?></h1>
      <div class="f3 lh-lead pb3">
        <?= $page->intro()->kirbytext() ?>
      </div>
      
    </header>

    <div class="lh-copy">
      <?= $page->text()->kirbytext() ?>
    </div>
  
    <section class="">
      
      <div class="pv4 w-100">
        <h3 class="f3 pb3">Meine letzten Projekte</h3>
        
 
          <?php snippet('showcase', ['limit' => 3]) ?>


        <div class="w-100">
        <p class="lh-copy mt4"><a href="<?= page('projects')->url() ?>" class="btn">Alle Projekte ansehen</a> <small> ↗ </small>  </p>
        </div>
        
      </div>
      
    </section>

  </main>

<?php snippet('footer') ?>
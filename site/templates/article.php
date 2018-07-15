<?php snippet('header') ?>

  <main class="pa3" role="main">
    
    <article class="">

      <header class="">
        <h1><?= $page->title()->html() ?></h1>
        <div class="intro text">
          <?= $page->date('F jS, Y') ?>
        </div>
        <hr />
      </header>
      
      <?php snippet('coverimage', $page) ?>
      
      <div class="">
        <?= $page->text()->kirbytext() ?>
      </div>
      
    </article>
    
    <?php snippet('prevnext', ['flip' => true]) ?>
    
  </main>

<?php snippet('footer') ?>
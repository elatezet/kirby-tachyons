<?php snippet('header') ?>

  <main class="pa3" role="main">
    
    <header class="">
    <div class="lh-copy pb2">
        <?= $page->year() ?>
    </div>
    <h1><?= $page->title()->html() ?></h1>

      
    </header>
    
    <div class="lh-copy">
      
      <?= $page->text()->kirbytext() ?>

      <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure class="pa4">
          <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
        </figure>
      <?php endforeach ?>
      
    </div>
    
    <?php snippet('prevnext') ?>

  </main>

<?php snippet('footer') ?>
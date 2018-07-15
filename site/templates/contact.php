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
      <h2>Get in Touch</h2>
      
      <ul class="">
        <?php foreach($page->contactoptions()->toStructure() as $item): ?>
          <?php $icon = $page->image($item->icon()); ?>
          <li class="">
            <div class="">
              <img src="<?= $icon->url() ?>" width="<?= $icon->width() ?>" alt="<?= $item->title()->html() ?> icon" class="contact-item-icon" />
              <h3 class=""><?= $item->title()->html() ?></h3>
              <p class="">
                <?= $item->text()->html() ?>
              </p>
            </div>
            <p class="lh-copy">
              <a href="<?= $item->url()->html() ?>" class="contact-action btn"><?= $item->linktext()->html() ?></a>
            </p>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
      
    <div class="contact-twitter text wrap cf">
      <?= $page->text()->kirbytext() ?>
    </div>
    
  </main>

<?php snippet('footer') ?>
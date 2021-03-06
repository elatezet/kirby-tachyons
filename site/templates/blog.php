<?php snippet('header') ?>

  <main class="pa3" role="main">

    <header class="">
      <h1><?= $page->title()->html() ?></h1>

      <?php
      // This page uses a separate controller to set variables, which can be used
      // within this template file. This results in less logic in your templates,
      // making them more readable. Learn more about controllers at:
      // https://getkirby.com/docs/developer-guide/advanced/controllers
      if($pagination->page() == 1):
      ?>
        <div class="lh-copy">
          <?= $page->text()->kirbytext() ?>
        </div>
      <?php endif ?>

      <hr />
    </header>

    <section class="">
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>

          <article class="">

            <header class="">
              <h2 class="">
                <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              </h2>

              <p class=""><?= $article->date('F jS, Y') ?></p>
            </header>

            <?php snippet('coverimage', $article) ?>

            <div class="lh-copy">
              <p>
                <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
                <a href="<?= $article->url() ?>" class="article-more">Weiterlesen</a>
              </p>
            </div>

          </article>

          <hr />

        <?php endforeach ?>
      <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
      <?php endif ?>
    </section>

    <?php snippet('pagination') ?>

  </main>

<?php snippet('footer') ?>
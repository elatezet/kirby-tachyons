<?php

/*

The $flip parameter can be passed to the snippet to flip
prev/next items visually:

```
<?php snippet('prevnext', ['flip' => true]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

$directionPrev = @$flip ? 'right' : 'left';
$directionNext = @$flip ? 'left'  : 'right';

if($page->hasNextVisible() || $page->hasPrevVisible()): ?>
  <nav class=" <?= !@$flip ?: ' flip' ?> wrap cf">

    <?php if($page->hasPrevVisible()): ?>
      <a class=" <?= $directionPrev ?>" href="<?= $page->prevVisible()->url() ?>" rel="prev" title="<?= $page->prevVisible()->title()->html() ?>">
        <?= (new Asset("assets/images/arrow-{$directionPrev}.svg"))->content() ?>
      </a>
    <?php else: ?>
      <span class=" <?= $directionPrev ?> is-inactive">
        <?= (new Asset("assets/images/arrow-{$directionPrev}.svg"))->content() ?>
      </span>
    <?php endif ?>

    <?php if($page->hasNextVisible()): ?>
      <a class=" <?= $directionNext ?>" href="<?= $page->nextVisible()->url() ?>" rel="next" title="<?= $page->nextVisible()->title()->html() ?>">
        <?= (new Asset("assets/images/arrow-{$directionNext}.svg"))->content() ?>
      </a>
    <?php else: ?>
      <span class=" <?= $directionNext ?> is-inactive">
        <?= (new Asset("assets/images/arrow-{$directionNext}.svg"))->content() ?>
      </span>
    <?php endif ?>

  </nav>
<?php endif ?>
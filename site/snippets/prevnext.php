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


if ($page->hasNextVisible() || $page->hasPrevVisible()): ?>
  <nav class="fl w-100 lh-copy arrows f2">

  <div class="fl w-50">
    <?php if ($page->hasPrevVisible()): ?>
      <a class="dim near-black link" href="<?=$page->prevVisible()->url()?>" rel="prev" title="<?=$page->prevVisible()->title()->html()?>">←</a>
    <?php else: ?>
      <span class="o-50">←</span>
    <?php endif?>
  </div>
  
  <div class="fl w-50">
    <?php if ($page->hasNextVisible()): ?>
      <a class="dim near-black link fr" href="<?=$page->nextVisible()->url()?>" rel="next" title="<?=$page->nextVisible()->title()->html()?>">→</a>
    <?php else: ?>
      <span class="o-50 fr">→</span>
    <?php endif?>
  </div>

  </nav>
<?php endif?>
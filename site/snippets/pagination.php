<?php if ($pagination->hasPages()): ?>
  <nav class="fl w-100">

  <div class="fl w-50">
    <?php if ($pagination->hasPrevPage()): ?>
      <a class="" href="<?=$pagination->prevPageURL()?>" rel="prev" title="newer articles">
        <?=(new Asset("assets/images/arrow-left.svg"))->content()?>
      </a>
    <?php else: ?>
      <span class="">
        <?=(new Asset("assets/images/arrow-left.svg"))->content()?>
      </span>
    <?php endif?>
  </div>
  <div class="fl w-50">
    <?php if ($pagination->hasNextPage()): ?>
      <a class="" href="<?=$pagination->nextPageURL()?>" rel="next" title="older articles">
        <?=(new Asset("assets/images/arrow-right.svg"))->content()?>
      </a>
    <?php else: ?>
      <span class="">
        <?=(new Asset("assets/images/arrow-right.svg"))->content()?>
      </span>
    <?php endif?>
    </div>
  </nav>
<?php endif?>
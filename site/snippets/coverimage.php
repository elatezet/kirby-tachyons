<?php if($image = $item->coverimage()->toFile()): ?>
  <figure class="pa4">
    <img src="<?= $image->url() ?>" alt="" />
  </figure>
<?php endif ?>

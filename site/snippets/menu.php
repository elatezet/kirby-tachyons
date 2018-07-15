<nav class="fl w-75" role="navigation">
  <ul class="list fr">
    <?php foreach($pages->visible() as $item): ?>
    <li class="fl pr3">
      <a class="dark-gray link <?= r($item->isOpen(), ' is-active') ?>" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
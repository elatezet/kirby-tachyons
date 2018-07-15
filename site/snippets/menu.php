<nav role="navigation">
  <ul class="list fr lh-copy">
    <?php foreach($pages->visible() as $item): ?>
    <li class="fl pr3">
      <a class="near-black link <?= r($item->isOpen(), ' is-active') ?>" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <br class="dn-ns"/>
    <?php endforeach ?>
  </ul>
</nav>
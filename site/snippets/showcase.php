<?php

$projects = page('projects')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<div class="fl w-100" style="margin: 0 -0.5em 2em -0.5em;">

  <?php foreach($projects as $project): ?>

    <div class="fl w-100 w-50-m w-33-l pa2">
        <a href="<?= $project->url() ?>" class="near-black link">
          <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="" />
          <?php endif ?>
          <div>
            <h3><?= $project->title()->html() ?></h3>
          </div>
        </a>
    </div>

  <?php endforeach ?>
    <div class="cf"></div>
</div>
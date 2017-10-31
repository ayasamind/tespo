<div class="two wide column">
    <h3 class="ui tag label">カテゴリ</h3>
    <ul class="ui link list">
        <?php foreach($categories as $category) :?>
            <div class="item"><?= $this->Html->link($category->name, ['controller' => 'Categories', 'action' => 'view', $category->id]) ?></div>
        <?php endforeach; ?>
    </ul>
    <h3 class="ui tag label">タグ</h3>
    <ul class="ui blue labels">
        <?php foreach($tags as $tag) :?>
            <div class="ui label large"><?= $this->Html->link($tag->name, ['controller' => 'Tags', 'action' => 'view', $tag->id]) ?></div>
        <?php endforeach; ?>
    </ul>
</div>
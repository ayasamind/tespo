<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>

<div class="ui celled grid">
    <div class="twelve wide column">
        <h2><?= h($article->title) ?></h2>
        <div class="ten wide column">
            <div class="ui avator tiny image"><?= $this->Html->image($article->user->image) ?></div>
            <p><?= h($article->user->name) ?>が<?= ($article->created) ?>に作成</p>
        </div>
        <div class="ten wide column"></div>
            <?= $this->Html->link($article->category->name, ['controller' => 'Categories', 'action' => 'view', $article->category->id]) ?>
        <?php foreach($article->tags as $tag) : ?>
            <?= $this->Html->link($tag->name, ['controller' => 'Tags', 'action' => 'view', $tag->id]) ?>
        <?php endforeach; ?>
    </div>
    <div class="four wide column">
    <?= $this->Html->link('編集する', ['action' => 'edit', $article->id], ['class' => 'ui primary button']) ?>
    </div>
</div>
<div class="ui grid">
    <h1>Q.</h1>
    <h4 class="ui horizontal divider header"><i class="heart icon"></i></h4>
    <h1>A.</h1>
    <h4 class="ui horizontal divider header"><i class="heart icon"></i></h4>
    <h1>Example</h1>
    <h4 class="ui horizontal divider header"><i class="heart icon"></i></h4>
    <h1>Templates</h1>
    <h4 class="ui horizontal divider header"><i class="heart icon"></i></h4>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $articles
 */
?>
<div class="ui internally celled grid">
    <div class="twelve wide column">
        <legend class="ui">詳細検索</legend>
        <div class="ui segment">
                <?= $this->Form->create(null, ['valueSources' => 'query']) ?>
                <div class="ui input">
                    <?= $this->Form->input('キーワード', [
                        'type' => 'text',
                        'id' => 'gettags',
                        'autocomplete' => 'off',
                        'class' => 'sixteen wide column'
                    ]); ?>
                        <button class="ui icon button">
                            <i class="search icon"></i>
                        </button>
                </div>
                <div class="ui icon input">
                    <?= $this->Form->input('タグ', [
                        'type' => 'text',
                        'id' => 'gettags',
                        'autocomplete' => 'off'
                    ]); ?>
                </div>
                <div class="ui icon input">
                    <?= $this->Form->input('カテゴリー', [
                        'type' => 'text',
                        'id' => 'gettags',
                        'autocomplete' => 'off'
                    ]); ?>
                </div>
                <?= $this->Html->link('検索条件をクリア', ['action' => 'index']) ?>
                <?= $this->Form->end(); ?>
        </div>
        <div class="ui secondary pointing menu">
            <a class="item active">記事一覧 </a>
            <a class="item">テンプレート</a>
        </div>
            <?php foreach ($articles as $article): ?>
                <div class="ui segment item">
                    <?= $article->has('category') ? $this->Html->link($article->category->name, ['controller' => 'Categories', 'action' => 'view', $article->category->id]) : '' ?>
                    <div class="ui avatar image"><?= $article->user->has('image') ? $this->Html->image($article->user->image,['action' => 'index']) : $this->Html->image('No-image-found.jpg') ?></div>
                    <?php foreach($article->tags as $tag) : ?>
                        <?= $article->has('tags') ? $this->Html->link($tag->name, ['controller' => 'Tags', 'action' => 'view', $tag->id]) : ''?>
                    <?php endforeach; ?>
                    <?= $article->has('user') ? $this->Html->link($article->user->name, ['controller' => 'Users', 'action' => 'view', $article->user->id]) : '' ?>
                    <div class="header">
                        <?= $this->Html->link($article->title, ['action' => 'view', $article->id],[ 'class' => 'title']) ?>
                    </div>
                    <?= h($article->created) ?>
                    <?= $this->Number->format($article->modified_user_id) ?>
                    <?= h($article->modified) ?>
                </div>
            <?php endforeach; ?>
        <p>
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?></p>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
    <?= $this->Element('sidebar')?>
</div>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $articles
 */
?>
<div class="ui internally celled grid">
    <div class="twelve wide column">
        <div class="ui segment raised"><a class="ui red ribbon label">検索</a>
            <div class="sixteen wide column">
                <?= $this->Form->create(false) ?>
                <div class="ui input">
                    <?= $this->Form->control('キーワード', [
                        'type' => 'text',
                    ]); ?>
                    <button class="ui icon button">
                        <i class="search icon"></i>
                    </button>
                </div>
            </div>
            <div class="sixteen wide column">
                <div class="ui input">
                    <?= $this->Form->control('　タグ　　', [
                        'type' => 'text',
                    ]); ?>
                </div>
            </div>
            <div class="sixteen wide column">
                <div class="ui input">
                    <?= $this->Form->control('カテゴリー', [
                        'type' => 'text',
                    ]); ?>
                </div>
            </div>
            <?= $this->Html->link('検索条件をクリア', ['action' => 'index'], ['class' => 'right']) ?>
            <?= $this->Form->end(); ?>
        </div>
        <div class="ui attached tabular menu">
            <a class="item active" data-tab="articles">記事一覧 </a>
            <a class="item" data-tab="templates">テンプレート</a>
        </div>
        <div class="ui tab active" data-tab="articles">
            <?php foreach ($articles as $article): ?>
                <div class="ui segment hover">
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
        <div class="ui tab" data-tab="templates">
            <?php foreach($articles as $article) : ?>
                <div class="ui segment hover">
                    <?= h($article->title) ?>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <?= $this->Element('sidebar')?>
    <script>
        $('.menu .item')
            .tab();
    </script>
</div>

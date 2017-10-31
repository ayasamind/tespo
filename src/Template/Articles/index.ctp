<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $articles
 */
?>
<div class="ui grid">
    <div class="twelve wide column">
        <div class="ui segment">
            <h3 class="ui">詳細検索</h3>
            <div class="fields">
                <?= $this->Form->create(null, ['valueSources' => 'query']) ?>
                <div class="ui input twelve wide fields">
                    <?= $this->Form->input('キーワード', [
                        'type' => 'text',
                        'id' => 'gettags',
                        'autocomplete' => 'off'
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
                <?= $this->Form->button('検索', ['type' => 'submit']) ?>
                <?= $this->Html->link('Reset', ['action' => 'index']) ?>
                <?= $this->Form->end(); ?>
            </div>
        </div>
    </div>
    <div class="column"></div>
    <div class="two wide column">
        <h3>カテゴリー</h3>
        <ul>
            <?php foreach($categories as $category) :?>
                <li><?= $category->name ?></li>
            <?php endforeach; ?>
        </ul>
        <h3>タグ</h3>
    </div>
</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delete_flg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= $this->Number->format($article->id) ?></td>
                <td><?= $article->has('category') ? $this->Html->link($article->category->name, ['controller' => 'Categories', 'action' => 'view', $article->category->id]) : '' ?></td>
                <td><?= $article->has('user') ? $this->Html->link($article->user->name, ['controller' => 'Users', 'action' => 'view', $article->user->id]) : '' ?></td>
                <td><?= h($article->created) ?></td>
                <td><?= $this->Number->format($article->modified_user_id) ?></td>
                <td><?= h($article->modified) ?></td>
                <td><?= h($article->delete_flg) ?></td>
                <td><?= h($article->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $article->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>

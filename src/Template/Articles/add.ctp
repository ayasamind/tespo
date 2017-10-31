<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($article) ?>
    <fieldset>
        <legend><?= __('Add Article') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('body');
            echo $this->Form->control('templates');
            echo $this->Form->control('commit_log');
            echo $this->Form->control('category_id', ['options' => $categories]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('modified_user_id');
            echo $this->Form->control('delete_flg');
            echo $this->Form->control('deleted');
            echo $this->Form->control('tags._ids', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

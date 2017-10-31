<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<?= $this->Form->create($article) ?>
<app></app>
        <?php
            echo $this->Form->control('templates');
            echo $this->Form->control('category_id', ['options' => $categories]);
            echo $this->Form->control('tags._ids', ['options' => $tags]);
        ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>



<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?= $this->Html->script("marked.js") ?>
<script data-src="../webroot/js/tags/app.tag" type="riot/tag"></script>
<script data-src="../webroot/js/tags/app-title.tag" type="riot/tag"></script>
<script data-src="../webroot/js/tags/app-todo.tag" type="riot/tag"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/riot/3.7.3/riot+compiler.min.js"></script>
<script>riot.mount('*')</script>

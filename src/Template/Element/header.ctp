<div class="ui attached menu grid header inverted pink">
    <a class="item font">Respo</a>
    <div class="right menu">
        <div class="item">
            <?= $this->Html->link('+作成', ['controller' => 'Articles','action' => 'add'], ['class'=>'ui yellow button'])?>
        </div>
        <div class="item">
            <?= $this->Html->link('一覧', ['controller' => 'Articles','action' => 'index'], ['class'=>'ui primary button'])?>
        </div>
        <div class="item">
            <div class="ui dropdown">
                設定<i class="dropdown icon"></i>
                <div class="menu">
                    <?= $this->Html->link('Myアカウント', ['controller' => 'Users', 'action' => 'view'], ['class' => 'item']) ?>
                    <?= $this->Html->link('ユーザー管理', ['controller' => 'Users', 'action' => 'index'], ['class' => 'item']) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('.dropdown').dropdown();
    $(document).ready(function(){
        $('.ui .item').on('click', function() {
            $('.ui .item').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
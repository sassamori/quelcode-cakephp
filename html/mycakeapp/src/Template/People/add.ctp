<p><?= $msg ?></p>
<?= $this->Form->create($entity,['type'=>'post','url'=>['controller'=>'people','action'=>'add']]) ?>
    <fieldset class="form">
        <div>NAME:<?= $this->Form->error('People.name') ?></div>
        <div><?= $this->Form->text('People.name') ?></div>
        <div>MAIL:<?= $this->Form->error('People.mail') ?></div>
        <div><?= $this->Form->text('People.mail') ?></div>
        <div>AGE:<?= $this->Form->error('People.age') ?></div>
        <div><?= $this->Form->text('People.age') ?></div>
        <div><?= $this->Form->submit('送信') ?></div>
    </fieldset>
<?= $this->Form->end() ?>
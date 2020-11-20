<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->css('hello') ?>
    <?= $this->Html->script('hello') ?>
</head>
<body>
    <header class="head row">
        <h1><?= $this->element('header',$header) ?></h1>
    </header>
    <div class="content row">
        <?= $this->fetch('content') ?>
    </div>
    <footer class="foot row">
        <h5><?= $this->element('footer',$footer) ?></h5>
    </footer>
</body>
</html>
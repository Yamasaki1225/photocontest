<!DOCTYPE html>
<html lang="ja">
<head>
    <?=$this->Html->charset(); ?>
    <title><?= $this->fetch('title')  ?></title>
</head>
<?php
echo $this->Html->css('cake.Hello');
echo $this->Html->script('cake.hello');
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
<body>
    <div id="container">
        <div id="header">
            <?=$this->element('Hello\header', ['msg'=>$test]) ?>
        </div>
        <div id="content">
            <?=$this->fetch('content'); ?>
        </div>
    </div>
        <div id="footer">
          <?=$this->element($footer) ?>
        </div>
</body>
</html
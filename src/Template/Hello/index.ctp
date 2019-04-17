<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="content-type" content="text/html charset=UTF-8">
    <title>Hello Page</title>
</head>
<body>
<h1>サンプル見出し</h1>
<p>
<?=$result; ?>
</p>
<?=$this->Form->create(null, ['type'=>'post', 'url'=>['controller'=>'Hello', 'action'=>'index']]) ?>
  <?=$this->Form->select('HelloForm.select1', 
  [
    'PC'=>[
      'ウィンドウズ'=>'Windows',
      'リナックス'=>'Linux',
      'マックOS'=>'MacOS X'
    ],
    'mobile'=>[
      'アンドロイド'=>'android',
      'アイフォン'=>'iPhone',
      'ガラケー'=>'cellphone'
    ]
  ],
  ['size'=>4, 'multiple'=>true,'empty'=>'項目を選んでください']);?>
  <?=$this->Form->submit("送信") ?>
<?=$this->Form->end(); ?>
  <!-- HelloControllerのsendFormアクションに値を渡す -->
<!-- <form method="post" action="hello/sendForm"> -->
  <!-- <input type="hidden" name="check1" value="off">
  <input type="hidden" name="radio1" value="off">
  <input type="checkbox" name="check1" id="c1" />
    <label for="c1">チェック</label><br />
  <input type="radio" name="radio1" id="1" value="No.1">
    <label for="r2">ラジオ１</label><br />
  <input type="radio" name="radio1" id="2" value="No.2">
    <label for="r2">ラジオ2</label><br />
  <select name="select1">
    <option value="Windows">Windows</option>
    <option value="Linux">Linux</option>
    <option value="Mac">Mac</option>
  </select> -->
  <!-- <input type="text" name="text1" />
  <input type="submit" />
</form> -->
<br><br/>
<?=date('Y/m/d',time()) ?>
</body>
</html

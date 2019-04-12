<?php
namespace App\Controller;

class HelloController extends AppController {
    public $name;
    public $autoRender = false;  //自動レンダリングをon

    public function initialize(){
      $this->name = 'Hello';
      $this->autoRender = false;
      $this->viewBuilder()->autoLayout(true);
      $this->viewBuilder()->Layout('Hello');
    }

    public function index () {
      $this->viewBuilder()->autoLayout(true);  //自動レイアウトをon
      $this->autoRender = true; //インスタンスが生成される度にinitializeが読み込まれる
      $this->set('test', 'ヘッダーエレメント');
      $n = rand(1, 2);
      $this->set('footer','Hello\footer'.$n);
    }

    public function other() {
        $this->viewBuilder()->autoLayout(false);  //自動レイアウトをOFF。つまりviewは使わない。
        $this->autoRender = true;
    }
}

?>
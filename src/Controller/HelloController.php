<?php
namespace App\Controller;

class HelloController extends AppController {
    public $name = 'Hello';
    public $autoRender = true;  //自動レンダリングをon

    public function index () {
    //   $this->viewBuilder()->autoLayout(false);  //自動レイアウトをOFF
    }

    public function other() {
        echo "これは、index以外の表示です。";
    }
}

?>
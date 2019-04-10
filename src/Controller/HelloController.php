<?php
namespace App\Controller;

class HelloController extends AppController {
    public $name;
    public $autoRender = false;  //自動レンダリングをon

    public function initialize(){
      $this->name = 'Hello';
      $this->autoRender = false;
      $this->viewBuilder()->autoLayout(false);
    }

    public function index () {
      $this->viewBuilder()->autoLayout(true);  //自動レイアウトをon
      $this->autoRender = true;
    }

    public function other() {
        $this->viewBuilder()->autoLayout(false);  //自動レイアウトをon
        $this->autoRender = true;
    }
}

?>
<?php
namespace App\Controller;

class HelloController extends AppController {
    public $name;
    public $autoRender = false;  //自動レンダリングをon

    public function initialize(){
      // $this->name = 'Hello';
      // $this->autoRender = false;
      $this->viewBuilder()->autoLayout(true);
      $this->viewBuilder()->Layout('Hello');
      $this->set('footer', 'Hello\footer2');
      $this->set('test', 'Hello\index');
    }

    public function index () {
      $result = "";
      if ($this->request->is('Post')){
        $result = "<pre>※送信された情報<br/>";
        foreach($this->request->data['HelloForm'] as $key => $val){
          $v_str = '';
          foreach($val as  $v){
            $v_str .= $v . ' ';
          }
          $result .= $key . ' => ' . $v_str;
        }
      //   $result .= $key . " => " . $val;
      //   }
        $result .= "</pre>";
      } else {
        $result = "※なにか書いて送信してください。";
      }
      $this->set("result", $result);
      $this->viewBuilder()->autoLayout(true);  //自動レイアウトをon
      $this->autoRender = true; //viewファイルを使用するかどうか
    }

    public function sendForm() {
      // $result = "送信された情報"."<br/>";
      // debug($this->request->session());
      // debug($this->request->query);
      // foreach($this->request->query as $key => $val) {
      //   $result .= $key . " => " . $val . "<br/>";
      // }
      $this->viewBuilder()->autoLayout(true);
      $this->autoRender = true;
      $str = $this->request->data['text1'];
      $result = "";
      if ($str != ""){
        $result = "you type:".$str;
      } else {
        $result = "empty.";
      }
      $this->set("result", h($result));
    }

    public function other() {
        $this->viewBuilder()->autoLayout(false);  //自動レイアウトをOFF。つまりviewは使わない。
        $this->autoRender = true;
    }
}

?>
<?php
namespace App\Controller;

class BoardsController extends AppController {
    public function index() {
        /**
         * $this->BoardsはBoardsクラスのインスタンスが入っている。
         * つまりテーブルクラスのインスタンスがメンバ変数に追加される。
         * find('all')でテーブルにあるレコードを全て取得する
         */
        $data = $this->Boards->find('all');
        $this->set('data', $data);
    }
    public function test() {
        /**
         * $this->BoardsはBoardsクラスのインスタンスが入っている。
         * つまりテーブルクラスのインスタンスがメンバ変数に追加される。
         * find('all')でテーブルにあるレコードを全て取得する
         */
        $data = $this->Boards->find('all');
        $this->set('data', $data);
    }
}
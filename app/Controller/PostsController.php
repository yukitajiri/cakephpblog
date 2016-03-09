<?php

App::uses('AppController', 'Controller');
class PostsController extends AppController {
    public $name = 'Posts';
    public $uses = array('Post');

    // ヘルパーの利用宣言(呪文)
    public $helpers = array('Html', 'Form');

    public function index() {


      // モデル名を書くことで、モデルから引っ張ってこれる
        $this->set('posts', $this->Post->find('all'));
    }
                                        // 引数にIDを与える
        public function view($id = null)
        {
            // そのIDをメンバ変数の中にセット
                $this->Post->id = $id;
                // それをもとにレコードを検索　指定したIDのレコードを取ってくる
                $this->set('Post', $this->Post->findById($id));
        }

}
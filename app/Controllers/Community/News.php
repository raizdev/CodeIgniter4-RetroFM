<?php
namespace App\Controllers\Community;

use App\Controllers\BaseController;

class News extends BaseController {

    public function __construct() {
        $this->newsModel = model('NewsModel');
        $this->newsReactionModel = model('NewsReactionModel');
        $this->userModel = model('UserModel');
    }
  
    public function item($id = null) {

        $nieuws = $this->newsModel->find($id);
        $nieuws->author = $this->userModel->find($nieuws->author);
        $nieuws->reacties = $this->newsReactionModel->where('article_id', $id)->findAll();
            
        foreach($nieuws->reacties as $reactions) {
            $reactions->user = $this->userModel->find($reactions->user_id);
        }
      

        echo view('pages/community/news', ['news' => $nieuws]);
    }
}

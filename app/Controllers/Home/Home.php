<?php
namespace App\Controllers\Home;

use App\Controllers\BaseController;

class Home extends BaseController {

    public function __construct() {
        $this->newsModel = model('NewsModel');
        $this->newsReactionModel = model('NewsReactionModel');
        $this->userModel = model('UserModel');
    }
  
    public function index($id = null) {

        $this->news = $this->newsModel->orderBy('id', 'desc')->findAll(4);
      
        foreach($this->news as $news) {
            $news->reactionsCount = $this->newsReactionModel->where('article_id', $news->id)->countAllResults();
        }
      
        echo view('pages/home/home', ['news' => $this->news]);
    }
}

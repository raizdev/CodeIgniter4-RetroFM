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
        
        $this->news = $this->newsModel->findAll();
      
        foreach($this->news as $news) {
            $news->reactionsCount = $this->newsReactionModel->where('article_id', $news->id)->countAllResults();
        }
      
        echo view('pages/home', ['news' => $this->news]);
    }
}

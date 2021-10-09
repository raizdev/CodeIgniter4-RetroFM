<?php
namespace App\Controllers;

class Home extends BaseController {

    public function __construct() {
        $this->nieuwsModel = model('NieuwsModel');
        $this->nieuwsReactieModel = model('NieuwsReactieModel');
        $this->userModel = model('UserModel');
    }
  
    public function index($id = null) {

        $this->news = $this->nieuwsModel->findAll();
      
        foreach($this->news as $news) {
            $news->reactionsCount = $this->nieuwsReactieModel->where('article_id', $news->id)->countAllResults();
        }
      
        echo view('pages/home', ['news' => $this->news]);
    }
}

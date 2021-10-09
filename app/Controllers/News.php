<?php
namespace App\Controllers;

class News extends BaseController {

    public function __construct() {
        $this->nieuwsModel = model('NieuwsModel');
        $this->nieuwsReactieModel = model('NieuwsReactieModel');
        $this->userModel = model('UserModel');
    }
  
    public function item($id = null) {

        $nieuws = $this->nieuwsModel->find($id);
        $nieuws->author = $this->userModel->find($nieuws->author);
        $nieuws->reacties = $this->nieuwsReactieModel->where('article_id', $id)->findAll();
            
        foreach($nieuws->reacties as $reactions) {
            $reactions->user = $this->userModel->find($reactions->user_id);
        }
      
        echo view('pages/news', ['news' => $nieuws]);
    }
}

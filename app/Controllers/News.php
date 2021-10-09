<?php
namespace App\Controllers;

class News extends BaseController {

    public function __construct() {
        $this->nieuwsModel = model('NieuwsModel');
        $this->nieuwsReactieModel = model('NieuwsReactieModel');
        $this->userModel = model('UserModel');
    }
  
    public function nummer($id = null) {

        $nieuws = $this->nieuwsModel->find($id);
        $nieuws->reacties = $this->nieuwsReactieModel->where('article_id', $id)->findAll();
            
        foreach($nieuws->reacties as $reactions) {
            $reactions->user = $this->userModel->find($reactions->user_id);
        }
      
        echo view('templates/header');
        echo view('pages/News', ['data' => $nieuws]);
        echo view('templates/footer');
    }
}

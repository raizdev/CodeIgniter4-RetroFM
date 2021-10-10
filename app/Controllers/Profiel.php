<?php

namespace App\Controllers;

class Profiel extends BaseController {

    public function __construct() {
        $this->userModel = model('UserModel');
    }
  
    public function gebruiker($username = null){
        
        $user = $this->userModel->where('username', $username)->get();
      
        echo view('templates/header');
        echo view('pages/profiel', ['data' => $user]);
        echo view('templates/footer');
		}
}

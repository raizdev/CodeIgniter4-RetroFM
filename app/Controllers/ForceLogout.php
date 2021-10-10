<?php

namespace App\Controllers;

class Forcelogout extends BaseController {

    public function index(){

        

    echo view('templates/header', $data);
    echo view('templates/footer');
    }
}

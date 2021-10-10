<?php
namespace App\Controllers;

class Events extends BaseController {

    public function __construct() {
        $this->eventModel = model('EventModel');
    }
  
    public function nummer($id = null){

        $event = $this->eventModel->find($id);
      
        echo view('templates/header');
        echo view('pages/Events', ['data' => $event]);
        echo view('templates/footer');
    }
}
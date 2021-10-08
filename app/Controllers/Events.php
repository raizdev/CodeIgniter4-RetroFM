<?php

namespace App\Controllers;

class Events extends BaseController {

    public function nummer($id = null){

        $db = \Config\Database::connect();
		$query = $db->table('habnet_events')->where('id', $id)->get(1);
        
        foreach ($query->getResult() as $row) {
        
            $data = array(
                'title'     =>  $row->titel,
                'heading'   =>  $row->afbeelding,
                'message'   =>  $row->verhaal,
                'author'    =>  $row->author
            );

		}

    echo view('templates/header');
    echo view('pages/News', $data);
    echo view('templates/footer');
    }
}
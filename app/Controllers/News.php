<?php

namespace App\Controllers;

class News extends BaseController {

    public function nummer($id = null){

        $db = \Config\Database::connect();
		$query = $db->table('habnet_nieuws')->where('id', $id)->get(1);
        
        foreach ($query->getResult() as $row) {
            
            $data = array(
                'title'     =>  $row->titel,
                'heading'   =>  $row->afbeelding,
                'message'   =>  $row->tekst,
                'author'    =>  $row->author
            );

		}

    echo view('templates/header', $data);
    echo view('pages/News', $data);
    echo view('templates/footer');
    }
}

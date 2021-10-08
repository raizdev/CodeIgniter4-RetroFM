<?php

namespace App\Controllers;

class Profiel extends BaseController {

    public function gebruiker($username = null){

        $db = \Config\Database::connect();
		$query = $db->table('users')->where('username', $username)->get(1);
        
        foreach ($query->getResult() as $row) {
            
            $data = array(
                'id'        =>  $row->id,
                'username'  =>  $row->username,
                'motto'     =>  $row->motto,
                'look'      =>  $row->look,
            );

		}

    echo view('templates/header');
    echo view('pages/profiel', $data);
    echo view('templates/footer');
    }
}

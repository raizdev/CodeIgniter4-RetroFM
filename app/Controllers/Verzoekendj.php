<?php 

namespace App\Controllers;

class Verzoekendj extends BaseController
{
	public function index()
	{


		$db = \Config\Database::connect();
		$query = $db->table('panelranks')->where('id', session()->get('panelrank'))->get(1);
        
        foreach ($query->getResult() as $row) {
            
            $data = array(
                'ranknaam' => $row->djrank,
            );

		}

		if (session()->get('panelrank') >= 2) {
			// Niks moet uitgevoerd worden!
		}
		else {
			return redirect()->to('dashboard');
		}

		echo view('templates/header');
		echo view('pages/verzoekendj', $data);
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
<?php 

namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{
	public function gebruiker($username = null)
	{
		// Variables worden hier aangegeven
		$db = \Config\Database::connect();
		$query = $db->table('panelranks')->where('id', session()->get('panelrank'))->get(1);
		$query1 = $db->table('users')->where('username', $username)->get(1);
		$builder = $db->table('users');
        
        foreach ($query->getResult() as $row) {
            
            $data2 = array(
                'ranknaam' => $row->djrank,
            );

		}

        foreach ($query1->getResult() as $row) {
            
            $data1 = array(
                'id'        =>  $row->id,
                'username'  =>  $row->username,
                'motto'     =>  $row->motto,
                'look'      =>  $row->look,
                'rank'      =>  $row->panelrank,
            );

		}

		if (session()->get('panelrank') >= 2) {
			// Niks moet uitgevoerd worden!
		}
		else {
			return redirect()->to('dashboard');
		}

		if ($this->request->getMethod() == 'post') {
	
			$builder->set('force_logoff', '1');
			$builder->where('username', $username);
			$builder->update();

			session()->setFlashdata('success', '<h3>Actie Ondernomen.</h3><p>Als de geselecteerde gebruiker weer habnetfm.nl betreedt. Zal die worden uitgelogd.</p>');
		}

		echo view('templates/header', $data1);
		echo view('pages/edituser', $data2);
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
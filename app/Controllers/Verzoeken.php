<?php 
/*
namespace App\Controllers;

use App\Models\VerzoekModel;

use App\Models\UserModel;

class Verzoeken extends BaseController 
{

    public function submit(){

		$model = new UserModel();

		$db = \Config\Database::connect();
        
		$data = [];
		helper(['form']);

		if ($this->request->getMethod() == 'post') {
			
			$rules = [
				'habnet_naam' 	=> 	'required|min_length[3]|max_length[20]|is_unique[habnet_verzoeken.habnet_naam]',
				'verzoeken' 	=> 	'required|min_length[3]|max_length[20]',
			];

			$errors = [
				'habnet_naam' => [
					'is_unique' 	=> 	'Wacht todat de DJ je vorige verzoek heeft verwerkt!',
					'required' 		=> 	'U moet een Habnet Naam opgeven.',
					'min_length' 	=> 	'Minimaal 3 letters in je Habnet Naam is nodig.',
					'max_length' 	=> 	'Maximaal 20 letters in je Habnet Naam is toegestaan.'
				],

				'verzoeken' => [
					'required' 		=> 	'U moet een verzoek in typen.',
					'min_length' 	=> 	'Minimaal 3 letters in je verzoek is nodig.',
					'max_length' 	=> 	'Maximaal 20 letters in je verzoek is toegestaan.'
				]
			];

			if (! $this->validate($rules, $errors)) 
			{
				$data['validation'] = $this->validator;
			}
			else
			{
				$model = new VerzoekModel();

				$newData = [
					'habnet_naam' 	=> 	$this->request->getVar('habnet_naam'),
					'verzoeken' 	=> 	$this->request->getVar('verzoeken'),
				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Met succes ingediend!');
				return redirect()->to('/verzoeken');

			}
		}
		$data['user'] = $model->where('id', session()->get('id'))->first();
		echo view('templates/header', $data);
		echo '<title>HabnetFM - Verzoeklijnen</title>';
		echo view('pages/verzoeken');
		echo view('templates/footer');
	}

}
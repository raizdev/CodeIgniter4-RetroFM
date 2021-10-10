<?php namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
	public function index()
	{
		
		$data = [];
		helper(['form']);


		if ($this->request->getMethod() == 'post') {
			//pages is hier aangegeven
			$rules = [
				'email' => 'required|min_length[6]|max_length[50]|valid_email',
				'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
			];

			$errors = [
				'password' => [
					'validateUser' => 'Email of het wachtwoord kloppen niet.'
				]
			];

			if (! $this->validate($rules, $errors)) {
				// $this->load->helper('form');
				$data['validation'] = $this->validator;
				
			}else{
				$model = new UserModel();

				$user = $model->where('mail', $this->request->getVar('email'))
											->first();

				$this->setUsersession($user);
				return redirect()->to('dashboard');

			}
		}

		echo view('pages/login');
	}

	private function setUsersession($user){
		$data = [
			'id' => $user['id'],
			'panelrank' => $user['panelrank'],
			'username' => $user['username'],
			'email' => $user['mail'],
			'loggedlook' => $user['look'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}
	//--------------------------------------------------------------------

	public function register(){
		$data = [];
		helper(['form']);

		if ($this->request->getMethod() == 'post') {
			//pages is hier aangegeven
			$rules = [
				'username' => 'required|min_length[3]|max_length[20]',
				'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[pages.email]',
				'password' => 'required|min_length[8]|max_length[255]',
				'password_confirm' => 'matches[password]',
			];

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();

				$newData = [
					'username' => $this->request->getVar('username'),
					'email' => $this->request->getVar('mail'),
					'password' => $this->request->getVar('password'),
				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Succesvol Geregistreerd');
				return redirect()->to('/');

			}
		}

        echo view('pages/register');
	}

	//--------------------------------------------------------------------

	public function profile(){
		
		$data = [];
		helper(['form']);
		$model = new UserModel();

		if ($this->request->getMethod() == 'post') {
			//pages is hier aangegeven
			$rules = [
				'username' => 'required|min_length[3]|max_length[20]',
				];

			if($this->request->getPost('password') != ''){
				$rules['password'] = 'required|min_length[8]|max_length[255]';
				$rules['password_confirm'] = 'matches[password]';
			}


			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{

				$newData = [
					'id' => session()->get('id'),
					'username' => $this->request->getPost('username'),
					];
					if($this->request->getPost('password') != ''){
						$newData['password'] = $this->request->getPost('password');
					}
				$model->save($newData);

				session()->setFlashdata('success', 'Met succes geüpdate.');
				return redirect()->to('/profile');

			}
		}

		$data['user'] = $model->where('id', session()->get('id'))->first();
		echo view('templates/header', $data);
		echo view('pages/profile');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------


	public function logout(){
		session()->destroy();
		return redirect()->to('/');
	}
}

<?php 
namespace App\Controllers;

class Login extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->userModel = model('UserModel');
    }  
  
    public function authentication() 
    {
        $rules = [
            'username'  => 'required|min_length[4]|max_length[20]|pattern[[a-zA-Z0-9-=?!@:.]+]',
            'password'  => 'required|min_length[6]'
        ];
        
        $username = $this->request->getVar('username', FILTER_SANITIZE_STRING);
        $password = $this->request->getVar('password', FILTER_SANITIZE_STRING);
      
        $user = $this->userModel->where('username', $username)->first();
      
        if($this->validate($rules) && $user && password_verify($password, $user->password)) {
            $this->session->set(
                'user', 
                $user
            );
        }
      
        return redirect()->back()->with(
            'errors', 
            $this->validator->getErrors()
        )->withInput();
    }
  
    public function logout()
    {     
        session()->destroy();
        return redirect()->to('/')->with(
            'success', 
            'Je bent met succes uitgelogd!'
        );
    }
}
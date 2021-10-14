<?php 
namespace App\Controllers\Admin;

use App\Models\UserModel;
use App\Controllers\BaseController;

class User extends BaseController
{
    public function __construct() {
        $this->userModel = model('UserModel');
    }

    public function getUser($username) {
      
        $user = $this->userModel->where('username', $username)->first();
        if(!$user) {
            return redirect()->back();
        }
      
        echo view('pages/admin/user', ['user' => $user]);
    }
}
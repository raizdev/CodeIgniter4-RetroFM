<?php 
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LoginFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $userModel = model('UserModel');
      
        if(session()->has('user') && 
           $userModel->find(session()->get('user')->id)->force_logoff == 1) 
        {
            $userModel->set('force_logoff', '0')->update();
            session()->destroy();
            return redirect()->to('/');
        }

        if(!session()->has('user')){
            return redirect()->to('/');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    { 
        
    }
}
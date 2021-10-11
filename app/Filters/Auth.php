<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
    
        $userModel = model('UserModel');

       if(session()->has('user') && 
           $userModel->find(session->get('user')->adminlogout) == 1)
        {
            $userModel->set('force_logoff', '0')->update();
            session()->destroy();
            return redirect()->to('/');
        }
      
        // Do something here
        if(! session()->get('isLoggedIn')){
          return redirect()->to('/');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}

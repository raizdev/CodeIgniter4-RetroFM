<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LoggedFilter implements FilterInterface 
{

    public function before(RequestInterface $request, $arguments = null) 
    {
        // Make sure the logged in user cannot go to unauth places.
        if(session()->has('user')) {
            return redirect()->to('/');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) 
    {
        
    }

}
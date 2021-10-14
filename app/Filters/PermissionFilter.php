<?php 
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class PermissionFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        echo '<pre>';
        print_r($request);
        exit;
    }


    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}
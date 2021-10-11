<?php 
namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view('pages/session/dashboard');
    }
}
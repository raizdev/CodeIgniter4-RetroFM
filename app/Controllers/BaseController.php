<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];
	
	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		$db = \Config\Database::connect();
		
		$query = $db->table('users')->where('id', session()->get('id'))->get(1);
		$builder = $db->table('users');
		
		foreach ($query->getResult() as $row) 
		{
			
			$data = array(
				'adminlogout' =>  $row->force_logoff,

			);

			if ($data['adminlogout'] == 1) 
			{
				$builder->set('force_logoff', '0');
				$builder->where('id', session()->get('id'));
				$builder->update();
				session()->destroy();
				return redirect()->to('/');
			}
		}
	}
}

<?php namespace App\Models;

use CodeIgniter\Model;

class VerzoekModel extends Model {

  protected $table = 'habnet_verzoeken';
  protected $allowedFields = ['habnet_naam', 'verzoeken'];
  protected $beforeInsert = ['beforeInsert'];

  
  protected function beforeInsert(array $data){
    $data['data']['habnet_naam'] = $data['data']['habnet_naam'];
    $data['data']['verzoeken'] = $data['data']['verzoeken'];
    $data['data']['userlook'] = session()->get('loggedlook');

    return $data;
  }
}
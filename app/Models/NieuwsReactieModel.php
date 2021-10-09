<?php
namespace App\Models;

class NieuwsReactieModel extends \CodeIgniter\Model
{

    protected $primaryKey = 'id';
    protected $table      = 'habnet_nieuws_reacties';
    protected $returnType = 'object';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->db = \Config\Database::connect();
        $this->orderBy('id', 'desc');
    }
}

<?php

namespace App\Models;

class NiewsModel extends \CodeIgniter\Model
{

    protected $primaryKey = 'id';
    protected $table      = 'habnet_nieuws';
    protected $returnType = 'object';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->db = \Config\Database::connect();
        $this->orderBy('id', 'desc');
    }
}
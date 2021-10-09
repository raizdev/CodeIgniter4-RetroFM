<?php
namespace App\Models;

class EventModel extends \CodeIgniter\Model
{

    protected $primaryKey = 'id';
    protected $table      = 'habnet_events';
    protected $returnType = 'object';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->db = \Config\Database::connect();
        $this->orderBy('id', 'desc');
    }
}
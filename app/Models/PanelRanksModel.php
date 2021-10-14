<?php 
namespace App\Models;

use CodeIgniter\Model;

class PanelRanksModel extends Model {

    protected $primaryKey = 'id';
    protected $table = 'panelranks';
    protected $returnType = 'object';

    protected $allowedFields = ['id', 'djrank'];
}
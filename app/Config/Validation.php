<?php 
namespace Config;

class Validation
{
    public $ruleSets = [
        \CodeIgniter\Validation\Rules::class,
        \CodeIgniter\Validation\FormatRules::class,
        \CodeIgniter\Validation\FileRules::class,
        \CodeIgniter\Validation\CreditCardRules::class,
        \App\Validation\CustomValidation::class
    ];

    public $templates = [
          'list'   => 'CodeIgniter\Validation\Views\list',
          'single' => 'CodeIgniter\Validation\Views\single'
    ];
}

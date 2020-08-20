<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class FormModel extends Model
{
    protected $table = 'form';
 
    protected $allowedFields = ['name', 'phone', 'email', 'message'];

    protected $validationRules = [
        'name'     => 'required|alpha_numeric_space|min_length[3]',
        'email'        => 'required|valid_email|is_unique[form.email]|min_length[10]',
        'phone'     => 'required|max_length[20]|min_length[10]',
        'message'     => 'required|alpha_numeric_space|min_length[3]',
    ];

    protected $validationMessages = [
        'email'        => [
            'is_unique' => 'Sorry. That email has already been taken. Please choose another.'
        ],
        // 'name'        => [
        //     'min_length' => 'ad 3 herfden kicikdir'
        // ]
    ];
    
}
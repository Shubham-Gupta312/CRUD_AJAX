<?php

namespace App\Models;
use CodeIgniter\Model;

class StudentModel extends Model{
    protected $table = 'crud_ajax';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'email',
        'phone',
        'course'
    ];
}

?>
<?php
namespace App\Models;
use CodeIgniter\Model;

class students extends Model
{
    protected $table = 'names';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'stdid',
        'image',
        'name',
        'gender',
        'branches',
        'lastname',
        'tell'
    ];
}
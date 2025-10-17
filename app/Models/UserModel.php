<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{

    protected $table = "users";
    protected $primaryKey = "id";
    protected $returnType = "array";
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'name',
        'email',
        'password_hash',
        'role',
        'status',
        'confirm_email_at',
        'image_path'
    ];

    protected $delete_field = "deleted_at";
    protected $create_field = "create_at" ;
    protected $updatedField = 'updated_at';

}

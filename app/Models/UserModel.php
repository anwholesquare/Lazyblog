<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = [
        'user_name', 'email', 'token', 'full_name', 'bio', 'image', 'status', 'registration_datetime', 'last_login'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'registration_datetime';
    protected $updatedField  = 'last_login';
}

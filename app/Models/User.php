<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $fillable = ['id', 'email', 'password', 'nama', 'jenis_kelamin', 'no_telp', 'roles'];
}

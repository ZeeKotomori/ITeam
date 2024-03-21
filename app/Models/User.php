<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    use HasUuids;
    protected $table = 'users';
    protected $fillable = [
        'id',
        'email',
        'password',
        'nama',
        'jenis_kelamin',
        'email_verified_at',
        'no_telp',
        'roles'
    ];

    public function Likes() : HasOne
    {
        return $this->hasOne(Likes::class, 'user_id');
    }

    public function Comment() : HasMany
    {
        return $this->hasMany(Komentar::class);
    }
    public function activeOTP()
    {
        return $this->hasOne(UserOTP::class,'user_id')->where('expired_at','>', 'now()');
    }
}


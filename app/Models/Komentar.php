<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model {
    use HasFactory;
    protected $table = 'komentar';
    protected $fillable = [
        'id',
        'produk_id',
        'user_id',
        'komentar',
        'created_at',
        'updated_at'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function produk(){
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}

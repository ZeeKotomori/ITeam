<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    use HasFactory;
    protected $table = 'likes';
    protected $fillable = ['id', 'produk_id' , 'user_id','created_at', 'updated_at'];

    public function produk(){
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}

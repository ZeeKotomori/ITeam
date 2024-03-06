<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = [
        'id',
        'nama',
        'image',
        'link',
        'tipeimage',
        'image_path',
        'created_at',
        'updated_at'
    ];

    public function likes() : HasMany
    {
        return $this->hasMany(Likes::class);
    }
    public function comments() : HasMany
    {
        return $this->hasMany(Komentar::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $table = 'admins';
    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'username_admin',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    public function produks()
    {
        return $this->hasMany(Produk::class, 'id_admin', 'id_admin');
    }
}
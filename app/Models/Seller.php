<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = 'sellers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'toko',
        'email',
        'phone',
        'npwp',
        'alamat',
        'password',
        'verify',
        'photo',
        'doc'
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'jumlah_pesanan', 'barang', 'harga', 'keterangan', 'kurir','menu'];

    public function kurir()
    {
        return $this->belongsTo(User::class, 'kurir');
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}

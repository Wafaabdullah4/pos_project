<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'nama_makanan', 'kelas', 'harga', 'jenis', 'stock', 'content',];

    public function kurir()
    {
        return $this->belongsTo(User::class, 'kurir');
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function menu()
    {
        return $this->hasMany(Menu::class);
    }
}

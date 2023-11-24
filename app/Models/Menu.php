<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'nama_makanan', 'kelas', 'harga','jenis', 'content',];
    public function menu()
    {
        return $this->hasMany(Menu::class);
    }

}

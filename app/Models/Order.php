<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{


    use HasFactory;

    protected $fillable = [
        'user_id', 'menu_id', 'quantity', 'total_harga', 'kurir_id'
    ];

    // Define the relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with Menu
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }



    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = ['image','name', 'description', 'price'];
    protected $table = 'foods';


    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

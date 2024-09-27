<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasMany(User::class);
    }
    public function orders(){
        return $this->hasMany(orders_items::class, 'item_id');
    }

    protected $fillable = [
        'name',
        'description',
        'size',
        'price',
        'Features',
        'deliver',
        'materials',
        'count',
        'image',
        'category'
    ];
};




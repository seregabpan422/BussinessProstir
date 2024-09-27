<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class orders extends Model
{
    use HasFactory;
    
    public function orders_items(){
        return $this->hasMany(orders_items::class, 'order_id');
    }
    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}







}

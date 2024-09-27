<?php

namespace App\Models;
use App\Models\Items;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders_items extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->belongsTo(Orders::class, 'id');
    }

    public function items(){
      

     return $this->belongsTo(Items::class, 'item_id');
    }

}

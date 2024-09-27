<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\orders_items;

class OrdersItemsController extends Controller
{
    function destroyItemOrder( $id){
        $orders = Orders::where('user_id', auth()->user()->id)->where('status', 'waiting')->first();
        $orderItem = orders_items::findOrFail($id);
        $orderItem->delete();
        return redirect()->route('order-detail', ['id' => $orders->id]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\orders;
use App\Models\Items;
use App\Models\orders_items;
use Illuminate\Http\Request;
use App\Models\Admin;

class OrdersController extends Controller
{

    function createOrder(Request $request, $id){
        $data = $request->validate([
            'count' => 'nullable',
            'summary' => 'nullable|numeric|min_digits:3'
        ]);
        $user = auth()->user();
    
        $number = 0;
        function generateNumber(){
            $number = rand(10000, 99999);
            return $number .'.'. $number;
        }
        $orders = Orders::where('user_id', $user->id)->where('status', 'waiting')->first();
        if(!$orders){
    
            $orderNumber = generateNumber();
            $order = new Orders();
            $order->user_id = $user->id;
          ;
            if(Orders::where('order_number', $orderNumber)->count()>0){
                $orderNumber = generateNumber();
            } else {
                $order->order_number = $orderNumber;
            }
            $order->order_number = $orderNumber;
            $order->status = 'waiting';
            $order->totalSum = 0;
            $order->save();
    
            

            $orderItem = new orders_items();
    
            $orderItem->user_id = $user->id;
            $orderItem->order_id = $order->id;
            $orderItem->item_id = $id;
            $orderItem->price = $data['summary'];
            $orderItem->count = $data['count'];
            $orderItem->order_number = $order->order_number;
            $orderItem->save();
        } else {

            $order = orders::where('user_id', $user->id)->where('status', 'waiting')->first();
            
            $orderItem = new orders_items();
            $orderItem->order_id = $orders->id;
            $orderItem->user_id = $user->id;
            $orderItem->item_id = $id;
            $orderItem->price = $data['summary'];
            $orderItem->count = $data['count'];
            $orderItem->order_number = $order->order_number;
            $orderItem->save();
        }
    
        return redirect()->route('cab-page')->with('success','Success')->with('order', $orders);
    }

    function totalSum (Request $request, $id){
        $user = auth()->user();
        $data = $request->validate([
            'totalSum' => 'required'
            ]);
        $orders = Orders::where('user_id', $user->id)->where('status', 'waiting')->first();
         
        if($orders){
            $orders->status = 'confirmed';
            $orders->totalSum = $data['totalSum'];
            $orders->save();
        } else{
    
        }
        
        return redirect()->route('cab-page')->with('success','Create')->with('order', $orders);
    }



    function destroyOrder($id){
        $orders = Orders::where('user_id', auth()->user()->id)->where('status', 'waiting')->first();
        $orders->delete();
        return redirect()->route('cab-page');
    }

    function showOrders(){


        $admin = Admin::where('user_id', auth()->user()->id)->first();
        if($admin && $admin->count() > 0){
            return view('profile.edit', ['order' => Orders::latest()->get(), 'order_item' => orders_items::latest()->paginate(12) ])->with('admin', $admin);
        }
        else{
            return view('profile.edit', ['order' => Orders::latest()->get(), 'order_item' => orders_items::latest()->paginate(12) ])->with('admin', $admin);
        }
    }

    public function orderDetails($id){
        return view('order')->with(['items' => Items::get(), 'orders' => Orders::findOrFail($id)]);
    }
}

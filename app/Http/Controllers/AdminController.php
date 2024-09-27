<?php

namespace App\Http\Controllers;
use App\Models\Items;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function ItemShow(){
        $items = Items::paginate(10);
        return view("item-list", compact("items"));
    }
}

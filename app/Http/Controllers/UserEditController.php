<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserEditController extends Controller
{
    public function EditUser(Request $request, $id){
    $user = User::findOrFail($id);

    // Валідація запиту
    $data = $request->validate([
        'name' => 'nullable|string|max:255',
        'email' => 'nullable|string|email|max:255|unique:users,email,' . $id,
        'phone' => 'nullable|string|size:12', 
    ]);
    if ($request->filled('name')) {
        $user->name = $data['name'];
    }

    if ($request->filled('email')) {
        $user->email = $data['email'];
    }

    if ($request->filled('phone')) {
        $user->phone = $data['phone'];
    }

    $user->save();
    return redirect()->route('cab-page');
}
}

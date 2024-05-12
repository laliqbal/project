<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class KelolaUserController extends Controller
{
    public function index()
    {
        $data = User::all(); // Mengambil semua data user
        return view('pages.admin.kelolauser', compact('data'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.admin.edituser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }
}

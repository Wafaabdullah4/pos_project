<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;


class UserController extends Controller
{


    public function index()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }
    public function siswa()
    {
        $users = User::all();
        return view('admin.siswa', compact('users'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'kelas' => 'required',
            'jk' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'type' => 'required',

        ]);

        $users = new User([
            'name' => $request->input('name'),
            'kelas' => $request->input('kelas'),
            'jk' => $request->input('jk'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'type' => $request->input('type'),

        ]);

        $users->save();

        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    public function show(User $users)
    {
        return view('admin.show', compact('user'));
    }
    public function edit($id)
    {
        // Retrieve the user from the database using the $id
        $user = User::find($id);

        // Pass the $user variable to the view
        return view('admin.edit', compact('user'));
    }

    public function update(Request $request, User $users)
    {
        $request->validate([
            'name' => 'required',
            'kelas' => 'required',
            'jk' => 'required',
            'email' => 'required|email|unique:users,email,' . $users->id,
            'password' => 'nullable|min:6',
            'type' => 'required',

        ]);

        $users->update([
            'name' => $request->input('name'),
            'kelas' => $request->input('kelas'),
            'jk' => $request->input('jk'),
            'email' => $request->input('email'),
            'password' => $request->filled('password') ? Hash::make($request->input('password')) : $users->password,
            'type' => $request->input('type'),
        ]);

        return redirect()->route('admin.index')->with('success', 'User updated successfully');
    }

    // public function destroy(User $users)
    // {
    //     $users->delete();

    //     return redirect()->route('admin.index')->with('success', 'User deleted successfully');
    // }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $users = User::findOrFail($id);


        //delete post
        $users->delete();

        //redirect to index
        return redirect()->route('admin.siswa')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

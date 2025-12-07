<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // DASHBOARD
    public function dashboard()
    {
        // jumlah user aktif
        $userAktif = User::where('status', 'active')->count();

        // jumlah admin
        $jumlahAdmin = User::where('role', 'admin')->count();

        // 5 user terbaru
        $userTerbaru = User::orderBy('created_at', 'DESC')->take(5)->get();

        return view('dashboard.index', compact('userAktif', 'jumlahAdmin', 'userTerbaru'));
    }


    // INDEX / LIST USER
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate(10);
        return view('users.index', compact('users'));
    }

    // FORM CREATE
    public function create()
    {
        return view('users.create');
    }

    // STORE DATA USER
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|min:3',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role'     => 'required',
            'status'   => 'required'
        ]);

        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'role'      => $request->role,
            'nomor_hp'  => $request->nomor_hp,
            'alamat'    => $request->alamat,
            'status'    => $request->status
        ]);

        return redirect()->route('users.index')
            ->with('success', 'User berhasil ditambahkan');
    }

    // FORM EDIT
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // UPDATE USER
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'  => 'required|min:3',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'role'  => 'required',
            'status'=> 'required'
        ]);

        $user->update($request->all());

        return redirect()->route('users.index')
            ->with('success', 'User berhasil diperbarui');
    }

    // DELETE
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'User berhasil dihapus');
    }
}

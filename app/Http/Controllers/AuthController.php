<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required|in:pengguna,admin',
        ]);

        $credentials = $request->only('username', 'password');
        $role = $request->role;

        $user = $role === 'pengguna' ? Pengguna::where('Username', $credentials['username'])->first() : Admin::where('Username', $credentials['username'])->first();

        if ($user && Hash::check($credentials['password'], $user->Password)) {
            Session::put('user', ['id' => $user->id, 'username' => $user->Username, 'role' => $role]);
            return redirect('/');
        }

        return redirect()->back()->with('error', 'Username atau password salah.');
    }

    public function showSignUp()
    {
        return view('signup');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'username' => 'required|string|max:50|unique:pengguna,Username|unique:admin,Username',
            'password' => 'required|string|min:6',
            'role' => 'required|in:pengguna,admin',
        ]);

        $model = $request->role === 'pengguna' ? new Pengguna() : new Admin();
        $model->Nama_Pengguna = $request->nama;
        $model->Username = $request->username;
        $model->Password = Hash::make($request->password);
        $model->save();

        Session::put('user', ['id' => $model->id, 'username' => $model->Username, 'role' => $request->role]);
        return redirect('/');
    }

    public function logout()
    {
        Session::forget('user');
        return redirect('/login');
    }
}
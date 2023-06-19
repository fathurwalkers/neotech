<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use App\Models\Login;

class AuthLogin extends Component
{
    public Login $login;
    public String $username;
    public String $password;

    protected $rules = [
        'username' => 'required',
        'password' => 'required',
    ];

    public function mount()
    {
        $this->login = new Login;

        $session_users = session('data_login');
        if ($session_users != null) {
            return redirect()->route('dashboard')->with('status', 'Anda telah login, tidak dapat beralih ke Halaman ini.');
        }
    }

    public function login()
    {
        $this->validate();
        $username = $this->username;
        $password = $this->password;
        $data_login = Login::where('login_username', $username)->first();
        // dd($data_login);
        if ($data_login == null) {
            return redirect()->route('login')->with('status', 'Maaf username yang anda masukkan tidak terdaftar!');
        }
        switch ($data_login->login_level) {
            case 'admin':
                $cek_password = Hash::check('admin', $data_login->login_password);
                if ($data_login) {
                    if ($cek_password) {
                        $users = session(['data_login' => $data_login]);
                        return redirect()->route('dashboard')->with('status', 'Berhasil Login!');
                    }
                }
                break;
            case 'user':
                $cek_password = Hash::check($password, $data_login->login_password);
                if ($data_login) {
                    if ($cek_password) {
                        $users = session(['data_login' => $data_login]);
                        return redirect()->route('dashboard')->with('status', 'Berhasil Login!');
                    }
                }
                break;
        }
        return back()->with('status', 'Maaf password yang anda masukkan salah!')->withInput();
    }

    public function render()
    {
        return view('livewire.auth-login')
        ->extends('layouts.auth-layout')
        ->section('main-content');
    }
}

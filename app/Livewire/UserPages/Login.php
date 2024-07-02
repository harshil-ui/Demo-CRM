<?php

namespace App\Livewire\UserPages;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function login(Request $request)
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Config::set('database.connections.cluster.database', Auth::user()->cluster);
            return $this->redirect('/', navigate: true);
        }

        return 'Invalid credentials';
    }

    public function render()
    {
        return view('livewire.user-pages.login');
    }
}

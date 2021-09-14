<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index($message = null)
    {
        $mensagem = ['msg' => !empty($message) ? $message : ''];
        return view('login', compact('mensagem'));
    }

    public function entry(Request $req)
    {
        $dados = $req->all();
        $dados['email'] = mb_strtoupper($dados['email']);
        
        if(Auth::attempt(['email' => $dados['email'], 'password' => $dados['password']])){
            $req->session()->regenerate();
            // return redirect()->intended('home');
            return redirect()->route('home');
        }
        return redirect()->route('login.index', ['msg' => 'Credenciais inválidas']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}

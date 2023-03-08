<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        //TODO Сделать красивое сообщение о множественных попытках логина
        $credentials = $request->only(['email', 'password']);
        // $remember = $request->only('remember');

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['email' => 'Неверный e-mail']);
    }

    public function logout(Request $request)
    {
        Auth::logout(); // выход текущего пользователя
        $request->session()->invalidate(); // недействительный сеанс пользователя
        $request->session()->regenerateToken(); // генерация нового CSRF-токена для защиты от атак межсайтовой подделки запросов (CSRF)
        return redirect('/'); // перенаправление на главную страницу приложения после выхода из приложения
    }
}

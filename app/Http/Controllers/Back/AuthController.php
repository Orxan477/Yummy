<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('back.auth.login');
    }
    public function loginPost(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ], [
            'required' => ':attribute alanı zorunludur.',
            'email' => 'Geçerli bir email adresi girin.',
            'min' => 'Şifre en az 8 karakterden oluşmalıdır.',
        ]);
    
        if ($validator->fails()) {
            return redirect('/admin/login')->withErrors($validator)->withInput();
        }
    
        $credentials = $request->only('email', 'password');
        $remember= $request->only('remember');
    
        if (Auth::attempt($credentials,$remember)) {
            // Kimlik doğrulandı, giriş başarılı
            return redirect()->intended('/admin'); // Başarılı giriş sonrası yönlendirme
        }
    
        // Eğer kimlik doğrulama başarısız ise
        return redirect('/admin/login')->withErrors([
            'general' => 'Kullanıcı adı veya şifre hatalı',
        ])->withInput();
    }
    
    public function register(){
        return view('back.auth.register');
    }
    public function registerPost(Request $request){
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|same:password_confirmation',
        ]);
    
        if ($validator->fails()) {
            return redirect('/admin/register')
                        ->withErrors($validator)
                        ->withInput();
        }
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'created_at' => new DateTime('now', new DateTimeZone('Asia/Baku')),
        ]);

        return response()->json([
            'message' => 'Kayıt başarılı!',
            'user' => $user,
        ], 201);
    }
}

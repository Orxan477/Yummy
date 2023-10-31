<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DateTime;
use DateTimeZone;

class AuthController extends Controller
{
    public function login(){
        return view('back.auth.login');
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

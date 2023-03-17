<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserLoginRequest;
use Auth;

class UserLoginController extends Controller
{
    public function registerPage() {
        return view('website.register');
    }
    public function register(UserLoginRequest $request) {
        
        User::create([
            "name" =>$request->name,
            "phone" =>$request->phone,
            "country" =>$request->country,
            "email" =>$request->email,
            "password" =>bcrypt($request->password),
        ]);


        return redirect()->back()->with(['success' => "signup Successfuly"]);
    }

    public function loginUser(request $request) {

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route("website");
        }
        return redirect()->route("website")->with(['error' => "كلمة المرور او اسم المستخدم غير صحيحة"]);

    }
    public function logout() {

        Auth::logout();
        return redirect()->route("website");

    }
}

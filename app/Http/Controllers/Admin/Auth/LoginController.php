<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
       if($request->getMethod() == 'GET'){
           return view('admin.login');
       }
       $checkData = $request->only(['email','password']);

       if(Auth::guard('admin')->attempt($checkData)){
           return redirect()->route('dashboard');
       }else{
           return redirect()->back()->withInput();
       }
    }


}

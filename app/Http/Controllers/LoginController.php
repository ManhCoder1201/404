<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\user;

use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
     public function getLogin(){
         return view ('login');
     }
    public function postLogin(Request $request){
        $arr = ['email'=>$request->email,'password'=>$request->password];
        if(Auth::attempt($arr)){
            if(Auth::user()->role =='admin'){
                return view ('admin.index');
            }
            else {
                return view('index');
            }
            
            
        }
        else{
            dd('Login failed');
        }
    }
    public  function getLogout(){
        Auth::logout();
        return redirect()->intended('/');
    }
    public function postRegister(Request $request){
        $user = new user;
        $user->name = $request->name;
        $user->email = $request-> email;
        $user->password = Hash::make($request->password);
        $user->role = 'user';
        $user->save();
        // return redirect()->with('thanh conng','tao thanh công');//
        return redirect()->intended('/');
    }
}

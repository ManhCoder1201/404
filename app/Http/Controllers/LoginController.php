<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\user;
class LoginController extends Controller
{
     public function getLogin(){
         return view ('login');
     }
    public function postLogin(Request $request){
        $arr = ['email'=>$request->email,'password'=>$request->password];
        if(Auth::attempt($arr)){
            return view('index');
        }
        else{
            dd('Login failed');
        }
    }
    public  function getLogout(){
        Auth::logout();
        return redirect()->intended('login');
    }
    public function postRegister(Request $request){
        $user = new user;
        $user->name = $request->name;
        $user->email = $request-> email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect()->back()->with('thanh conng','tao thanh công');
    }
}

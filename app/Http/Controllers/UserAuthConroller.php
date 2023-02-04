<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthConroller extends Controller
{
    public function showlogin($guard){
        return response()->view('cms.auth.login',compact('guard'));
       }



    public function login (Request $request){

        $validator = Validator($request->all() ,[
            'email' => 'required|email' ,
            'password' => 'required|string',
        ]);

        $credintials =[
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ] ;
        if(! $validator->fails()){
            if(Auth::guard($request->get('guard'))->attempt($credintials)){
                return response()->json(['icon' => 'success' , 'title' =>'Login is Succesfully' ] , 200);
            }
            else {
                return response()->json(['icon' => 'error' , 'title' =>'Login is Failed' ] , 400);

            }
        }
        else{
            return response()->json(['icon' => 'error' , 'title' =>$validator->getMessageBag()->first() ] , 400);
        }

    }
       public function logout(Request $request){
        $guard = auth('admins')->check() ? 'admins' : "web";
        Auth::guard($guard)->logout();
        $request->session()->invalidate();
        return redirect()->route('view.login' , $guard);


      }
}

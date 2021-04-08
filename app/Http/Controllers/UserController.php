<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\utilisateurs;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(){
        return view('inscription');
    }
    public function login(){
        return view('connexion');
    }

    public function create(Request $request){
        $request->validate([
            'FullName'=>'required',
            'email'=>'required',
            'classe'=>'required',
            'phoneNumber'=>'required',
            'emergencyNumber'=>'required',
            'password'=>'required'
        ]);

        $utilisateurs=new utilisateurs();
        $utilisateurs->FullName=$request->FullName;
        $utilisateurs->email=$request->email;
        $utilisateurs->classe=$request->classe;
        $utilisateurs->phoneNumber=$request->phoneNumber;
        $utilisateurs->emergencyNumber=$request->emergencyNumber;
        $utilisateurs->password=$request->password;
        $utilisateurs->password=Hash::make($request->password);
        $query= $utilisateurs->save();

        if($query){
            return back()->with('success','compte cree avec success');
        }
        else{
            return back()->with('fail','veuillez bien remplir le formulaire');
        }
    }


    public function connexion(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $utilisateurs=utilisateurs::where('email','=',$request->email)->first();
        if($utilisateurs){
            if(Hash::check($request->password, $utilisateurs->password)){
                if($utilisateurs->email!='Amaradouk10@gmail.com'){
                    if($utilisateurs->classe!='prof'){
                        return redirect('classe');
                    }else{
                        return redirect('prof');
                    }
                }else{
                    return redirect('inscription');
                }
            }else{
                return back()->with('fail','mot de passe incorrect');
            }
        }else{
            return back()->with('fail','compte inexistant');
        }
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\matiere;
use App\Models\note;
use Illuminate\Http\Request;
use App\Models\utilisateurs;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DirecteurController extends Controller
{
    public function register(){
        return view('inscription');
    }
    public function login(){
        return view('connexion');
    }
    public function profview(){
        $utilisateurs=DB::select('select*from utilisateurs where role=\'prof\' ');
        Return view('directeur-dashbord',['utilisateurs'=>$utilisateurs]);
    }
    public function studentview(){
        $utilisateurs=DB::select('select*from utilisateurs where role=\'eleve\' ');
        Return view('AddStudent',['utilisateurs'=>$utilisateurs]);
    }
    public function deletestudent($id){
        DB::delete('delete from utilisateurs where id = ?', [$id]);
        Return redirect('student');
    }
    public function deleteprof($id){
        DB::delete('delete from utilisateurs where id = ?', [$id]);
        Return redirect('dashbord');
    }
    public function addMatiere(Request $request){
        $request->validate([
            'matiereName'=>'required',
            'coefficient'=>'required'
        ]);
        $matiere=new matiere();
        $matiere->matiereName=$request->matiereName;
        $matiere->coefficient=$request->coefficient;
        $query= $matiere->save();
        if($query){
            return back()->with('success','matière ajoutée');
        }
        else{
            return back()->with('fail','veuillez bien remplir le formulaire');
        }
    }

    public function create(Request $request){
        $request->validate([
            'FullName'=>'required',
            'email'=>'required',
            'role'=>'required',
            'classe'=>'required',
            'phoneNumber'=>'required',
            'password'=>'required'
        ]);

        $utilisateurs=new utilisateurs();
        $utilisateurs->FullName=$request->FullName;
        $utilisateurs->email=$request->email;
        $utilisateurs->role=$request->role;
        $utilisateurs->classe=$request->classe;
        $utilisateurs->phoneNumber=$request->phoneNumber;
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
                    return redirect('dashbord');
                }
            }else{
                return back()->with('fail','mot de passe incorrect');
            }
        }else{
            return back()->with('fail','compte inexistant');
        }
    }

    public function noteManager(){
        $utilisateurs=DB::select('select*from utilisateurs where role=\'eleve\' ');
        $matiere=DB::select('select *from matieres');
        Return view('note',['utilisateurs'=>$utilisateurs,'matiere'=>$matiere]);
    }

    public function addNote(Request $request){
        $request->validate([
            'utilisateur_id'=>'required',
            'noteValue'=>'required',
            'matiere_id'=>'required'
        ]);

        $note=new note();
        $note->noteValue=$request->noteValue;
        $note->matiere_id=$request->matiere_id;
        $note->utilisateur_id=$request->utilisateur_id;
        $query= $note->save();

        if($query){
            return back()->with('success','note enregistrée avec succès');
        }
        else{
            return back()->with('fail','réesseyez a nouveau');
        }
    }

}

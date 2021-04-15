<?php

namespace App\Http\Controllers;

use App\Models\matiere;
use App\Models\note;
use Illuminate\Http\Request;
use App\Models\utilisateurs;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function noteview(){
        $note=DB::select('select * from notes left join matieres on matieres.id=matiere_id ');
        $matiere=DB::select('select *from matieres');
        Return view('student-profile',['note'=>$note,'matiere'=>$matiere]);
    }
}

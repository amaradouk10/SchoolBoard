<?php

namespace App\Http\Controllers;

use App\Models\image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function imageUpload(Request $request){
        $request->validate([
            'image'=>'required'
        ]);
        $r ='storage/app/public/'.$request->file()->store('public');
        $image= new image();
        $r=$image->images=$request->image;
        $image->save();
        return view('student-profile');
    }

}

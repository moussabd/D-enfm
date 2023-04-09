<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emailSave;
class MyController extends Controller
{
    //
    public function accueil(){
        return view("index");
    }
    public function savemail(Request $request){
        echo 'bonn';
        $request->validate([
            'email'=>['required']

       ]);
       $emailsave=new emailSave();
       $emailsave->email = $request->email;
       $emailsave->save();
    }
}
?>

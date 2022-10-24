<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;
use App\Models\promotion;

class MainController extends Controller
{
    //
    
    public function index(){
        $data = promotion::all();
        return view('index', compact("data"));
    }
    
    public function add_promotion(){
        return view('add_promotion');
    }

    public function insert_promotion(Request $req){
        $obj = new promotion();
        $obj->nom = $req->nom;
        $obj->save();
        return redirect('promotions');
    }

    public function edit_promotion($id){
        $promotion = promotion::where('id', $id)->first();
        return view('edit_promotion', compact('promotion'));
    }

    public function update_promotion(Request $req){
        $my_obj = promotion::where('id', $req->id)->first();
        $my_obj->nom = $req->nom;
        $my_obj->save();
        return redirect(route('index'));
    }
}

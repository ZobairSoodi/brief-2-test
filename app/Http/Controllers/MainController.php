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
}

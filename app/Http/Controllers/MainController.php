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

    public function edit_promotion(Request $req){
        $data = promotion::where('id', $req->id)->first();
        return view('edit_promotion', compact("data"));
    }

    public function update_promotion(Request $req){
        $promo = promotion::where('id', $req->id)->first();
        $promo->nom = $req->nom;
        $promo->save();
        return redirect('promotions');
    }

    public function delete_promotion(Request $req){
        promotion::where('id', $req->id)->delete();
        return redirect('promotions');
    }

    public function show_appr_by_prom($id){
        // $prom = promotion::where('id', $id)->first();
        $appr = Apprenant::select(
            'promotions.id as id_prom',
            'apprenants.id as id_apppr',
            'promotions.nom as nom_prom',
            'apprenants.nom as nom_appr'
        )
        ->rightJoin('promotions', 'promotions.id', '=', 'apprenants.promo_id')
        ->where('promotions.id', $id)
        ->get();
        return view('appr_by_prom', compact('appr'));
    }
}

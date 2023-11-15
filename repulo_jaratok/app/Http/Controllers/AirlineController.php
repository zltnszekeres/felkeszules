<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    public function index(){
        
        return Airline::all();
    }

    public function show($id){
        $Arline = response()->json(Airline::find($id));
        return $Arline;
    }

    public function store(Request $request){
        $Arline = new Airline();
        $Arline->name = $request->name;
        $Arline->country = $request->country;
        
        
        $Arline->save();
    }

    public function update(Request $request, $id){
        $Arline = Airline::find($id);
        $Arline->name = $request->name;
        $Arline->country = $request->country;
        
        $Arline->save();
    }

    public function destroy($id){


        Airline::find($id)->delete();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tshirt;

class TshirtController extends Controller
{
    public function index(){

        return response()->json(Tshirt::orderBy('id', 'DESC')->get());

    }


    public function show(Tshirt $tshirt){
        return response()->json($tshirt);
    }

    public function store(Request $request){
        $request->validate([
            'tshirtBrand' => 'string|required',
            'fitType' => 'string|required',
            'size' => 'string|required',
            'price' => 'numeric|required'
            
        ]);

        $tshirt = Tshirt::create($request->only('tshirtBrand','fitType','size','price'));

        return response()->json($tshirt);

    }


    public function edit(Tshirt $tshirt)
    {
        //
    }
    


    public function update(Request $request, Tshirt $tshirt){
        $tshirt->update($request->only('tshirtBrand','fitType','size','price', ));

        return response()->json($tshirt);

    }

    public function destroy(Tshirt $tshirt){


        $tshirtBrand = $tshirt->tshirtBrand;

        $tshirt->delete();

        return response()->json([
            'deleted' => true,
            'message' =>"Tshirt Deleted."
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\wisata;
use Illuminate\Http\Request;

class GetIdController extends Controller
{
    public function getid (Request $request){
        $id = $request->id;
        return wisata::find($id); 
    }
}
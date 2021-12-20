<?php

namespace App\Http\Controllers;

use App\Models\kuliner;
use Illuminate\Http\Request;

class GetIdController extends Controller
{
    public function getid (Request $request){
        $id = $request->id;
        return kuliner::find($id); 
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stallowner;


class Stallcontroller extends Controller
{
    //
    public function addclient(){
        return view ('addclient');
    }

    public function saveclient(Request $request){
        $data = $request->validate([
            'Stall_owner_name' => 'required',
            'Cellphone_number' => 'required',
            'Stall_number' => 'required',
            'Stall_type' => 'required',
        ]);
        $newclient = stallowner::create($data);
        return redirect(route('add.client'));
        

    }
}

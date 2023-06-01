<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Vine;
use Illuminate\Http\Request;

class VineController extends Controller
{
    public function index()
    {
        $vines = Vine::all();

        return view('guest.vines.index', compact('vines'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function show(Vine $vine)
     {
         return view('guest.vines.show', compact('vine'));
     }
}

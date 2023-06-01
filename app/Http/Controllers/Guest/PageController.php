<?php

namespace App\Http\Controllers;

use App\Models\Vine;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

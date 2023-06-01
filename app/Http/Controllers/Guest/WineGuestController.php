<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use Illuminate\Http\Request;

class WineGuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wines = Wine::all();

        return view('guest.wines.index', compact('wines'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Wine $wine)
    {
        return view('guest.wines.show', compact('wine'));
    } 
}

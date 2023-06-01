<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Winery;
use Illuminate\Http\Request;

class WineryGuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wineries = Winery::all();

        return view('guest.wineries.index', compact('wineries'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Winery $winery)
    {
        return view('guest.wineries.show', compact('winery'));
    }
}

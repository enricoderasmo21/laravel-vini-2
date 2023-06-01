<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use App\Models\Winery;
use Illuminate\Http\Request;

class WineryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wineries = Winery::all();

        return view('admin.wineries.index', compact('wineries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wineries = Winery::all();

        return view('admin.wineries.create', compact('wineries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $request->all();

        $newWinery = new Winery();
        $newWinery->fill($formData);

        $newWinery->save();

        return redirect()->route('admin.wineries.show', $newWinery->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Winery  $winery
     * @return \Illuminate\Http\Response
     */
    public function show(Winery $winery)
    {
        $wines = Wine::all();

        return view('admin.wineries.show', compact('winery', 'wines'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Winery  $winery
     * @return \Illuminate\Http\Response
     */
    public function edit(Winery $winery)
    {
        $wines = Wine::all();

        return view('admin.wineries.edit', compact('winery', 'wines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Winery  $winery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Winery $winery)
    {
        $formData = $request->all();

        $winery->update($formData);
        $winery->save();

        return redirect()->route('admin.wineries.show', $winery);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Winery  $winery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Winery $winery)
    {
        $winery->delete();
        
        return redirect()->route('admin.wineries.index');
    }
}

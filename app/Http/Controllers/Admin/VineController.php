<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vine;
use App\Models\Wine;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class VineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vines = Vine::all();

        return view('admin.vines.index', compact('vines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wines = Wine::all();

        return view('admin.vines.create', compact('wines'));
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
        $this->validation($request);
        $newVine = new Vine();
        $newVine->fill($formData);

        $newVine->save();

        if(array_key_exists('wines', $formData)){

            $newVine->wines()->attach($formData['wines']);
        }

        return redirect()->route('admin.vines.show', $newVine->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vine  $vine
     * @return \Illuminate\Http\Response
     */
    public function show(Vine $vine)
    {
        return view('admin.vines.show', compact('vine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vine  $vine
     * @return \Illuminate\Http\Response
     */
    public function edit(Vine $vine)
    {
        $wines = Wine::all();

        return view('admin.vines.edit', compact('vine', 'wines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vine  $vine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vine $vine)
    {
        $formData = $request->all();
        $this->validation($request);
        $vine->update($formData);
        $vine->save();

        if(array_key_exists('wines', $formData)){

            $vine->wines()->sync($formData['wines']);
        } else {
            
            $vine->wines()->detach();
        }

        return redirect()->route('admin.vines.show', $vine);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vine  $vine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vine $vine)
    {
        $vine->delete();
        
        return redirect()->route('admin.vines.index');
    }

    private function validation($request){

        $formData = $request->all();

        $validator = FacadesValidator::make($formData, [

            'name' => 'required|max:50|min:4',
            'description' => 'required|max:800|min:10',
        ], [
            'name.required' => 'Devi inserire il nome del vigneto!',
            'name.max' => 'Non puoi inserire più di 50 caratteri!',
            'name.min' => 'Devi inserire almeno 4 caratteri!',

            'description.required' => 'Devi inserire la descrizione del vigneto!',
            'description.max' => 'Non puoi inserire più di 800 caratteri!',
            'description.min' => 'Devi inserire almeno 10 caratteri!',
        ])->validate(); 
        
        return $validator;
    }
}

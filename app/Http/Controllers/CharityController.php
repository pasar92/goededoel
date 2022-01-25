<?php

namespace App\Http\Controllers;

use App\Models\Charity;
use Illuminate\Http\Request;

class CharityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $charities = Charity::all();
        //dump($charities);
        return view('charities.index')->with(['charities'=>$charities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // dump($charity);
        return view('charities.create');
    }

    /**
     * Store a newly created resource in php artisan ui bootstrapstorage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dump($request);
        $request->validate(
            [
                'name'=> 'required',
                'address'=>'required',     
                'description'=>'required'       
            ]
        );
        Charity::create($request->all());

        return redirect()->route('charities.index')->with('success','Products created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Charity  $charity
     * @return \Illuminate\Http\Response
     */
    public function show(Charity $charity)
    {
        return view('charities.show')->with(['charity'=>$charity]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Charity  $charity
     * @return \Illuminate\Http\Response
     */
    public function edit(Charity $charity)
    {
        //echo 'Hallo';
        return view('charities.update')->with(['charity'=> $charity]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Charity  $charity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Charity $charity)
    {
        $charity->update(
            [
                'name'=> $request->name, 
                'address'=> $request->address,
                'description'=> $request->description,
             
            ]
        );
    
        $charities = Charity::all();
        return redirect()->route('charity.index')
        ->with('success','Products created successfully.')
        ->with('charities',$charities);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Charity  $charity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Charity $charity)
    {
        $charity->delete();
        return redirect()->route('charity.index')->with('success','Products deleted successfully.');
    }
}

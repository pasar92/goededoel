<?php

namespace App\Http\Controllers;

use App\Models\period;
use App\Models\Charity;
use App\Models\period_items;
use Illuminate\Http\Request;

class PeriodItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(period $period)
    {
         $charities = Charity::all();
        return view('periodItems.create')->with(['period'=>$period,'charities'=>$charities]);
        // $periods = period::all();
        // dump($periods);
        // dump($period);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, period $period)
    {

        $request->validate(
            [
                'charity_id'=>  'required',   
            ]
        );
        
        period_items::create($request->all()+['period_id'=>$period->id]);

        return redirect()->route('period.index')->with('success','Products created successfully.');
      //  dump($period);
       // dump($request->all());
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\period_items  $period_items
     * @return \Illuminate\Http\Response
     */
    public function show(period_items $period_items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\period_items  $period_items
     * @return \Illuminate\Http\Response
     */
    public function edit(period_items $period_items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\period_items  $period_items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, period_items $period_items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\period_items  $period_items
     * @return \Illuminate\Http\Response
     */
    public function destroy(period_items $period_items)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\period;
use App\Models\Charity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo 'Hallo period';
       // $periods = Period::all();
        $user = auth()->user();
        
       // dd($user);
        $periods =  $user->periods;
        // dd($periods);
        return view('periods.index')->with(['periods'=>$periods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $charities = Charity::all();
        //dump($charities);
       return view('periods.create')->with(['charities'=>$charities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dump(Auth::user()->id);
       // echo 'Hallo store';
        $request->validate(
            [
                'start'=> 'required',
                'amount'=> 'required',       
            ]
        );
       period::create($request->all()+['user_id'=>Auth::user()->id,'status'=>'await']);

        return redirect()->route('period.index')->with('success','Products created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\period  $period
     * @return \Illuminate\Http\Response
     */
    public function show(period $period)
    {
         $periodItems =  $period->periodItems; 
        //dump($period);
        return view('periods.show')->with(['period'=>$period,'periodItems' =>$periodItems]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\period  $period
     * @return \Illuminate\Http\Response
     */
    public function edit(period $period)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\period  $period
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, period $period)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\period  $period
     * @return \Illuminate\Http\Response
     */
    public function destroy(period $period)
    {
        //
    }
}

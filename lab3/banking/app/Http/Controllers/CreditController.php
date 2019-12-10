<?php

namespace App\Http\Controllers;

use App\Credit;
use App\Http\Requests\CreditRequest;

class CreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Credit::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreditRequest $request)
    {
        $day = Credit::create($request->validated());
        return $day;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function show(Credit $credit)
    {
        return $credit = Credit::findOrFail($credit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    // public function edit(Credit $credit)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function update(CreditRequest $request, Credit $credit)
    {
         $cr = Credit::findOrFail($id);
         $cr->fill($request->except(['id']));
         $cr->save();
         return response()->json($cr);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreditRequest $request, $id)
    {
         $cr = Game::findOrFail($id);
         if($cr->delete()) return response(null, 204);
    }
}

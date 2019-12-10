<?php

namespace App\Http\Controllers;

use App\Autopayment;
use App\Http\Requests\AutopaymentRequest;

class AutopaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Autopayment::all();
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
    public function store(AutopaymentRequest $request)
    {
        $day = Autopayment::create($request->validated());
        return $day;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Autopayment  $autopayment
     * @return \Illuminate\Http\Response
     */
    public function show(Autopayment $autopayment)
    {
        return $autopayment = Autopayment::findOrFail($autopayment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autopayment  $autopayment
     * @return \Illuminate\Http\Response
     */
    // public function edit(Autopayment $autopayment)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autopayment  $autopayment
     * @return \Illuminate\Http\Response
     */
public function update(AutopaymentRequest $request, $id)
     {
         $game = Autopayment::findOrFail($id);
         $game->fill($request->except(['id']));
         $game->save();
         return response()->json($game);
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autopayment  $autopayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(AutopaymentRequest $request, $id)
     {
         $game = Autopayment::findOrFail($id);
         if($game->delete()) return response(null, 204);
     }
}

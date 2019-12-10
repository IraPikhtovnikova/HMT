<?php

namespace App\Http\Controllers;

use App\PayStatus;
use App\Http\Requests\AppStatusRequest;

class PayStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PayStatus::all();
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
    public function store(AppStatusRequest $request)
    {
        $day = PayStatus::create($request->validated());
         return $day;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PayStatus  $payStatus
     * @return \Illuminate\Http\Response
     */
    public function show(PayStatus $payStatus)
    {
        return $payStatus = PayStatus::findOrFail($payStatus);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PayStatus  $payStatus
     * @return \Illuminate\Http\Response
     */
    // public function edit(PayStatus $payStatus)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PayStatus  $payStatus
     * @return \Illuminate\Http\Response
     */
    public function update(AppStatusRequest $request, $id)
     {
         $game = PayStatus::findOrFail($id);
         $game->fill($request->except(['id']));
         $game->save();
         return response()->json($game);
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PayStatus  $payStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppStatusRequest $request, $id)
     {
         $game = PayStatus::findOrFail($id);
         if($game->delete()) return response(null, 204);
     }
}

<?php

namespace App\Http\Controllers;

use App\AccStatus;
use App\Http\Requests\AccStatusRequest;

class AccStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AccStatus::all();
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
    public function store(AccStatusRequest $request)
    {
        $day = AccStatus::create($request->validated());
         return $day;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AccStatus  $accStatus
     * @return \Illuminate\Http\Response
     */
    public function show(AccStatus $accStatus)
    {
        return $accStatus = AccStatus::findOrFail($accStatus);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AccStatus  $accStatus
     * @return \Illuminate\Http\Response
     */
    // public function edit(AccStatus $accStatus)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AccStatus  $accStatus
     * @return \Illuminate\Http\Response
     */
    public function update(AccStatusRequest $request, $id)
     {
         $game = AccStatus::findOrFail($id);
         $game->fill($request->except(['id']));
         $game->save();
         return response()->json($game);
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AccStatus  $accStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccStatusRequest $request, $id)
     {
         $game = AccStatus::findOrFail($id);
         if($game->delete()) return response(null, 204);
     }
}

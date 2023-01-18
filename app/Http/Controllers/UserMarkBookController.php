<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserMarkBookRequest;
use App\Http\Requests\UpdateUserMarkBookRequest;
use App\Models\UserMarkBook;

class UserMarkBookController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserMarkBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserMarkBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserMarkBook  $userMarkBook
     * @return \Illuminate\Http\Response
     */
    public function show(UserMarkBook $userMarkBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserMarkBook  $userMarkBook
     * @return \Illuminate\Http\Response
     */
    public function edit(UserMarkBook $userMarkBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserMarkBookRequest  $request
     * @param  \App\Models\UserMarkBook  $userMarkBook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserMarkBookRequest $request, UserMarkBook $userMarkBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserMarkBook  $userMarkBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserMarkBook $userMarkBook)
    {
        //
    }
}

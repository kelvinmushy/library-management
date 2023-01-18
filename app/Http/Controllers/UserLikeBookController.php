<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserLikeBookRequest;
use App\Http\Requests\UpdateUserLikeBookRequest;
use App\Models\UserLikeBook;

class UserLikeBookController extends Controller
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
     * @param  \App\Http\Requests\StoreUserLikeBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserLikeBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserLikeBook  $userLikeBook
     * @return \Illuminate\Http\Response
     */
    public function show(UserLikeBook $userLikeBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserLikeBook  $userLikeBook
     * @return \Illuminate\Http\Response
     */
    public function edit(UserLikeBook $userLikeBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserLikeBookRequest  $request
     * @param  \App\Models\UserLikeBook  $userLikeBook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserLikeBookRequest $request, UserLikeBook $userLikeBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserLikeBook  $userLikeBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserLikeBook $userLikeBook)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserCommentBookRequest;
use App\Http\Requests\UpdateUserCommentBookRequest;
use App\Models\UserCommentBook;

class UserCommentBookController extends Controller
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
     * @param  \App\Http\Requests\StoreUserCommentBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserCommentBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCommentBook  $userCommentBook
     * @return \Illuminate\Http\Response
     */
    public function show(UserCommentBook $userCommentBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCommentBook  $userCommentBook
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCommentBook $userCommentBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserCommentBookRequest  $request
     * @param  \App\Models\UserCommentBook  $userCommentBook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserCommentBookRequest $request, UserCommentBook $userCommentBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCommentBook  $userCommentBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCommentBook $userCommentBook)
    {
        //
    }
}

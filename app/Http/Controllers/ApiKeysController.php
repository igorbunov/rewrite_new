<?php

namespace App\Http\Controllers;

use App\Models\ApiKeys;
use Illuminate\Http\Request;

class ApiKeysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apiKeys = ApiKeys::byUser()->get();

        return view('apikeys.index', compact('apiKeys'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApiKeys  $apiKey
     * @return \Illuminate\Http\Response
     */
    public function show(ApiKeys $apiKey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApiKey  $apiKeys
     * @return \Illuminate\Http\Response
     */
    public function edit(ApiKeys $apiKey)
    {
        abort_if($apiKey->user_id != auth()->id(), 404);

        return view('apikeys.edit', compact('apiKey'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApiKeys  $apiKey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApiKeys $apiKey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApiKeys  $apiKey
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApiKeys $apiKey)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ApiKeys;
use Illuminate\Http\Request;
use App\Http\Requests\StoreApiKeyRequest;

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
        return view('apikeys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreApiKeyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApiKeyRequest $request)
    {
        ApiKeys::create($request->validated() + [
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('profile.index')->withSuccess('Api key added!');
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
     * @param  \Illuminate\Http\StoreApiKeyRequest  $request
     * @param  \App\Models\ApiKeys  $apiKey
     * @return \Illuminate\Http\Response
     */
    public function update(StoreApiKeyRequest $request, ApiKeys $apiKey)
    {
        abort_if($apiKey->user_id != auth()->id(), 404);

        $apiKey->api_key = $request->api_key;
        $apiKey->save();

        return redirect()->route('profile.index')->withSuccess('Api key updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApiKeys  $apiKey
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApiKeys $apiKey)
    {
        abort_if($apiKey->user_id != auth()->id(), 404);

        $apiKey->delete();

        return redirect()->route('profile.index')->withSuccess('Api key deleted!');
    }
}

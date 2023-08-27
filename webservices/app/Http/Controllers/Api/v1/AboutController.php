<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\About;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return AboutResource::collection(About::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {

    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutRequest $request)
    {
        
        $about = About::create($request->validated());

        return AboutResource::make($about);
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return AboutResource::make($about);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(About $about)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        $about->update($request->validated());

        return AboutResource::make($about);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();
        return response()->noContent();
    }
}

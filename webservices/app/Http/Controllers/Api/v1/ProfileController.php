<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\About;
use App\Models\Skill;
use App\Models\profile;
use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreprofileRequest;
use App\Http\Requests\UpdateprofileRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(About $about, Skill $skill, Project $project)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreprofileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprofileRequest $request, profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(profile $profile)
    {
        //
    }
}

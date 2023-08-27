<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Skill;
use App\Http\Controllers\Controller;
use App\Http\Resources\SkillResource;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SkillResource::collection(Skill::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkillRequest $request)
    {
        $skill = Skill::create($request->validated());
        
        return  SkillResource::make($skill);
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        return SkillResource::make($skill);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Skill $skill)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkillRequest $request, Skill $skill)
    {
        $skill->update($request->validated());
        return SkillResource::make($skill);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return response()->noContent();
    }
}

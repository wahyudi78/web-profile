<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\School;
use App\Http\Controllers\Controller;
use App\Http\Resources\SchoolResource;
use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SchoolResource::collection(School::all());
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
    public function store(StoreSchoolRequest $request)
    {
        $school = School::create($request->validated());

        return SchoolResource::make($school);
    }

    /**
     * Display the specified resource.
     */
    public function show(School $school)
    {
        return SchoolResource::make($school);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(School $school)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchoolRequest $request, School $school)
    {
        $school->update($request->validated());

        return SchoolResource::make($school);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school)
    {
        $school->delete();
        return response()->noContent();
    }
}

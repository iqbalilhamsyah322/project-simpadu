<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ScheduleResource;
use App\Models\Schedule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $schedules = Schedule::where('subject_id', '=', $schedules->subject_id)->get();
        return ScheduleResource::collection($schedules->load('subject'));
        // return ScheduleResource::collection(Schedule::all()) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

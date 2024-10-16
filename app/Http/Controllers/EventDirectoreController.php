<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\EventDirectore;
use Illuminate\Http\Request;

class EventDirectoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $eventdirectors = EventDirectore::all();
        return view("partials.eventdirectore",compact('eventdirectors'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EventDirectore $eventDirectore)
    {
        //
        $events = event::all();
        return view('partials.directorShow',compact('eventDirectore','events'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EventDirectore $eventDirectore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EventDirectore $eventDirectore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventDirectore $eventDirectore)
    {
        //
    }
}

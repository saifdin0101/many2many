<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
    public function store(Request $request)
    {

        $request->validate([
            'event_name' => 'required',
            'event_subject' => 'required',
            'event_image' => 'required|image',
            // 'event_directore_id' => 'required',
        ]);
        
       

        $event_image = $request->file('event_image');
        $image_name = hash('sha256', file_get_contents($event_image)) . '.' . $event_image->getClientOriginalExtension();
        $event_image->move(storage_path('app/public/images'), $image_name);


        Event::create([
            'event_name' => $request->event_name,
            'event_subject' => $request->event_subject,
            'event_image' => $image_name,
            // 'event_directore_id' => $request->event_directore_id,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(event $event)
    {
        //
    }
}

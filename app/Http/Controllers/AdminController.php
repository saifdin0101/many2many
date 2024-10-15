<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Client;
use App\Models\EventDirectore;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('home.home');
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
            "name" => "required|string",
            "originality" => "required|in:Client,Event Director"
        ]);

    
        $admin = Admin::create([
            "name" => $request->name,
            "originality" => $request->originality
        ]);

        if ($request->originality == 'Client') {
            Client::create([
                'admin_id' => $admin->id, 
                'client_name' => $request->name 
            ]);
            return redirect()->route('home.clients');
        } elseif ($request->originality == 'Event Director') {
            EventDirectore::create([
                'admin_id' => $admin->id, 
                'director_name' => $request->name 
            ]);
            return redirect()->route('home.eventdirectors');
        }

        
        return redirect()->route('home')->with('error', 'Invalid role selected.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}

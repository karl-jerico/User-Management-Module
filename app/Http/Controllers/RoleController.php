<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = User::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $role)
    {
        return view('roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $role)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        $role->update([
            'name' => $request->input('name'),
        ]);
    
        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $role)
    {
        $role->delete();

        return redirect()->route('roles.index');
    }
}

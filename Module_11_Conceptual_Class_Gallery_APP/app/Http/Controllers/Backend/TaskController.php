<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view( 'backend.pages.tasks.index' );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view( 'backend.pages.tasks.create' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request )
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( string $id )
    {
        return view( 'backend.pages.tasks.show' );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id )
    {
        return view( 'backend.pages.tasks.edit' );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, string $id )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id )
    {
        //
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use App\Http\Requests\StoreComicsRequest;
use App\Http\Requests\UpdateComicsRequest;
use Illuminate\Http\Request;

class ComicsController extends Controller

{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comics::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        dd($data);
    }
    /**
     * Display the specified resource.
     */
    public function show(Comics $comics)
    {
        return view('comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comics $comics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicsRequest $request, Comics $comics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comics $comics)
    {
        //
    }
}

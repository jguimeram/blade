<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'year' => 'required',
                'image' => 'required'
            ]
        );

        Movie::create($request->all());

        return Redirect::to('movies')->with('success', 'Movie created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'year' => 'required',
                'image' => 'required'
            ]
        );

        $movie = Movie::find($id);
        $movie->update($request->all());

        return Redirect::to('movies')->with('success', 'Movie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $movie = Movie::find($id);
        $movie->delete();
        return Redirect::to('movies')->with('success', 'Movie deleted successfully');
    }
}
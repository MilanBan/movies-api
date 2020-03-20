<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Movie::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
        // $movie = new Movie();

        // $movie->title = $request->input('title');
        // $movie->director = $request->input('director');
        // $movie->imageUrl = $request->input('imageUrl');
        // $movie->duration = $request->input('duration');
        // $movie->releaseDate = $request->input('releaseDate');
        // $movie->genre = $request->input('genre');

        // $movie->save();

        return $movie = Movie::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return $movie;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MovieRequest $request, Movie $movie)
    {
        // $movie = Movie::find($id);

        // $movie->title = $request->input('title');
        // $movie->director = $request->input('director');
        // $movie->imageUrl = $request->input('imageUrl');
        // $movie->duration = $request->input('duration');
        // $movie->releaseDate = $request->input('releaseDate');
        // $movie->genre = $request->input('genre');

        // $movie->save();

        $movie->update($request->all());

        return $movie;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        // $movie = Movie::find($id);

        $movie->delete();

        return new JsonResponse(true);
    }
}

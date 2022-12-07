<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Movie;
use App\Models\GenreMovie;
use App\Models\Character;
use App\Models\Genre;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $genreQuery = $request->query('genre', '');

        $movies = Movie::with([
            'genres',
            'actors'
        ])->get();

        $queriedMovies = Movie::with([
            'genres',
            'actors'
        ])->withGenre($genreQuery)->get();

        return view('movie.view', [
            'movies' => $movies,
            'queriedMovies' => $queriedMovies
        ]);
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
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min: 2', 'max: 50'],
            'description' => ['required', 'min: 8'],
            'genreID' => ['required', 'array'],
            'genreID.*' => ['required', 'numeric'],
            'actorID' => ['required', 'array'],
            'actorID.*' => ['required', 'numeric'],
            'charName' => ['required', 'array'],
            'charName.*' => ['required'],
            'director' => ['required', 'min: 3'],
            'releaseDate' => ['required', 'date'],
            'thumbnail' => ['required', 'image'],
            'background' => ['required', 'image']
        ]);

        $data = $request->except([
            'genreID',
            'actorID',
            'charName'
        ]);
        $genres = $request->genreID;
        $actors = $request->actorID;
        $charNames = $request->charName;

        $data['thumbnail'] = Storage::putFile('images/thumbnail', $request->file('thumbnail'));
        $data['background'] = Storage::putFile('images/background', $request->file('background'));

        $movie = Movie::create($data);

        foreach($genres as $genre){
            GenreMovie::create([
                'movieID' => $movie->id,
                'genreID' => $genre
            ]);
        }

        for($i = 0 ; $i < sizeof($actors) ; $i++){
            Character::create([
                'movieID' => $movie->id,
                'actorID' => $actors[$i],
                'charName' => $charNames[$i]
            ]);
        }

        return $movie;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id)->load([
            'genres',
            'actors'
        ]);

        return view('movie.show', [
            'movie' => $movie
        ]);
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
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => ['required', 'min: 2', 'max: 50'],
            'description' => ['required', 'min: 8'],
            'genreID' => ['required', 'array'],
            'genreID.*' => ['required', 'numeric'],
            'actorID' => ['required', 'array'],
            'actorID.*' => ['required', 'numeric'],
            'charName' => ['required', 'array'],
            'charName.*' => ['required'],
            'director' => ['required', 'min: 3'],
            'releaseDate' => ['required', 'date'],
            'thumbnail' => ['required', 'image'],
            'background' => ['required', 'image']
        ]);

        $data = $request->except([
            'genreID',
            'actorID',
            'charName'
        ]);
        $genres = $request->genreID;
        $actors = $request->actorID;
        $charNames = $request->charName;

        Storage::delete([
            $movie->thumbnail,
            $movie->background
        ]);

        $data['thumbnail'] = Storage::putFile('images/thumbnail', $request->file('thumbnail'));
        $data['background'] = Storage::putFile('images/background', $request->file('background'));

        $movie->update($data);

        GenreMovie::where('movieID', $movie->id)->delete();
        Character::where('movieID', $movie->id)->delete();

        foreach($genres as $genre){
            GenreMovie::create([
                'movieID' => $movie->id,
                'genreID' => $genre
            ]);
        }

        for($i = 0 ; $i < sizeof($actors) ; $i++){
            Character::create([
                'movieID' => $movie->id,
                'actorID' => $actors[$i],
                'charName' => $charNames[$i]
            ]);
        }

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
        Storage::delete([
            $movie->thumbnail,
            $movie->background
        ]);
        return Movie::destroy($movie->id);
    }

}

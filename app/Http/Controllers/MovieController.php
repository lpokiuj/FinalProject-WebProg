<?php

namespace App\Http\Controllers;

use App\Models\Actor;
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
        $sortQuery = $request->query('sort', '');
        $searchQuery = $request->query('search', '');

        $movies = Movie::with([
            'genres',
            'actors'
        ])->paginate(5);

        $queriedMovies = Movie::with([
            'genres',
            'actors'
        ])->withGenre($genreQuery)->withSort($sortQuery)->withSearch($searchQuery)->paginate(5)->withQueryString();

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
        $actors = Actor::all();
        $genre = Genre::all();

        return view('movie.create', ['actors' => $actors, 'genres' => $genre]);
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

        return redirect('/movies');
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

        // dd($movie);

        $moreMovies = Movie::paginate(5);

        return view('movie.show', [
            'movie' => $movie,
            'moreMovies' => $moreMovies
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
        $actors = Actor::all();
        $genre = Genre::all();
        $movie = Movie::find($id)->load([
            'genres',
            'actors'
        ]);

        return view('movie.edit', ['actors' => $actors, 'genres' => $genre, 'movie'=> $movie]);
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

        return redirect('/movies');
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
        Movie::destroy($movie->id);

        return redirect('/movies');
    }

}

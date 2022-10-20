<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\GenreMovie;
use App\Models\Character;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Movie::with([
            'genres',
            'actors'
        ])->get();
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
        $data = $request->except([
            'genreID',
            'actorID',
            'charName'
        ]);
        $genres = $request->genreID;
        $actors = $request->actorID;
        $charNames = $request->charName;

        $data1 = $this->uploadImage($data, $request, 'thumbnail');
        $data2 = $this->uploadImage($data1, $request, 'background');

        $movie = Movie::create($data2);

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
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uploadImage($data, $request, $type)
    {
        if($request->file($type)){
            $file = $request->file($type);
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('image/'.$type), $filename);
            $data[$type] = $filename;
        }

        return $data;
    }
}

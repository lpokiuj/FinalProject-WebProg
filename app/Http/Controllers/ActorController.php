<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actors = Actor::all();

        return view('actor.index', ['actors' => $actors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actor.create');
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
            'name' => ['required', 'min: 3'],
            'gender' => ['required', Rule::in(['Male', 'Female'])],
            'biography' => ['required', 'min: 10'],
            'DOB' => ['required', 'date'],
            'POB' => ['required'],
            'image' => ['required', 'image'],
            'popularity' => ['required', 'numeric']
        ]);

        $data = $request->all();
        $data['image'] = Storage::putFile('images/actor', $request->file('image'));

        Actor::create($data);
        return redirect('/actors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actor = Actor::find($id)->load('movies');

        return view('actor.show', ['actor' => $actor]);
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
        $actor = Actor::find($id)->load('movies');

        return view('actor.edit', ['actor' => $actor]);
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
        $request->validate([
            'name' => ['required', 'min: 3'],
            'gender' => ['required'],
            'biography' => ['required', 'min: 10'],
            'DOB' => ['required', 'date'],
            'POB' => ['required'],
            'popularity' => ['required', 'numeric']
        ]);

        $actor = Actor::find($id);
        $data = $request->all();
        if($request->file('image')){
            Storage::delete($actor->image);
            $data['image'] = Storage::putFile('images/actor', $request->file('image'));
        }

        $actor->update($data);
        return redirect('/actors/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actor = Actor::find($id);
        Storage::delete($actor->image);
        Actor::destroy($id);
        return redirect('/actors');
    }
}

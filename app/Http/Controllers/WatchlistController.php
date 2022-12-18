<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Watchlist;
// Buat Dummy (bawah)
use App\Models\User;
// end

class WatchlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();

        $watchlists = Watchlist::with('movie')->where('userID', $user->id)->get();
        // dd($watchlists[0]->movie->title);
        $allWatchlist = Watchlist::all();
        return view('watchlist.index', ['watchlists' => $watchlists, 'allWatchlist' => $allWatchlist]);
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
        Watchlist::create([
            'userID' => Auth::id(),
            'movieID' => $request->movieID,
        ]);

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
        $watchlist = Watchlist::where('userID', Auth::id())->where('movieID', $id)->first();
        $data = $request->all();
        // dd($request->status);
        if($data['status'] == 'Remove'){
            $watchlist->delete();
            return redirect('/watchlists');
        }
        $watchlist->update($data);
        return redirect('/watchlists');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $watchlist = Watchlist::where('userID', Auth::id())->where('movieID', $id)->first();
        return redirect('/watchlists');
    }
}

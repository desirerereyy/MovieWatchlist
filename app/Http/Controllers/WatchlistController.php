<?php

namespace App\Http\Controllers;

use App\Models\Watchlist;
use Illuminate\Http\Request;

class WatchlistController extends Controller
{
    public function index()
    {
        $watchlists = Watchlist::all();

        return view('watchlist.index', compact('watchlists'));
    }

    public function create()
    {
        return view('watchlist.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'status' => 'required',
            'rating' => 'nullable|numeric|min:0|max:10',
            'description' => 'nullable',
        ]);

        Watchlist::create($request->all());

        return redirect()->route('watchlist.index');
    }
}
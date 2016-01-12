<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateSongRequest;
use App\Http\Controllers\Controller;
//use DB;
use App\Song;


class SongsController extends Controller
{
    /**
     * @var Song
     */
    private $song;

    public function __construct(Song $song)
    {

        $this->song = $song;
    }
    
    public function index()
    {
//        $songs = $this->getSongs();
//        $songs = DB::table('songs')->get();
//        $songs = Song::get();
//dd($songs);
        $songs = $this->song->get();
        return view('songs.index', compact('songs'));
    }

    public function show(Song $song)
    {
//        return $id;
//        $song = $this->getSongs()[$id];
//        $song = DB::table('songs')->find($id);
//        $song = Song::whereSlug($slug)->first();
//        $song = $this->song->whereSlug($slug)->first();

        return view('songs.show', compact('song'));
    }


    /**
     * Show a form to create a new song.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('songs.create');
    }


    /**
     * Persists a new song
     *
     * @param Requests\CreateSongRequest $request
     * @param Song $song
     * @return \Illuminate\Http\RedirectResponse
     */
//    public function store(Request $request, Song $song)
    public function store(CreateSongRequest $request, Song $song)
    {
//        $input = $request->all();
        $song->create($request->all());

        return redirect()->route('songs.index');
    }

    /**
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function edit(Song $song)
    {

//        $song = $this->song->whereSlug($slug)->first();

        return view('songs.edit', compact('song'));

//        return 'Edit a song with a title of '.$song->title;

//        return view('songs.edit', compact('song'));
    }

    public function update(Song $song, Request $request)
    {

//        $song = $this->song->whereSlug($slug)->first();


//        $song->fill(['title' => $request->get('title')])->save();
        $song->fill($request->input())->save();

//        $song->title = $request->get('title');
//
//        $song->save();

        return redirect('songs');
//        return 'Update the song.';
    }

    /**
     * @return array
     */
    /*public function getSongs()
    {
        return ['In the End', 'Numb', 'New Divide'];
    }*/
}

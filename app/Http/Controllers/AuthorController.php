<?php

namespace Dubium\Http\Controllers;

use Illuminate\Http\Request;

use Dubium\Http\Requests;
use Dubium\Http\Controllers\Controller;

use Dubium\Author;

class AuthorController extends Controller
{
    public function __construct()
    {
        $this->middleware('cros', ['except' => ['create', 'edit']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$a = new Author;
        /*$a->name = "Diego José";
        $a->fisrt_last_name = "Piedra";
        $a->second_last_name = "Araya";
        $a->initials = "DJ Piedra A";
        $a->save();
        *
        $a->name = "Franklin";
        $a->fisrt_last_name = "Duarte";
        $a->second_last_name = "Sandí";
        $a->initials = "F Duarte";
        $a->save();

        /*
        $a->name = "Vannesa Sofía";
        $a->fisrt_last_name = "Marín";
        $a->second_last_name = "Altamira";
        $a->initials = "VS Marín A";
        $a->save();*/

        $authors = Author::all();
        /*foreach ($authors as $author) {
            $author->emails;
        }*/
        return $authors;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = Author::find($id);
        $author->country;
        $author->emails;
        $author->affiliations;
        $author->interships;
        return $author;
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
}

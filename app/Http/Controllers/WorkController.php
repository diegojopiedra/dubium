<?php

namespace Dubium\Http\Controllers;

use Illuminate\Http\Request;

use Dubium\Http\Requests;
use Dubium\Http\Controllers\Controller;

use Dubium\Work;
use Dubium\Type;
use Dubium\Degree;
use Dubium\Author;

class WorkController extends Controller
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
    public function index(Request $request)
    {
        /*$w = new Work();


        $w->title = 'Acoso humano hacia los arboles libres nativos de la Sabana';
        $w->signature = 'DS-7156-5810';
        $w->methodology = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in egestas erat, id condimentum ante. Nunc vel pharetra libero, ut commodo ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer nec arcu varius, dictum ligula eu, ultricies risus. Nulla lectus lectus, pretium a ipsum sed, vestibulum congue mi. Ut mi massa, tincidunt maximus ligula quis, dignissim sodales ipsum. Proin tortor nulla, auctor sit amet blandit vel, accumsan ac magna. Vivamus nulla tellus, dignissim eget ipsum sollicitudin, consequat eleifend nulla. Vestibulum ut egestas mauris. Mauris ut posuere purus, sit amet tempus ipsum. Aliquam bibendum lacus eget ex tristique imperdiet. Fusce tincidunt risus odio, et tincidunt nisl consectetur quis. Sed ut imperdiet justo, commodo semper eros. Suspendisse vitae justo aliquet, facilisis sapien fringilla, venenatis ex.";
        $w->publication_date = "2016-04-29";

        $w->save();*/

        $works = Work::all();
        /*foreach ($works as $work) {
            $work->type;
            $work->degree;
            $work->authors;
            $work->language;
        }*/
        return $works;//$request->input('limit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $work = new Work;

        if(isset($request->authors_id)){
            $work->authors()->attach($request->authors_id);
            unset($request->authors_id);
        }

        if(isset($request->key_works_id)){
            $work->key_works()->attach($request->key_works_id);
            unset($request->key_works_id);
        }

        if(isset($request->geographical_descriptions_id)){
            $work->geographical_descriptions()->attach($request->geographical_descriptions_id);
            unset($request->geographical_descriptions_id);
        }

        if(isset($request->thematic_descriptions_id)){
            $work->thematic_descriptions()->attach($request->thematic_descriptions_id);
            unset($request->thematic_descriptions_id);
        }

        foreach ($request->all() as $key=>$value) {
            $work[$key] = $value;
        }
        
        $work->save();
        return $work;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $work = Work::find($id);
        if($work){
            $work->type;
            $work->degree;
            $work->authors;
            $work->key_works;
            $work->geographical_descriptions;
        } 
        return $work;
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
        $work = Work::find($id);

        if(isset($request->authors_id)){
            $work->authors()->attach($request->authors_id);
            unset($request->authors_id);
        }

        if(isset($request->key_works_id)){
            $work->key_works()->attach($request->key_works_id);
            unset($request->key_works_id);
        }

        if(isset($request->geographical_descriptions_id)){
            $work->geographical_descriptions()->attach($request->geographical_descriptions_id);
            unset($request->geographical_descriptions_id);
        }

        if(isset($request->thematic_descriptions_id)){
            $work->thematic_descriptions()->attach($request->thematic_descriptions_id);
            unset($request->thematic_descriptions_id);
        }

        foreach ($request->all() as $key=>$value) {
            $work[$key] = $value;
        }
        
        $work->save();
        return $work;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::find($id);
        $work->delete();
        return true;
    }
}

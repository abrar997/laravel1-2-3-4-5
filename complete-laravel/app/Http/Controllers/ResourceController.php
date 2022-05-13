<?php

namespace App\Http\Controllers;

use App\Models\photo;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'index page from resource controller';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // somtimes return view file for this model

        return view('photos.photos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->file('image')->store('images') == null) {
            return  redirect()->route('photos.create');
        } else {

            $path = $request->file('image')->store('images');
            photo::create([
                'path' => $path
            ]);
            return redirect()->route('photos.index');
        }
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(photo $photo)
    {
        // return  photo::find($id);
        return $photo; #implict binding
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

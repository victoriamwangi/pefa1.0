<?php

namespace App\Http\Controllers;

use App\Models\Sermon;
use Illuminate\Http\Request;

class SermonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSermons(Request $request)
    {
        $sermons = Sermon::get();
        return response()->json($sermons);
    }  

    
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
     * @param  \App\Models\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function show(Sermon $sermon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function edit(Sermon $sermon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sermon $sermon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sermon $sermon)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Allinput;
use App\Http\Requests\StoreAllinputRequest;
use App\Http\Requests\UpdateAllinputRequest;

class AllinputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allinput = Allinput::latest()->paginate(5);

        return view('allinput.index', compact('allinput'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('allinput.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAllinputRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAllinputRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Allinput  $allinput
     * @return \Illuminate\Http\Response
     */
    public function show(Allinput $allinput)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Allinput  $allinput
     * @return \Illuminate\Http\Response
     */
    public function edit(Allinput $allinput)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAllinputRequest  $request
     * @param  \App\Models\Allinput  $allinput
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAllinputRequest $request, Allinput $allinput)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Allinput  $allinput
     * @return \Illuminate\Http\Response
     */
    public function destroy(Allinput $allinput)
    {
        //
    }
}

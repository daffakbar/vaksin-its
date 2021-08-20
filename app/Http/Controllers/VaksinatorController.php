<?php

namespace App\Http\Controllers;

use App\Models\Vaksinator;
use Illuminate\Http\Request;

class VaksinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaksinators = Vaksinator::get();
        return view('admin/vaksinator', compact('vaksinators'));
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
        $new_vaksinator = new Vaksinator;
        $new_vaksinator->nama = $request->get('nama');
        $new_vaksinator->save();
        return redirect()->route('vaksinator-post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaksinator  $vaksinator
     * @return \Illuminate\Http\Response
     */
    public function show(Vaksinator $vaksinator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaksinator  $vaksinator
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaksinator $vaksinator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaksinator  $vaksinator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaksinator $vaksinator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaksinator  $vaksinator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaksinator $vaksinator)
    {
        //
    }
}

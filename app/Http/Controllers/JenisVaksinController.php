<?php

namespace App\Http\Controllers;

use App\Models\JenisVaksin;
use Illuminate\Http\Request;

class JenisVaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/jenis-vaksin');
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
     * @param  \App\Models\JenisVaksin  $jenisVaksin
     * @return \Illuminate\Http\Response
     */
    public function show(JenisVaksin $jenisVaksin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisVaksin  $jenisVaksin
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisVaksin $jenisVaksin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JenisVaksin  $jenisVaksin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisVaksin $jenisVaksin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisVaksin  $jenisVaksin
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisVaksin $jenisVaksin)
    {
        //
    }
}

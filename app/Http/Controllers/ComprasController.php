<?php

namespace App\Http\Controllers;

use App\Models\compras;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $compras=compras::all();
        return response()->json($compras);

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
        $compra=compras::create($request->post());
        return response()->json(["compra"=>$compra]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function show(compras $compras)
    {
        return response()->json($compras);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function edit(compras $compras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, compras $compras)
    {
        //
        $compras= fill($request->put())->save();
        return response()->json(["compra"=>$compra]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function destroy(compras $compras)
    {
        //
        $compras->delete();
        return response()->json(["mensaje"=>"eliminado"]);
    }
}

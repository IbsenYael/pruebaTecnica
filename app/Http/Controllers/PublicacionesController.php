<?php

namespace App\Http\Controllers;
use App\Models\Publicaciones;
use Illuminate\Http\Request;
use DB;
class PublicacionesController extends Controller
{

    public function index()
    {
        return Publicaciones::all();
    }


    public function store(Request $request)
    {
        $publicaciones = new Publicaciones;
        $publicaciones->imagen =  request('image');
        $publicaciones->descripcion= request('description');
        $publicaciones->save();
        return $publicaciones;
    }


    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

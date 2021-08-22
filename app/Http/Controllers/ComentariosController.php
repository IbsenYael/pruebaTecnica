<?php

namespace App\Http\Controllers;
use App\Models\Comentarios;
use Illuminate\Http\Request;
use DB;
class ComentariosController extends Controller
{
    public function index()
    {
        return comentarios::all();
    }


    public function store(Request $request)
    {
        $comentarios = new Comentarios;
        $comentarios->idPublicacion= request('idPublicacion');
        $comentarios->comentario =  request('comentario');
        $comentarios->user = request('user');
        $comentarios->save();
        return $comentarios;
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

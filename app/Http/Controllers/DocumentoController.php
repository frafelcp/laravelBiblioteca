<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Documento;
use App\TipoDocumento;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentos = Documento::paginate(5);
        return \View::make('documento/index', compact('documentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipod = TipoDocumento::get();
        return \View::make('documento/create', compact('tipod'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $documento = new Documento;
        $documento->tipo_documento_id = $request->tipo_documento_id;
        $documento->nombre = $request->nombre;
        $documento->autor = $request->autor;
        $documento->volumen = $request->volumen;
        $documento->descripcion = $request->descripcion;
        if(Input::hasFile('pdf'))
        {
            $file = Input::file('pdf');
            $file->move(public_path().'/biblioteca/documentos/',$file->getClientOriginalName());
            $documento->pdf = $file->getClientOriginalName();
        } 
        if(Input::hasFile('caratula'))
        {
            $fil = Input::file('caratula');
            $fil->move(public_path().'/biblioteca/caratulas/',$fil->getClientOriginalName());
            $documento->caratula = $fil->getClientOriginalName();
        } 
        $documento->save();
        return redirect('documento');       
    }

    public function downloadDoc($file)
    {        
        // $public_path = public_path();
        // $url = $public_path.'/biblioteca/documentos/'.$file;
        // if(Storage::exists($file))
        // {
        //     dd($url);
        //     return response()->download($url);
        // }
        $fileLocal = public_path().'/biblioteca/documentos/'.$file;
        return response()->download($fileLocal);
        //dd("no se encontro el documento");
    }

    public function streamDoc($file)
    {
        $fileLocal = public_path().'/biblioteca/documentos/'.$file;
        return response()->file($fileLocal);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

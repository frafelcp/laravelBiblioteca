@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <h3>Biblioteca</h3>
                <div class="panel panel-default">
                    <div class="panel-body">
                        @foreach($documentos as $documento)
                            <div class="col-xs-6 col-md-3">
                                <div class="thumbnail">
                                    <a href="#" data-target="#modal-doc-{{$documento->id}}" data-toggle="modal" class="">
                                        <img src="{{asset('biblioteca/caratulas/'.$documento->caratula)}}" alt="{{ $documento->nombre}}" class="img-thumbnail" height="100px" width="100px" onmouseover="this.width=500;this.height=400;" onmouseout="this.width=100;this.height=80;">                        
                                    </a>
                                    <div class="caption">
                                        <h3>{{$documento->nombre}}</h3>
                                        <p>Autor: {{$documento->autor}}</p>
                                        <p>Tipo de Documento: {{$documento->tipo_documento->nombre}}</p>
                                        <p>Volumen: {{$documento->volumen}}</p>
                                    </div>
                                </div>
                            </div>
                            @include('documento.modal')
                        @endforeach
                    </div>
                </div>
            </div>               
        </div>
        {{$documentos->render()}}
    </div>
@endsection
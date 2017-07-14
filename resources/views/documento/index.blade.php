@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <h3>Tipos de Documentos</h3>
                <div class="table table-responsive">
                    <table class="table table-condensed table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>tipo de documento</th>
                                <th>nombre</th>
                                <th>autor</th>
                                <th>volumen</th>
                                <th>descripcion</th>
                                <th>caratula</th>
                                <th>documento</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($documentos as $documento)
                                <tr>
                                    <td>{{$documento->id}}</td>
                                    <td>{{$documento->tipo_documento->nombre}}</td>
                                    <td>{{$documento->nombre}}</td>
                                    <td>{{$documento->autor}}</td>
                                    <td>{{$documento->volumen}}</td>
                                    <td>{{$documento->descripcion}}</td>
                                    <td><img src="{{asset('biblioteca/caratulas/'.$documento->caratula)}}" alt="{{ $documento->nombre}}" height="100px" width="100px" class="img-thumbnail"></td>
                                    <td>
                                        <a class="btn btn-default" href='/stream/{{$documento->pdf}}'>Ver</a>
                                        <a class="btn btn-default" href='/download/{{$documento->pdf}}'>Descargar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{$documentos->render()}}
    </div>
@endsection
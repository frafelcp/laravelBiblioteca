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
                                <th>nombre</th>
                                <th>descripcion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tipodocs as $td)
                                <tr>
                                    <td>{{$td->id}}</td>
                                    <td>{{$td->nombre}}</td>
                                    <td>{{$td->descripcion}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{$tipodocs->render()}}
    </div>
@endsection
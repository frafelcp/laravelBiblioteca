@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                {!! Form::open(['route' => 'documento.store', 'method' => 'post', 'class' => 'form', 'files' => 'true']) !!}
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="lblNombre">Nombre:</label>
                        <input type="text" name="nombre" required value="{{old('nombre')}}" placeholder="Nombre Documento">
                    </div>

                    <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
                        <div class="form-group">
                            <label for="lblNombre">Nombre:</label>
                            <select name="tipo_documento_id" class="form-control">
                                @foreach($tipod as $tipo)
                                    <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    <!--</div>-->

                    <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
                        <div class="form-group">
                            <label for="lblAutor">Autor:</label>
                            <input type="text" name="autor" required value="{{old('autor')}}" placeholder="Autor">
                        </div>
                    <!--</div>-->

                    <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
                        <div class="form-group">
                            <label for="lblVolumen">Volumen:</label>
                            <input type="number" name="volumen" required value="{{old('volumen')}}" placeholder="volumen">
                        </div>
                    <!--</div>-->

                    <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
                        <div class="form-group">
                            <label for="lblDescripcion">Descripcion:</label>
                            <input type="text" name="descripcion" required value="{{old('descripcion')}}" placeholder="descripcion">
                        </div>
                    <!--</div>-->

                    <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
                        <div class="form-group">
                            <label for="lblpdf">Documento PDF</label>
                            <input type="file" name="pdf">
                        </div>
                    <!--</div>-->

                    <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
                        <div class="form-group">
                            <label for="lblCaratula">Caratula:</label>
                            <input type="file" name="caratula">
                        </div>
                    <!--</div>-->

                    <div class=""form-group>
                        {!! Form::submit('Guardar', ['class' => 'btn btn-success ' ] ) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
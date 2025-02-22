@extends('adminlte::page')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><b>Clientes</b>/Modificar Cliente</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">

                </ol>
            </div>
        </div>
    </div>

    <hr>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-warning">
                <div class="card-body">
                    <form action="{{url('/admin/clientes',$cliente->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Nomnre</label>
                                    <input type="text" name="nombre" value="{{$cliente->nombre_cliente}}" id="nombre" class="form-control" required autofocus>
                                    @error('nombre')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cedula">Cedula</label>
                                    <input type="text" name="cedula" value="{{$cliente->cedula}}" id="cedula" class="form-control">
                                    @error('cedula')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="celular">Celular</label>
                                    <input type="text" name="celular" value="{{$cliente->telefono}}" id="celular" class="form-control">
                                    @error('celular')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="direccion">Dirección</label>
                                    <input type="text" name="direccion" value="{{$cliente->direccion}}" id="direccion" class="form-control" >
                                    @error('direccion')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="correo">Correo</label>
                                    <input type="email" name="correo" value="{{$cliente->correo}}" id="correo" class="form-control" >
                                    @error('correo')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <a href="{{url('admin/clientes')}}" class="btn btn-secondary"><i class="fas fa-w fa-arrow-left"></i> Volver</a>
                                    <button type="submit" class="btn btn-outline-warning"><i class="fas fa-w fa-pen-square"></i> Modificar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
@stop





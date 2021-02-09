@extends('layouts.main')

@section('contenido')
    <div class="container"><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Crear producto
                        <a href="{{ route('products.create') }}" class="btn btn-success btn-sm float-end">Nuevo productos</a>
                    </div>
                    <div class="class-body">
                        <div class="p-3">
                            <form action="{{ route('products.store') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="">Descripción</label>
                                    <input type="text" class="form-control" name="description">
                                </div>

                                <div class="form-group">
                                    <label for="">Precio</label>
                                    <input type="number" class="form-control" name="price">
                                </div>

                                <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                                <a href="{{ route('products.index') }}" class="btn btn-danger mt-3">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
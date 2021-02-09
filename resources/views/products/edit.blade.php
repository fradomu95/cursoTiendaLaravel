@extends('layouts.main')

@section('contenido')
    <div class="container"><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Editar producto
                        <a href="{{ route('products.create') }}" class="btn btn-success btn-sm float-end">Nuevo productos</a>
                    </div>
                    <div class="class-body">
                        <div class="p-3">
                            <form action="{{ route('products.update' , $product->id) }}" method="POST">
                                @method('PUT')
                                @csrf

                                <div class="form-group">
                                    <label for="">Descripción</label>
                                    <input type="text" class="form-control" name="description" value="{{ $product->description }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Precio</label>
                                    <input type="number" class="form-control" name="price" value="{{ $product->price }}">
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
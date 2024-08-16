@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text" name="nombres" id="nombres" class="form-control" value="{{ $cliente->nombres }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $cliente->email }}" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="{{ $cliente->direccion }}" required>
        </div>
        <div class="form-group">
            <label for="fono">Teléfono</label>
            <input type="text" name="fono" id="fono" class="form-control" value="{{ $cliente->fono }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection

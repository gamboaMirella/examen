@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text" name="nombres" id="nombres" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fono">Teléfono</label>
            <input type="text" name="fono" id="fono" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection

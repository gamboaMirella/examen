<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index() {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create() {
        return view('clientes.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nombres' => 'required|max:255',
            'email' => 'required|email|unique:clientes',
            'direccion' => 'required',
            'fono' => 'required|numeric',
        ]);

        Cliente::create($validated);

        return redirect()->route('clientes.index')->with('success', 'Cliente creado con éxito.');
    }

    public function edit(Cliente $cliente) {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente) {
        $validated = $request->validate([
            'nombres' => 'required|max:255',
            'email' => 'required|email|unique:clientes,email,' . $cliente->id,
            'direccion' => 'required',
            'fono' => 'required|numeric',
        ]);

        $cliente->update($validated);

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado con éxito.');
    }

    public function destroy(Cliente $cliente) {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado con éxito.');
    }
}

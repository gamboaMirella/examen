<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombres', 'email', 'direccion', 'fono'];

    public static $rules = [
        'nombres' => 'required|string|max:255',
        'email' => 'required|email|unique:clientes,email',
        'direccion' => 'required|string|max:255',
        'fono' => 'required|string|max:15',
    ];

    public static $messages = [
        'nombres.required' => 'El campo nombres es obligatorio.',
        'email.required' => 'El campo email es obligatorio.',
        'email.email' => 'El email debe ser una dirección válida.',
        'email.unique' => 'El email ya está en uso.',
        'direccion.required' => 'El campo dirección es obligatorio.',
        'fono.required' => 'El campo teléfono es obligatorio.',
    ];
}


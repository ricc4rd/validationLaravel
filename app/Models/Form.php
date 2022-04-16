<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\FormController;

class Form extends Model
{
    use HasFactory;

    public $fillable = ['codigo', 'nombre', 'email', 'direccion', 'telefono'];
}

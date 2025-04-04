<?php

namespace App\Http\Controllers\Configuraciones;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ConfigController extends Controller
{
    public function adminpanel()
    {
        return Inertia::render('Configuraciones/ListaConfiguraciones', [
            'configs' => Config::all(),
        ]);
    }
}

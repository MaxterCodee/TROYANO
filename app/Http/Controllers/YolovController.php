<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YolovController extends Controller
{
    public function yolov()
    {
        $port = 3301;
        
        // Ejecutar el comando para compilar TypeScript
        $output = shell_exec('cd resources/ts && npm run dev -- --port=' . $port);
        
        // Abrir el navegador en una nueva ventana en el puerto especificado
        $openBrowser = shell_exec("start http://localhost:$port");
        
        return redirect()->route('index');
    }
}


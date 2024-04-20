<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direction;
use App\Models\Type;

class DarioController extends Controller
{
    //
    public function index2()
    {
        $startDate = '2024-01-01';
        $endDate = '2024-12-31';
    
        // Obtener la cantidad de registros por type_id y sumar la cantidad de la columna 'quantity'
        $total_cars = Direction::where('type_id', 1)->sum('quantity');
        $total_motos = Direction::where('type_id', 2)->sum('quantity');
        $total_bus = Direction::where('type_id', 3)->sum('quantity');
        $total_detection = Direction::sum('quantity');
    
        // Obtener datos para la gráfica por fecha
        $total_cars_date = Direction::where('type_id', 1)
            ->whereBetween('date', [$startDate, $endDate])
            ->get();
    
        return view('dashboard', compact('total_cars', 'total_motos', 'total_bus', 'total_detection', 'total_cars_date'));
    }
    
}

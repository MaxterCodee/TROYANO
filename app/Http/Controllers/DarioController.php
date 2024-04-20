<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direction;
use App\Models\Type;
use App\Models\Crash;

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
        
        // Obtener la cantidad de colisiones por mes
        $total_crashes_by_month = Crash::selectRaw('MONTH(date) as month, COUNT(*) as total')
            ->whereBetween('date', [$startDate, $endDate])
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total');

        $total_crash = Crash::count();

        return view('dashboard', compact('total_cars', 'total_motos', 'total_bus', 'total_detection', 'total_cars_date', 'total_crash', 'total_crashes_by_month'));
    }
}

<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Buyer\Buyer;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DishOrdersChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $orders = Buyer::all();
        $dishStatistics = array();
        $labels = "";
        $stats = "";

        foreach($orders as $order) {
            if ($order->dish->vendor->id == auth()->user()->id) {
                if (array_key_exists($order->dish->name, $dishStatistics)) {
                    $dishStatistics[$order->dish->name] = $dishStatistics[$order->dish->name]++;
                } else {
                    $dishStatistics[$order->dish->name] = 1;
                }
            }
        }

        foreach($dishStatistics as $ds) {
            $labels .= key($dishStatistics) . ',';
            $stats .= $dishStatistics[key($dishStatistics)] . ',';
        }

        Log::debug("Labels: " . $labels);
        Log::debug("Values: " . $stats);

        return Chartisan::build()
            ->labels(explode(',', $labels))
            ->dataset('dishes', explode(',', $stats));
    }

    public function type(): string
    {
        return 'doughnut';
    }

    public function options(): array
    {
        return [
            'responsive' => true,
            'maintainAspectRatio' => false,
            // etc ...
        ];
    }

    public function route(): array {
        return [[]];
    }

    public function colors(): array {
        return [['#ff1744', '#4caf50']];
    }
}
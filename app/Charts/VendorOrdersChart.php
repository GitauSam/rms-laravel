<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Buyer\Buyer;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Fidum\ChartTile\Charts\Chart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VendorOrdersChart extends Chart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $unpurchasedOrdersCount = 0;
        $purchasedOrdersCount = 0;

        $unpurchasedOrders = Buyer::where('purchased', '=', '0')->get();
        $purchasedOrders = Buyer::where('purchased', '=', '1')->get();

        foreach($unpurchasedOrders as $uo) {
            if ($uo->dish->vendor->id == auth()->user()->id) {
                $unpurchasedOrdersCount++;
            }
        }

        foreach($purchasedOrders as $po) {
            if ($po->dish->vendor->id == auth()->user()->id) {
                $purchasedOrdersCount++;
            }
        }

        return Chartisan::build()
            ->labels(['Unconfirmed', 'Confirmed'])
            ->dataset('Sales', [$unpurchasedOrdersCount, $purchasedOrdersCount]);
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

    public function colors(): array {
        return [['#ff1744', '#4caf50']];
    }
}
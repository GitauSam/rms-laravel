<x-dashboard>
    @livewire('chart-tile', [
        'chartClass' => App\Charts\VendorOrdersChart::class, 
        'position' => "a1:a1",
        'height' => "100%"
    ])
    @livewire('chart-tile', [
        'chartClass' => App\Charts\VendorOrdersChart::class, 
        'position' => "b1:b1",
        'height' => "100%"
    ])
    @livewire('chart-tile', [
        'chartClass' => App\Charts\VendorOrdersChart::class, 
        'position' => "a2:a2",
        'height' => "100%"
    ])
    @livewire('chart-tile', [
        'chartClass' => App\Charts\VendorOrdersChart::class, 
        'position' => "b2:b2",
        'height' => "100%"
    ])
</x-dashboard>
<div>
    <h4>this is blade news,morning {{$name}}</h4>
</div>

@inject('metrics', 'App\Services\MetricsService')

<div>
    Monthly Revenue: {{ $metrics->monthlyRevenue() }}.
</div>
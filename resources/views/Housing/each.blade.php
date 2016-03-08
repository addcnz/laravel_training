<li>{{ $project['name'] }}</li>
@if (count($project['children']) > 0)
<ul>
    @foreach($project['children'] as $project)
    @include('housing.each', $project)
    @endforeach
</ul>
@endif
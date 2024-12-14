@extends(
    'layouts.main'
)


@section('content')
<div class="grid grid-cols-2 lg:grid-cols-2 gap-8 pt-16">
    @foreach ($popularMovies as $popularMovie )
    <x-movie-card :popularMovie="$popularMovie"/>
    @endforeach
</div>

@endsection

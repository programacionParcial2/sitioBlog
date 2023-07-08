@include('common/header')

<h1>Listado de Posts</h1>

@foreach($posts as $post)
{{ $post -> author_id }} - {{ $post -> title }} - {{ $post -> body }} <br>
@endforeach
@include('common/footer')
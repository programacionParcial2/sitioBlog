@include('common/header')

    <h1>Publicaciones</h1>
    <form action="/createPost" method="post">
        @csrf
        Título: <input type="text" name="title" id=""><br>
        Cuerpo: <textarea id="longtext" name="body" rows="10" cols="80"></textarea><br>
        <input type="submit" value="Publicar">

    </form>

    @if(session('blogPublished'))
        <b>Blog Publicado</b>
    @endif

@include('common/footer')
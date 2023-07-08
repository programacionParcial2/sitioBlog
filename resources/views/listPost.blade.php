@include('common/header')

<h1>Listado de Posts</h1>

<table style="border-collapse: collapse;border: 1px solid black;">
        <tr>
             <td>
                Id_autor
            </td>
            <td>
                Titulo
            </td>
            <td>
                Cuerpo
            </td>
        </tr>

        @foreach($posts as $post )
        <tr>
            <td>
                {{ $post -> author_id }}
            </td>
            <td>
                {{ $post -> title }}
            </td>
            <td>
                {{ $post -> body }}
            </td>
            @if(Auth::check())
            <td>
                <a href="/modifyPost/{{ $post -> id }}">Modificar</a>
            </td>
            @endif 
        </tr>

        @endforeach
    </table>
@include('common/footer')
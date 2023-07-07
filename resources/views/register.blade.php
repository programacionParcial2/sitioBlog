@include('common/header')

    <h1>Registrar</h1>
    <form action="/register" method="post">
        @csrf
        Nombre: <input type="text" name="name" id=""> <br>
        Correo: <input type="text" name="email" id=""> <br>
        Contraseña: <input type="password" name="password" id=""> <br>

        <input type="submit" value="Registrar">

    </form>

    @if(session('registered'))
        <b>Usuario registrado</b>
    @endif

@include('common/footer')

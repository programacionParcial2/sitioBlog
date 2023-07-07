
@include('common/header')

    <h1>Iniciar Sesión</h1>
    <form action="/login" method="post">
        @csrf
        Correo: <input type="text" name="email" id=""> <br>
        Contraseña: <input type="password" name="password" id=""> <br>

        <input type="submit" value="Acceder">

    </form>

    @if(session('error'))
        <b>Credenciales invalidas</b>
    @endif


    @include('common/footer')

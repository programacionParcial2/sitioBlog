<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SitioBlog</title>
</head>
<body>
    <a href="/">Principal</a>
    @if(Auth::check())
    Bienvenido {{ Auth::user() -> name }}
    <a href="/post">Insertar Post</a>
    <a href="/profile">Ver perfil</a>
    <a href="/logout">Cerrar sesión</a>
    @else 
    <a href="/login">Iniciar sesion</a>
    <a href="/register">Registrarse</a>
    @endif
    
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<h1>Libreria</h1>
<table class="table">
    @if(auth()->check())
<a class="nav-link" href="{{ route('logout') }}">Logout</a>
    </form>
    <a href="{{route('libros.create')}}">Crear Libro</a>
    @else
    <form action="{{route('login')}}"method="POST">
                    @csrf
        <button type="sumbit">Iniciar sesion</button>
    </form>
    @endif
<div class="container">
    <table>
        <thead>
            <tr>
            <td>Titulo</td>
            <td>Autor</td>
            <td>Editorial</td>
            @if(auth()->check())
            <td>Acciones</td>
            @endif
            </tr>
        </thead>
        <tbody>
        @foreach ($libro as $libros)
            <tr>
            <td>{{ $libros->titulo }}</td>
            <td>{{ $libros->autor }}</td>
            <td>{{ $libros->editorial }}</td>
            <td>
            @if(auth()->check())
            <a href="{{ route('libros.show', $libros->id) }}">Detalles</a>
            @endif
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>


















</div>
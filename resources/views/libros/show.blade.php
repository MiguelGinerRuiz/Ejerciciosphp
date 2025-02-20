<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<h1>Detalles del libro</h1>
@if(auth()->check())
<a class="nav-link" href="{{ route('logout') }}">Logout</a>
@endif
<form action="{{ route('libros.show', $libro->id) }}" method="POST">
@csrf
@method('PUT')
    <div class="row mb-3">
        <div class="form-group">
            <p><strong>Título</strong>{{$libro->titulo}}</p>
    </div>
    <div class="row mb-3">
        <div class="form-group">
        <p><strong>Autor</strong>{{$libro->autor}}</p>
    </div>
    <div class="form-group">
        <p><strong>Editorial</strong>{{$libro->editorial}}</p>
    </div>
    <a href="{{ route('libros.index')}}">volver</a>
</div>
</form>
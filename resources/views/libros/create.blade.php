<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<h1>Nuevo libro</h1>
@if(auth()->check())
<a class="nav-link" href="{{ route('logout') }}">Logout</a>
@endif
<form action="{{ route('libros.store') }}" method="POST">
    <div class="row mb-3">
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" name="titulo"id="titulo">
    </div>
    <div class="row mb-3">
        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" class="form-control" name="autor"id="autor">
    </div>
    <div class="form-group">
            <label for="editorial">Editorial:</label>
            <input type="text" class="form-control" name="editorial"id="
            editorial">
    </div>
    <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
    <a href="{{ route('libros.index')}}">volver</a>
</div>
</form>
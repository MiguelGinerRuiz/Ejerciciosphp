<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<h1>Libreria</h1>
<table class="table">
<div class="container">
    <table>
        <thead>
            <tr>
            <td>Titulo</td>
            <td>Autor</td>
            <td>fecha devolucion</td>
            </tr>
        </thead>
        <tbody>
        @foreach ($socio as $socios)
            <tr>
            <td>{{ $socios->nombre }}</td>
            <td>{{ $socios->email }}</td>
            <td>{{ $socios->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


















</div>
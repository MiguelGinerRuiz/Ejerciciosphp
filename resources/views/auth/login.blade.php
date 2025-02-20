<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<h1>Login</h1>
@if (!empty($error))
<div class="text-danger">
{{ $error }}
</div>
@endif
<form action="{{ route('login') }}" method="POST">
@csrf
<div class="form-group">
<label for="login">Login:</label>
<input type="text" class="form-control"
name="login" id="login" />
</div>
<div class="form-group">
<label for="password">Password:</label>
<input type="password" class="form-control"
name="password" id="password" />
</div>
<input type="submit" name="enviar" value="Enviar"
class="btn btn-dark btn-block">
</form>
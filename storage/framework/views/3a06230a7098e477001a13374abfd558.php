<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<h1>Detalles del libro</h1>
<?php if(auth()->check()): ?>
<a class="nav-link" href="<?php echo e(route('logout')); ?>">Logout</a>
<?php endif; ?>
<form action="<?php echo e(route('libros.show', $libro->id)); ?>" method="POST">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
    <div class="row mb-3">
        <div class="form-group">
            <p><strong>Título</strong><?php echo e($libro->titulo); ?></p>
    </div>
    <div class="row mb-3">
        <div class="form-group">
        <p><strong>Autor</strong><?php echo e($libro->autor); ?></p>
    </div>
    <div class="form-group">
        <p><strong>Editorial</strong><?php echo e($libro->editorial); ?></p>
    </div>
    <a href="<?php echo e(route('libros.index')); ?>">volver</a>
</div>
</form><?php /**PATH /opt/lampp/htdocs/Libreria/resources/views/libros/show.blade.php ENDPATH**/ ?>
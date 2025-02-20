<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<h1>Libreria</h1>
<table class="table">
    <?php if(auth()->check()): ?>
<a class="nav-link" href="<?php echo e(route('logout')); ?>">Logout</a>
    </form>
    <a href="<?php echo e(route('libros.create')); ?>">Crear Libro</a>
    <?php else: ?>
    <form action="<?php echo e(route('login')); ?>"method="POST">
                    <?php echo csrf_field(); ?>
        <button type="sumbit">Iniciar sesion</button>
    </form>
    <?php endif; ?>
<div class="container">
    <table>
        <thead>
            <tr>
            <td>Titulo</td>
            <td>Autor</td>
            <td>Editorial</td>
            <?php if(auth()->check()): ?>
            <td>Acciones</td>
            <?php endif; ?>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $libro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libros): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($libros->titulo); ?></td>
            <td><?php echo e($libros->autor); ?></td>
            <td><?php echo e($libros->editorial); ?></td>
            <td>
            <?php if(auth()->check()): ?>
            <a href="<?php echo e(route('libros.show', $libros->id)); ?>">Detalles</a>
            <?php endif; ?>
            </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>


















</div><?php /**PATH /opt/lampp/htdocs/Libreria/resources/views/libros/index.blade.php ENDPATH**/ ?>
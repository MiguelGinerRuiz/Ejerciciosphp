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
        <?php $__currentLoopData = $socio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($socios->nombre); ?></td>
            <td><?php echo e($socios->email); ?></td>
            <td><?php echo e($socios->created_at); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>


















</div><?php /**PATH /opt/lampp/htdocs/Libreria/resources/views/socios/index.blade.php ENDPATH**/ ?>
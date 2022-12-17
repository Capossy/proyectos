

<?php $__env->startSection('title', 'Productos'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Listado de Productos</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <a href="productos/create" class="btn btn-primary mb-3">Crear</a>
<table id="productos" class="table table-dark table-striped shadow-lg mt-4" style="width: 100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Codigo</th>
            <th scope='col'>Foto</th>
            <th scope='col'>Descripcion</th>
            <th scope='col'>Cantidad</th>
            <th scope='col'>Precio</th>
            <th scope='col'>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($producto->id); ?></td>
            <td><?php echo e($producto->codigo); ?></td>
            <td><img src="<?php echo e(asset('storage').'/'.$producto->foto); ?>" width="200" alt=""></td>
            <td><?php echo e($producto->descripcion); ?></td>
            <td><?php echo e($producto->cantidad); ?></td>
            <td><?php echo e($producto->precio); ?></td>
            <td>
                <a href="<?php echo e(url ('/productos/'.$producto->id.'/edit')); ?>" class="btn btn-info">Editar</a>
                <form action="<?php echo e(route ('productos.destroy',$producto)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script> 
<script>
    $(document).ready(function () {
    $('#productos').DataTable({
        "lengthMenu": [[5,10,25,50,-1],[5,10,25,50,"Todos"]] 
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectos\jetstreampro\resources\views/producto/index.blade.php ENDPATH**/ ?>
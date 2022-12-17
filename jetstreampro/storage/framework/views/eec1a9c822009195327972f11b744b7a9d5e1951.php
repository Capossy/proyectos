


<?php $__env->startSection('title', 'Creacion'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Creacion de Producto</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form action=<?php echo e(url('/productos')); ?> method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo $__env->make('producto.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jetstreampro\resources\views/producto/create.blade.php ENDPATH**/ ?>
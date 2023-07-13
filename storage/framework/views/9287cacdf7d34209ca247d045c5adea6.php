
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA JENIS OBAT</h3>      
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('/jenisobat')); ?>" method="post">
                <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="">NAMA JENIS OBAT</label>
                        <input type="text" name="jenisobat_nama" class="form-control" placeholder="Jenis Obat">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-juar\resources\views/jenisobat/create.blade.php ENDPATH**/ ?>
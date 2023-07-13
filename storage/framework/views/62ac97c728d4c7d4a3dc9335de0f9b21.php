
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA OBAT</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('/obat')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="">JENIS OBAT</label>
                        <select name="obat_id_jenisobat" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            <?php $__currentLoopData = $jenisobat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($jenis->jenisobat_id); ?>"><?php echo e($jenis->jenisobat_nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA OBAT</label>
                        <input type="text" name="obat_nama" class="form-control" placeholder="Nama Obat">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA</label>
                        <input type="text" name="obat_harga" class="form-control" placeholder="Harga Obat">
                    </div>
                    <div class="mb-3">
                        <label for="">STOCK</label>
                        <input type="text" name="obat_stock" class="form-control" placeholder="Stock Obat">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-juar\resources\views/obat/create.blade.php ENDPATH**/ ?>
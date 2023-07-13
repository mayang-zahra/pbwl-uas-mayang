
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA TRANSAKSI</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('/transaksi/' .$row->transaksi_id)); ?>" method="post">
                    <?php echo method_field('PATCH'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="">ID PAKET</label>
                        <input type="text" name="transaksi_id_paket" class="form-control" value="<?php echo e($row->transaksi_id_paket); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA KONSUMEN</label>
                        <input type="text" name="transaksi_nama_konsumen" class="form-control" value="<?php echo e($row->transaksi_nama_konsumen); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">BERAT</label>
                        <input type="text" name="transaksi_berat" class="form-control" value="<?php echo e($row->transaksi_berat); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">JUMLAH BAYAR</label>
                        <input type="text" name="transaksi_jumlah_bayar" class="form-control" value="<?php echo e($row->transaksi_jumlah_bayar); ?>">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-mayang\resources\views/transaksi/edit.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA PELANGGAN</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('/pelanggan')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="">GOLONGAN</label>
                        <select name="pel_id_gol" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($gol->gol_id); ?>"><?php echo e($gol->gol_nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">User</label>
                        <select name="pel_id_user" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($user->user_id); ?>"><?php echo e($user->user_nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">KODE</label>
                        <input type="text" name="pel_no" class="form-control" placeholder="Kode">
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA</label>
                        <input type="text" name="pel_nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat</label>
                        <input type="text" name="pel_alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="mb-3">
                        <label for="">Nomor Hp</label>
                        <input type="text" name="pel_hp" class="form-control" placeholder="Nomor Hp">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-laravel-quiz-juar\resources\views/pelanggan/create.blade.php ENDPATH**/ ?>
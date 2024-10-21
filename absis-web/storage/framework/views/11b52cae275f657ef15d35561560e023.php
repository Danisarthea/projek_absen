

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4" >
            <div>
                <h3 class="fw-bold mb-3"></h3>
                <h6 class="op-7 mb-2">Aplikasi Absen Siswa</h6>
            </div>           
        </div>
        <div class="col-md-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                    <div class="card-title">Reset Password Siswa</div>
                    <a href="<?php echo e(route('pages.kdatasiswa.list')); ?>" class="btn btn-primary">Kembali</a>
                  </div>
                  <div class="card-body">

                  <form class="col-lg-6" method="post" action="">
                    <input type="text" name="id" value="" hidden>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="password" hidden>
                        <input type="text" class="form-control" id="password" name="pw">
                    </div>
                    <button href="" class="btn btn-primary">Reset</button>
                </form>
                 
                  </div>
                </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\absis-web\resources\views\pages\kdatasiswa\repas.blade.php ENDPATH**/ ?>
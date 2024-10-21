

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
                  <div class="card-title">Edit Data | <b><?php echo e($wali->nama); ?></b></div>
                  <a href="<?php echo e(route('list_wali.index')); ?>" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body">
                  <?php if(session()->has('pesan')): ?>
                      <div class="alert alert-info" role="alert">
                          <?php echo e(session('pesan')); ?>

                      </div>
                  <?php endif; ?>
                  <form class="col-6" action="/list_wali/<?php echo e($wali->id); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo method_field('put'); ?>
                      <?php echo csrf_field(); ?>
                      <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" id="nama" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama" value="<?php echo e(old('nama') ?? $wali->nama); ?>">
                          <span><?php echo e($errors->first('nama')); ?></span>
                      </div>
                      <div class="form-group">
                        <label for="wali_kelas">Wali Kelas</label>
                        <select id="wali_kelas" name="wali_kelas" class="form-control" name="wali_kelas" value="<?php echo e(old('wali_kelas') ?? $wali->wali_kelas); ?>" required>
                            <option value="<?php echo e(old('wali_kelas') ?? $wali->wali_kelas); ?>"></option>
                            <option value="X-RPL">X RPL</option>
                            <option value="X-TKJ">X TKJ</option>
                            <option value="X-TKR">X TKR</option>
                            <option value="X-AK">X AK</option>
                            <option value="X-MP">X MP</option>
                            <option value="X-HTL">X HTL</option>
                            <option value="XI-RPL">XI RPL</option>
                            <option value="XI-TKJ">XI TKJ</option>
                            <option value="XI-TKR">XI TKR</option>
                            <option value="XI-AK">XI AK</option>
                            <option value="XI-MP">XI MP</option>
                            <option value="XI-HTL">XI HTL</option>
                            <option value="XII-RPL">XII RPL</option>
                            <option value="XII-TKJ">XII TKJ</option>
                            <option value="XII-TKR">XII TKR</option>
                            <option value="XII-AK">XII AK</option>
                            <option value="XII-MP">XII MP</option>
                            <option value="XII-HTL">XII HTL</option>
                        </select>
                    </div>
                      <div class="form-group">
                          <label for="kontak">Kontak</label>
                          <input type="number" id="kontak" class="form-control <?php $__errorArgs = ['kontak'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="kontak" value="<?php echo e(old('kontak') ?? $wali->kontak); ?>">
                          <span><?php echo e($errors->first('kontak')); ?></span>
                      </div>
                      <div class="form-group d-flex flex-column">
                          <label for="jenis_kelamin">Jenis Kelamin</label>
                          <div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" id="laki_laki" name="jenis_kelamin" value="laki-laki" <?php echo e(old('jenis_kelamin') ?? $wali->jenis_kelamin === 'laki-laki' ? 'checked' : ''); ?>>
                              <label for="no_pasien">Laki-laki</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" <?php echo e(old('jenis_kelamin') ?? $wali->jenis_kelamin === 'perempuan' ? 'checked' : ''); ?>>
                              <label for="no_pasien">Perempuan</label>
                          </div>
                      </div>
                          <span><?php echo e($errors->first('jenis_kelamin')); ?></span>
                      </div>
                      <div class="form-group">
                          <label for="no_pasien">Alamat</label>
                          <input type="text" id="alamat" class="form-control <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="alamat" value="<?php echo e(old('alamat') ?? $wali->alamat); ?>">
                          <span><?php echo e($errors->first('alamat')); ?></span>
                      </div>
                      <button type="submit" class="btn btn-primary mt-3 ms-3">Edit</button>
                  </form>
                </div>
              </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\absis-web\resources\views\pages\kdatawali\edit.blade.php ENDPATH**/ ?>
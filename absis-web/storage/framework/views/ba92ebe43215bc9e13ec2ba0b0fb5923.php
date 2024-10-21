

<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="page-inner">
      <div class="d-flex justify-content-end align-items-center mb-3">
      <label for="exampleInputPassword1">Tambah Kelas</label>
          <div class="form-group col-6">
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Kelas">
          </div>
          <a href="" class="btn btn-primary">Tambah</a>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <div class="card-title">List Kelas</div>
          </div>
          <div class="card-body">
                  
                <!-- start tabel  -->
            <table class="table table-hover">
              <thead>
                <tr class="text-center">
                  <th scope="col">No</th>
                  <th>Nama Kelas</th>
                  <th>Jumlah Siswa</th>
                  <th>Wali Kelas</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td class="text-center"><?php echo e($loop->iteration); ?></td>
                    <td class="text-center"><?php echo e($kel->nama_kelas); ?></td>
                    <td class="text-center"><?php echo e($kel->siswa->count()); ?></td>
                    <td class="text-center"><?php echo e($kel->guru->nama ?? '-'); ?></td>
                    <td class="text-center"></td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
            <!-- end tabel  -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\absis-web\resources\views\pages\kdatakelas\list.blade.php ENDPATH**/ ?>
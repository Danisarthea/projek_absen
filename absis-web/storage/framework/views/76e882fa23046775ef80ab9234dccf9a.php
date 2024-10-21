

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
                  <div class="card-title">List Wali Kelas</div>
                  <a href="/list_wali/create" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">

                <!-- start tabel  -->
                <table class="table table-hover">
                    <thead>
                      <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Wali Kelas</th>
                        <th scope="col">kontak</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $wali; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td class="text-center"><?php echo e($loop->iteration); ?></td>
                          <td class="text-center"><?php echo e($wl->nama); ?></td>
                          <td class="text-center"><?php echo e($wl->kelas ? $wl->kelas->nama_kelas : '-'); ?></td>
                          <td class="text-center"><?php echo e($wl->kontak); ?></td>
                          <td class="text-center"><?php echo e($wl->jenis_kelamin); ?></td>
                          <td class="text-center">
                            <a href="/list_wali/<?php echo e($wl->id); ?>/edit" class="btn btn-primary"><i class="far fa-edit"></i></a>
                            <form action="/list_wali/<?php echo e($wl->id); ?>" method="post" class="d-inline">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('delete'); ?>
                              <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><i class="far fa-trash-alt"></i></button>
                            </form>
                          </td>
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
            
<?php echo $__env->make('components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\absis-web\resources\views/pages/kdatawali/list.blade.php ENDPATH**/ ?>
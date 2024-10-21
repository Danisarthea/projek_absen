

<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="page-inner">
      
      <div class="d-flex">
      <div class="col-6 p-2">
          <label for="exampleInputEmail1">Tanggal Awal</label>
          <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="dd-mm-yyyy">
      </div>
      <div class="col-6 p-2">
          <label for="exampleInputEmail1">Tanggal Akhir</label>
          <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="dd-mm-yyyy">
      </div>
      </div>
      <button class="btn btn-primary m-3">Lihat</button>      
      <div class="col-md-12">

          <div class="card">
              <div class="card-header">
                  <div class="card-title">Laporan Kehadiran</div>
              </div>
                <div class="card-body">

                <!-- start tabel  -->
                  <table class="table table-hover">
                    <thead>
                      <tr class="text-center">
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                        <img src="img/jm_denis.jpg" class="rounded-circle me-3" style="height: 30px;">  
                        Daniswara Arthea Pragustama</td>
                        <td class="text-center">XII RPL</td>
                        <td class="text-center">Izin</td>
                        <td class="text-center">20-08-24</td>
                        <td class="text-center">06.23</td>
                        <td class="text-center">Terkonfirmasi</td>
                      </tr>
                      <tr>
                        <td>
                        <img src="img/mlane.jpg" class="rounded-circle me-3" style="height: 30px;">    
                        Afriza David Fauzi</td>
                        <td class="text-center">XII RPL</td>
                        <td class="text-center">Hadir</td>
                        <td class="text-center">20-08-24</td>
                        <td class="text-center">05.34</td>
                        <td class="text-center">Tepat</td>
                      </tr>
                      <tr>
                        <td>
                        <img src="img/sauro.jpg" class="rounded-circle me-3" style="height: 30px;">    
                        Agam Munandar</td>
                        <td class="text-center">XII RPL</td>
                        <td class="text-center">Hadir</td>
                        <td class="text-center">20-08-24</td>
                        <td class="text-center">07.33</td>
                        <td class="text-center">Telat</td>
                      </tr>
                      <tr>
                        <td>
                        <img src="img/talha.jpg" class="rounded-circle me-3" style="height: 30px;">    
                        Agung Herdiansyah</td>
                        <td class="text-center">XII RPL</td>
                        <td class="text-center">Hadir</td>
                        <td class="text-center">20-08-24</td>
                        <td class="text-center">06.33</td>
                        <td class="text-center">Tepat</td>
                      </tr>
                      <tr>
                        <td>
                        <img src="img/arashmil.jpg" class="rounded-circle me-3" style="height: 30px;">    
                        Eshan Ghulam Zakiya</td>
                        <td class="text-center">XII RPL</td>
                        <td class="text-center">Sakit</td>
                        <td class="text-center">20-08-24</td>
                        <td class="text-center">07.33</td>
                        <td class="text-center">Menunggu</td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- end tabel  -->

                </div>
              </div>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>




            
<?php echo $__env->make('components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\absis-web\resources\views/pages/laporan/laporan.blade.php ENDPATH**/ ?>
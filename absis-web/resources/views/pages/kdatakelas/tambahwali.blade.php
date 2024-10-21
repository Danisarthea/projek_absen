@extends('components.layout')

@section('content')
<div class="container">
  <div class="page-inner">
      <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div class="card-title">Tambah Wali</div>
                  <a href="{{ route('pages.kdatakelas.list') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body">

                  <form class="col-6">
                          <div class="form-group">
                              <label for="exampleFormControlSelect1"
                                  >Nama Wali</label
                              >
                              <select
                                  class="form-select"
                                  id="exampleFormControlSelect1"
                              >
                                  <option>Pak Suharta</option>
                                  <option>Pak Surya</option>
                                  <option>Pak Nano</option>
                                  <option>Bu Sri</option>
                              </select>
                          </div>
                      <button type="submit" class="btn btn-primary mt-3 ms-3">Tambah</button>
                  </form>
                </div>
                <table class="table table-hover">
                    <thead>
                      <tr class="text-center">
                        <th scope="col">Nama</th>
                        <th scope="col">Kontak</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td class="text-center">Pak Suhendi</td>
                          <td class="text-center">085876543321</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
      </div>
  </div>
</div>
@endsection
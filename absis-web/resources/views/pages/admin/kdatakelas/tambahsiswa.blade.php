@extends('components.layout')

@section('content')
<div class="container">
  <div class="page-inner">
      <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div class="card-title">Tambah Siswa</div>
                  <a href="{{ route('pages.kdatakelas.list') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body">

                  <form class="col-6">
                          <div class="form-group">
                              <label for="exampleFormControlSelect1"
                                  >Nama</label
                              >
                              <select
                                  class="form-select"
                                  id="exampleFormControlSelect1"
                              >
                                  <option>Danis</option>
                                  <option>Afriza</option>
                                  <option>Agam</option>
                                  <option>Irfan</option>
                                  <option>Galuh</option>
                              </select>
                          </div>
                      <button type="submit" class="btn btn-primary mt-3 ms-3">Tambah</button>
                  </form>
                </div>
                <table class="table table-hover mt-5">
                    <thead>
                      <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">1</td>
                          <td class="text-center">Galuh</td>
                          <td class="text-center">32110</td>
                          <td class="text-center">
                          <a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                          </td>
                      </tr>
                      <tr>
                        <td class="text-center">2</td>
                          <td class="text-center">Agung</td>
                          <td class="text-center">32110</td>
                          <td class="text-center">
                          <a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                          </td>
                      </tr>
                      <tr>
                        <td class="text-center">3</td>
                          <td class="text-center">Iqbal</td>
                          <td class="text-center">32110</td>
                          <td class="text-center">
                          <a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                          </td>
                      </tr>
                      <tr>
                        <td class="text-center">4</td>
                          <td class="text-center">Eshan</td>
                          <td class="text-center">32110</td>
                          <td class="text-center">
                          <a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                          </td>
                      </tr>
                      <tr>
                        <td class="text-center">5</td>
                          <td class="text-center">Irfan</td>
                          <td class="text-center">32110</td>
                          <td class="text-center">
                          <a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                          </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
      </div>
  </div>
</div>
@endsection
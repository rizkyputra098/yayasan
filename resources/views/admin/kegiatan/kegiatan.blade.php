@extends('admin.layout.reusable')

@section('content')
<h1 class="mt-4">Kegiatan</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Kegiatan</li>
</ol>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">Judul</th>
                            <th class="col-md-2">Tanggal</th>
                            <th class="col-md-2">Instansi</th>
                            <th class="col-md-2">status</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1001</td>
                            <td>Ani</td>
                            <td>Ilmu Komputer</td>
                            <td>Ilmu Komputer</td>
                            <td>
                                <a href='' class="btn btn-success btn-sm">
                                    <i class="fas fa-check"></i> Approve
                                </a>
                                <a href='' class="btn btn-warning btn-sm">
                                    <i class="fas fa-file-alt"></i> View
                                </a>
                                <a href='' class="btn btn-danger btn-sm">
                                    <i class="fas fa-times"></i> Reject
                                </a>                                
                            </td>
                        </tr>
                    </tbody>
                </table>
               
          </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

@endsection
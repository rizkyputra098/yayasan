@extends('admin.layout.reusable')

@section('content')
<form action='' method='post'>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='nim' id="nim">
            </div>
        </div>
      
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
      </form>

@endsection
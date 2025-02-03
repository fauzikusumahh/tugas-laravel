@extends('template.main')

@section('judul', 'tambah cast')

@section('conten')

<!-- left column -->
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Menambahkan cast</h3>
        </div>
        <!-- form start -->
        <form action="{{ route('cast.submit') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" required placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" name="umur" required onkeypress="return even.charCode >= 48 && event.charCode <= 57" class="form-control" placeholder="masukan umur">
                </div>
                <div class="form-group">
                    <label for="bio">bio</label><br>
                    <textarea name="bio" rows="5" cols="50" placeholder="Masukan biorafi" required></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>
<!-- /.card -->

@endsection
@extends('template.main')

@section('judul', 'edit genre')

@section('conten')

<!-- left column -->
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Mengedit genre</h3>
        </div>
        <!-- form start -->
        <form action="{{ route('genre.update', $genre->id) }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Genre</label>
                    <input type="text" name="nama" value="{{ $genre->nama }}" class="form-control" required placeholder="Masukkan Nama Genre">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>
</div>
<!-- /.card -->

@endsection
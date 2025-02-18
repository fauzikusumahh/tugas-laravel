@extends('template.main')

@section('judul', 'edit cast')

@push('css')
  <link rel="stylesheet" href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush


@section('conten')

<!-- left column -->
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Mengedit cast</h3>
        </div>
        <!-- form start -->
        <form action="{{ route('cast.update', $casts->id) }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" value="{{ $casts->name }}"class="form-control" required placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="age">Umur</label>
                    <input type="number" name="age" value="{{  $casts->age }}" required onkeypress="return even.charCode >= 48 && event.charCode <= 57" class="form-control" placeholder="masukan umur">
                </div>
                <div class="form-group">
                    <label for="bio">bio</label><br>
                    <textarea name="bio" rows="5" cols="50" placeholder="Masukan biorafi" required>{{ $casts->bio }}</textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">edit</button>
            </div>
        </form>
    </div>
</div>
<!-- /.card -->

@endsection


@push('js')
  <script src="{{ asset('template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
  <script>
    $(function () {
      $("#table").DataTable({
        "paging": true, "lengthChange": false, "searching": false, "ordering": true,"info": true, "autoWidth": false, "responsive": true,
      });
    });
  </script>
@endpush

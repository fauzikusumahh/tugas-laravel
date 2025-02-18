@extends('template.main')

@section('judul', 'data genre')

@push('css')
  <link rel="stylesheet" href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('conten')

<div class="d-flex">
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route("genre.tambah") }}">tambah genre</a>
    </div>
</div>

<table class="table">

    <tr>
        <th>no</th>
        <th>nama genre</th>
        <th>aksi</th>
    </tr>

    @foreach($genres as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->name }}</td>
         <td>
            <a href="{{ route('genre.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>

            <form action="{{ route('genre.delete', $data->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Delete</button>
            </form>
         </td>
    </tr>
    @endforeach
</table>

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

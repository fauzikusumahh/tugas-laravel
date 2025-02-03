@extends('template.main')

@section('judul', 'data genre')

@section('conten')

<div class="d-flex">
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route("genre.tambah")}}">tambah genre</a>

    </div>
</div>

<table class="table">

    <tr>
        <th>no</th>
        <th>nama genre</th>
        <th>aksi</th>
    </tr>

    @foreach($genre as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nama }}</td>
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
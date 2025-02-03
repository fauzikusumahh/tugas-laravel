@extends('template.main')

@section('judul', 'data cast')

@section('conten')

<div class="d-flex">
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route("cast.tambah") }}">tambah cast</a>

    </div>
</div>

<table class="table">

    <tr>
        <th>no</th>
        <th>nama</th>
        <th>umur</th>
        <th>bio</th>
        <th>aksi</th>
    </tr>

    @foreach($cast as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->umur }}</td>
        <td class="wrap-text">{{ $data->bio }}</td>
         <td>
            <a href="{{ route('cast.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>

            <form action="{{ route('cast.delete', $data->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Delete</button>
            </form>
         </td>
    </tr>
    @endforeach
</table>

<style>
    .wrap-text {
        max-width: 200px;
        word-wrap: break-word;
        white-space: normal;
    }
</style>

@endsection
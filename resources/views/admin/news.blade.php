@extends('layouts/admin-layout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kegiatan</h1>
    @if (session()->has('create'))
    <div class="alert alert-success" role="alert">
        {{ session('create') }}
    </div>
    @endif
    @if (session()->has('destroy'))
    <div class="alert alert-success" role="alert">
        {{ session('destroy') }}
    </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary align-self-center">Kegiatan</h6>
            <a href="/admin/news/create" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="data-table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kutipan</th>
                            <th>Tanggal Update</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $news)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $news->title }}</td>
                            <td>{!! $news->excerpt !!}</td>
                            <td>{{ $news->updated_at   }}</td>
                            <td>
                                <div class="d-flex justify-content-around">

                                    <a href="/admin/news/{{ $news->id }}/edit" class="btn btn-primary mr-1"><i
                                            class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                    <form action="/admin/news/{{ $news->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure?')"><i
                                                class="fa-sharp fa-solid fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<script>
$(document).ready(function() {
    $('#data-table').DataTable();
});
</script>
<!-- end of page content -->
@endsection
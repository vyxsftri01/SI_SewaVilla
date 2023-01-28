@extends('layouts.admin3')
@section('content')
    <div class="container">
        <div class="row justify-content-center" >
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header">
                        Data Siswa
                        <a href="{{ route('halaman.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Judul</th>
                                        <th>Background</th>
                                        <th>destitle</th>
                                        <th>deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($halaman as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->title }}</td>
                                            <td>{{ $data->judul }}</td>
                                            <td>
                                                 <img src="{{ $data->image() }}" style="width: 150px; height:100px;"  alt="">
                                            </td>
                                            <td>{{ $data->destitle }}</td>
                                            <td>{{ $data->deskripsi }}</td>
                                            <td>
                                                <form action="{{ route('halaman.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('halaman.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('halaman.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
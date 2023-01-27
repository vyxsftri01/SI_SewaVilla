@extends('layouts.admin3')
@section('content')
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header">
                        Data Siswa
                        <a href="{{ route('kota.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NamaKota</th>
                                        <th>Alamat Villa</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($kota as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->namakota }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            <td> 
                                                <form action="{{ route('kota.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('kota.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('kota.show', $data->id) }}"
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
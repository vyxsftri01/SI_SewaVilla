@extends('layouts.admin3')
@section('content')
    <div class="container">
        <div class="row justify-content-center " >
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header">
                        Data Siswa
                        <a href="{{ route('villa.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Villa</th>
                                        <th>Fasilitas</th>
                                        <th>Kapasitas</th>
                                        <th>Lantai</th>
                                        <th>Kamar</th>
                                        <th>Kamar Mandi</th>
                                        <th>View</th>
                                        <th>Kasur</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($villa as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->namavilla }}</td>
                                            <td>{{ $data->fasilitas }}</td>
                                            <td>{{ $data->kapasitas }}</td>
                                            <td>{{ $data->lantai }}</td>
                                            <td>{{ $data->kamar }}</td>
                                            <td>{{ $data->kamar_mandi }}</td>
                                            <td>{{ $data->view }}</td>
                                            <td>{{ $data->kasur }}</td>
                                            <td>{{ $data->harga }}</td>
                                            <td> 
                                                <form action="{{ route('villa.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('villa.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('villa.show', $data->id) }}"
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
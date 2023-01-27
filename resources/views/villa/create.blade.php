@extends('layouts.admin3')

@section('content')
    <div class="container">
        <div class="row justify-content-center" >
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data villa
                    </div>
                    <div class="card-body">
                        <form action="{{ route('villa.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">nama villa</label>
                                <input type="text" class="form-control  @error('namavilla') is-invalid @enderror"
                                    name="namavilla">
                                @error('namavilla')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">fasilitas</label>
                                <input type="text" class="form-control  @error('fasilitas') is-invalid @enderror"
                                    name="fasilitas">
                                @error('fasilitas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kapasitas</label>
                                <input type="text" class="form-control  @error('kapasitas') is-invalid @enderror"
                                    name="kapasitas">
                                @error('kapasitas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lantai</label>
                                <input type="text" class="form-control  @error('lantai') is-invalid @enderror"
                                    name="lantai">
                                @error('lantai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kamar</label>
                                <input type="text" class="form-control  @error('kamar') is-invalid @enderror"
                                    name="kamar">
                                @error('kamar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kamar Mandi</label>
                                <input type="text" class="form-control  @error('kamar_mandi') is-invalid @enderror"
                                    name="kamar_mandi">
                                @error('kamar_mandi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">View</label>
                                <input type="text" class="form-control  @error('view') is-invalid @enderror"
                                    name="view">
                                @error('view')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">kasur</label>
                                <input type="text" class="form-control  @error('Kasur') is-invalid @enderror"
                                    name="kasur">
                                @error('kasur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" class="form-control  @error('harga') is-invalid @enderror"
                                    name="harga">
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
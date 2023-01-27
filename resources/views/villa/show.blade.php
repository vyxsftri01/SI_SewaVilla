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
                        <div class="mb-3">
                            <label class="form-label">namavilla</label>
                            <input type="text" class="form-control" name="namavilla" value="{{ $villa->namavilla }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">fasilitas</label>
                            <input type="text" class="form-control" name="fasilitas" value="{{ $villa->fasilitas }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">kapasitas</label>
                            <input type="text" class="form-control" name="kapasitas" value="{{ $villa->kapasitas }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">lantai</label>
                            <input type="text" class="form-control" name="lantai" value="{{ $villa->lantai }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">kamar</label>
                            <input type="text" class="form-control" name="kamar" value="{{ $villa->kamar }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">kamar_mandi</label>
                            <input type="text" class="form-control" name="kamar_mandi" value="{{ $villa->kamar_mandi }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">view</label>
                            <input type="text" class="form-control" name="view" value="{{ $villa->view }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">kasur</label>
                            <input type="text" class="form-control" name="kasur" value="{{ $villa->kasur }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">harga</label>
                            <input type="text" class="form-control" name="harga" value="{{ $villa->harga }}" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('villa.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
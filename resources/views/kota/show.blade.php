@extends('layouts.admin3')

@section('content')
    <div class="container">
        <div class="row justify-content-center" >
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data kota
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">namakota</label>
                            <input type="text" class="form-control" name="namakota" value="{{ $kota->namakota }}" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('kota.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
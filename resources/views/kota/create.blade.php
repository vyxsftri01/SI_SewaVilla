@extends('layouts.admin3')

@section('content')
    <div class="container">
        <div class="row justify-content-center" >
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Kota
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kota.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">nama kota</label>
                                <input type="text" class="form-control  @error('namakota') is-invalid @enderror"
                                    name="namakota">
                                @error('namakota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control  @error('alamat') is-invalid @enderror"
                                    name="alamat">
                                @error('alamat')
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
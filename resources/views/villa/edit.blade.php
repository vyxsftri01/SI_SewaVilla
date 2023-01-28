@extends('layouts.admin3')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data villa
                    </div>
                    <div class="card-body">
                        <form action="{{ route('villa.update', $villa->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Foto</label>
                                @if (isset($villa) && $villa->foto)
                                    <p>
                                        <img src="{{ asset('images/image/' . $villa->foto) }}"
                                            class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                            alt="">
                                    </p>
                                @endif
                                <input type="file" class="form-control  @error('foto') is-invalid @enderror"
                                    name="foto" value="{{ $villa->foto }}">
                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">namavilla</label>
                                <input type="text" class="form-control  @error('namavilla') is-invalid @enderror"
                                    name="namavilla" value="{{ $villa->namavilla }}">
                                @error('namavilla')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">fasilitas</label>
                                <input type="text" class="form-control  @error('fasilitas') is-invalid @enderror"
                                    name="fasilitas" value="{{ $villa->fasilitas }}">
                                @error('fasilitas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">kapasitas</label>
                                <input type="text" class="form-control  @error('kapasitas') is-invalid @enderror"
                                    name="kapasitas" value="{{ $villa->kapasitas }}">
                                @error('kapasitas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">lantai</label>
                                <input type="text" class="form-control  @error('lantai') is-invalid @enderror"
                                    name="lantai" value="{{ $villa->lantai }}">
                                @error('lantai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">kamar</label>
                                <input type="text" class="form-control  @error('kamar') is-invalid @enderror"
                                    name="kamar" value="{{ $villa->kamar }}">
                                @error('kamar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">kamar_mandi</label>
                                <input type="text" class="form-control  @error('kamar_mandi') is-invalid @enderror"
                                    name="kamar_mandi" value="{{ $villa->kamar_mandi }}">
                                @error('kamar_mandi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">view</label>
                                <input type="text" class="form-control  @error('view') is-invalid @enderror"
                                    name="view" value="{{ $villa->view }}">
                                @error('view')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">kasur</label>
                                <input type="text" class="form-control  @error('kasur') is-invalid @enderror"
                                    name="kasur" value="{{ $villa->kasur }}">
                                @error('kasur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">harga</label>
                                <input type="number" class="form-control  @error('harga') is-invalid @enderror"
                                    name="harga" value="{{ $villa->harga }}">
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
@extends('layouts.admin3')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data halaman
                    </div>
                    <div class="card-body">
                        <form action="{{ route('halaman.update', $halaman->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">title</label>
                                <input type="text" class="form-control  @error('title') is-invalid @enderror"
                                    name="title" value="{{ $halaman->title }}">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">judul</label>
                                <input type="text" class="form-control  @error('judul') is-invalid @enderror"
                                    name="judul" value="{{ $halaman->judul }}">
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto</label>
                                @if (isset($halaman) && $halaman->foto)
                                    <p>
                                        <img src="{{ asset('images/image/' . $halaman->foto) }}"
                                            class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                            alt="">
                                    </p>
                                @endif
                                <input type="file" class="form-control  @error('foto') is-invalid @enderror"
                                    name="foto" value="{{ $halaman->foto }}">
                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">destitle</label>
                                <input type="text" class="form-control  @error('destitle') is-invalid @enderror"
                                    name="destitle" value="{{ $halaman->destitle }}">
                                @error('destitle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <p></p>
                            <div class="mb-3">
                                <label class="form-label">deskripsi</label>
                                <input type="text" class="form-control  @error('deskripsi') is-invalid @enderror"
                                    name="deskripsi" value="{{ $halaman->deskripsi }}">
                                @error('deskripsi')
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
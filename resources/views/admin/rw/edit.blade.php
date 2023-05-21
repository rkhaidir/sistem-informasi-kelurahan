@extends('layouts.admin')

@section('content')
<div class="section-header">
  <h1>{{ __($title) }}</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Components</a></div>
    <div class="breadcrumb-item">Article</div>
  </div>
</div>

<div class="section-body">
  <div class="card">
    <div class="card-body">
      <form action="{{ route('admin.wilayah.rw.update', $rw->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nama">Nama RW</label>
          <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" autofocus value="{{ old('nama', $rw->nama) }}">
          @error('nama')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="ketua">Nama Ketua RW</label>
          <input type="text" id="ketua" name="ketua" class="form-control @error('ketua') is-invalid @enderror" value="{{ old('ketua', $rw->ketua) }}">
          @error('ketua')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <button type="submit" class="btn btn-md btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
@endsection

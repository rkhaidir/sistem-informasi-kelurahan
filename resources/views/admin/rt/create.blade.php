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
      <form action="{{ route('admin.wilayah.rt.store') }}" method="POST">
        @csrf

        <div class="form-group">
          <label for="nama">Nama RW</label>
          <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" autofocus>
          @error('nama')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="ketua">Nama Ketua RW</label>
          <input type="text" id="ketua" name="ketua" class="form-control @error('ketua') is-invalid @enderror">
          @error('ketua')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <div class="form-group">
          <label for="rw_id">Lokasi RW</label>
          <select name="rw_id" id="rw_id" class="form-control @error('rw_id') is-invalid @enderror">
            <option value="">Pilih RW</option>
            @foreach ($rws as $rw)
              <option value="{{ $rw->id }}">{{ $rw->nama }}</option>
            @endforeach
          </select>
          @error('rw_id')
            <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>

        <button type="submit" class="btn btn-md btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
@endsection

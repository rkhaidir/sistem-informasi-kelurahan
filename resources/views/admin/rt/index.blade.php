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
      <a href="{{ route('admin.wilayah.rt.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible show fade">
          <div class="alert-body">
            <button class="close" data-dismiss="alert">
              <span>&times;</span>
            </button>
            {{ session('success') }}
          </div>
        </div>
      @endif

      <div class="table-responsive">
        <table class="table table-bordered table-md">
          <thead>
            <th width="5%">No</th>
            <th>Nama RT</th>
            <th>Nama Ketua RT</th>
            <th>Letak RW</th>
            <th width="10%">#</th>
          </thead>
          <tbody>
            @foreach ($rts as $rt)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $rt->nama }}</td>
              <td>{{ $rt->ketua }}</td>
              <td>{{ $rt->rw->nama }}</td>
              <td>
                <a href="{{ route('admin.wilayah.rt.edit', $rt->id) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                <form action="{{ route('admin.wilayah.rt.destroy', $rt->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="float-right">
        {{ $rts->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
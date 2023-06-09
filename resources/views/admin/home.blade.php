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
{{-- <div class="section-header">
  <h1>{{ __('Dashboard') }}</h1>
</div> --}}

<div class="section-body">
  @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
  @endif

  <div class="card">
    <div class="card-body">
      {{ __('You are logged in!') }}
    </div>
  </div>
</div>
@endsection

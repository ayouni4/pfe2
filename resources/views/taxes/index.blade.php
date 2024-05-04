{{-- resources/views/taxes/index.blade.php --}}
@extends('layouts/contentNavbarLayout')

@section('page-script')
  <style type="text/css">
      .btn-tax {
          width: 100%;
          margin-bottom: 10px; /* Espace entre les boutons */
      }
  </style>
@endsection

@section('content')
  <h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Settings /</span> Taxes Management
  </h4>
  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-md-row mb-4 gap-2 gap-lg-0">
        <li class="nav-item">
          <a class="nav-link active btn-tax" href="{{ route('taxes.index') }}"><i class="mdi mdi-cash-multiple mdi-20px me-1"></i>Taxes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn-tax" href="{{ route('taxrules.index') }}"><i class="mdi mdi-gavel mdi-20px me-1"></i>Tax Rules</a>
        </li>
      </ul>
    </div>
  </div>
@endsection

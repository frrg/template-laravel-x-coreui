@extends('layouts.frontend.master-frontend')
@section('title')

@endsection
@section('content')
<canvas id="canvas">Canvas is not supported in your browser</canvas>
    <img src="{{ asset('assets/img/logo-new.png') }}" alt="" />
@include('layouts.frontend.partials.footer')
@endsection

@push('css')

    <!-- Custom Hujan -->
    <link
      rel="stylesheet"
      href="{{ asset('assets/template/custom.css') }}"
    />

    <!-- Styling -->
    <link rel="stylesheet" href="{{ asset('assets/template/index.css?rnd=123') }}" />

@endpush

@push('scripts')


<script src="https://cdn.jsdelivr.net/npm/p5@0.10.2/lib/p5.js"></script>
    <script src="{{ asset('assets/template/custom.js') }}"></script>

@endpush
@extends('Header')

@section('title', 'CareFinder - Dashboard')

@push('font-conten')

@endpush

{{-- ini buat ngisi href style css --}}
@push('style-conten')
    <link rel="shortcut icon" href="{{ asset('resource/image/logo/Logo Bulet.png') }}">
@endpush


@push('style-font-family')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium&display=swap" rel="stylesheet">
@endpush


@section('conten')

@endsection

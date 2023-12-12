@extends('layout.master')

@section('styles')
    <style>
        .show-more-short::after {
            content: "";
            width: 100%;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            border: 1px solid #ccc;
            z-index: -1;
        }
        .wrapper {
            display: grid;
            grid-template-rows: 62px calc(100vh-62px);
            grid-template-cols: 224px 1fr;
        }
    </style>
@stop

@section('content')
    <div class="content-wrapper self-start h-[calc(100vh-70px)] overflow-y-auto">
        @include('profile-content')
    </div>
@stop

@section('scripts')
    {{-- <script src="{{ asset('javascript/sidebar.js') }}"></script> --}}
    <script src="{{ asset('javascript/profile.js') }}"></script>
@stop

@extends('layout.master')
@section('styles')
    <style>
        div.sharing-button::after {
            position: absolute;
            content: "";
            display: block;
            height: 1px;
            width: 100%;
            margin: 8px 0;
            bottom: -15px;
            left: 0;
            background: #000;
            cursor: pointer;
        }

        @media screen and (min-width:1024px) {
            .main-grid {
                display: grid;
                grid-template-columns: 1fr 400px;
                grid-template-rows: 1120px 1fr;
                grid-column-end: span 1;
            }
        }
    </style>
@stop

@section('content')
    @include('video-detail-content')
@stop

@section('scripts')
    <script src="{{ asset('javascript/video-detail.js') }}"></script>
@stop

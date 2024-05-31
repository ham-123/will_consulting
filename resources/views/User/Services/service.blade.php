@extends('layouts.user')

@section('title', $service->title)

@section('content')
    <div class="snappy-inner-banner"
        style="background-image: url('{{ asset('images/banner/5.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 50px 0;">


        <div class="container">
            <h2>{{ $service->title }}</h2>
            <ul>
                <li><a href="{{ route('accueil') }}" class="tran3s">Accueil</a></li>
                <li>.</li>
                <li><a href="{{ route('services') }}" class="tran3s">Services</a></li>
                <li>.</li>
                <li>{{ $service->title }}</li>
            </ul>
        </div>
    </div>

    <div class="service-details-page">
        <div class="container">
            <div class="snappy-main-container clearfix space-fix">
                <div class="snappy-large-content snappy-col float-right">
                    <div class="details-top-content">
                        <div class="theme-title">
                            <h2>{{ $service->title }}</h2>
                            <h6>{{ $service->subtitle }}</h6>
                        </div>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
                <div class="snappy-sidebar float-left snappy-col">
                    <div class="sidebar-list">
                        <ul>
                            @foreach ($allServices as $otherService)
                                <li class="{{ $service->id == $otherService->id ? 'active' : '' }}">
                                    <a href="{{ route('services_details', ['service' => $otherService->id]) }}"
                                        class="tran3s">
                                        {{ $otherService->title }}
                                        <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .sidebar-list ul li.active {
            font-weight: bold;
            background-color: #35b8f8;
            /* Change this to whatever styling you prefer */
        }
    </style>
@endsection

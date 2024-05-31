@extends('layouts.user')

@section('title')
    Services
@endsection

@section('content')
    <div class="snappy-inner-banner"
    style="background-image: url('{{ asset('images/banner/4.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 50px 0;">
    

        <div class="container">
            <h2>Services</h2>
            <ul>
                <li><a href="{{ route('accueil') }}" class="tran3s">Accueil</a></li>
                <li>.</li>
                <li>Services</li>
            </ul>
        </div>
    </div>
()
    <div class="our-service-v2">
        @foreach ($services as $index => $service)
            <div class="container">
                <div class="single-service clearfix">
                    <img src="images/service/{{ $index + 1 }}.jpg" alt="" class="float-left">
                    <div class="text float-left">
                        <h4><a href="{{ route('services_details', ['service' => $service->id]) }}" class="tran3s">{{ $service->title }}</a></h4>
                        <p>{{ Str::limit($service->description, 100) }} </p>
                        <a href="{{ route('services_details', ['service' => $service->id]) }}" class="theme-button p-bg-color hvr-bounce-to-right">En savoir plus</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

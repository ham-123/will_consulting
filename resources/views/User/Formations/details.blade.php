@extends('layouts.user')

@section('title')
    Détails de la Formation
@endsection

@section('content')
    <div class="snappy-inner-banner"
        style="background-image: url('{{ asset('images/banner/1.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 50px 0;">
        <div class="container">
            <h2>{{ $formation->title }}</h2>
            <ul class="breadcrumb">
                <li><a href="{{ route('accueil') }}" class="tran3s">Accueil</a></li>
                <li>.</li>
                <li><a href="{{ route('formations') }}" class="tran3s">Formations</a></li>
                <li>.</li>
                <li>{{ $formation->title }}</li>
            </ul>
        </div>
    </div>

    <div class="formation-details py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-4">
                    <div class="details-content p-4 bg-light rounded">
                        <h3 class="tran3s">{{ $formation->title }}</h3>
                        <br>
                        <p class="mb-4">{{ $formation->description }}</p>
                        <br>
                        <ul class="list-unstyled">
                            <li><strong>Date :</strong> {{ $formation->date }}</li>
                            <li><strong>Prix :</strong> {{ $formation->price }} Franc FCA</li>
                            <li><strong>Type :</strong> {{ $formation->type }}</li>
                        </ul>
                    </div>
                    <br>
                    <div>
                        <a href="{{ route('inscription', ['id' => $formation->id]) }}"><button
                                class="theme-button p-bg-color hvr-bounce-to-right">Je M'inscrire</button></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="details-image">
                        @if ($formation->type == 'formation en ligne')
                            <img src="{{ asset('images/formation/1.jpg') }}" alt="{{ $formation->title }}"
                                class="img-fluid rounded mb-3">
                        @else
                            <img src="{{ asset('images/formation/2.jpg') }}" alt="{{ $formation->title }}"
                                class="img-fluid rounded mb-3">
                        @endif
                    </div>
                    <div class="mt-4">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>
@endsection

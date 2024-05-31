@extends('layouts.user')

@section('title')
    Formations
@endsection

@section('content')
    <div class="snappy-inner-banner"
        style="background-image: url('{{ asset('images/banner/3.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 50px 0;">


        <div class="container">
            <h2>Formations</h2>
            <ul>
                <li><a href="{{ route('accueil') }}" class="tran3s">Accueil</a></li>
                <li>.</li>
                <li>Formations</li>
            </ul>
        </div>
    </div>

    <div class="our-project">
        <div class="container">
            <div class="row">
                @foreach ($formations as $index => $formation)
                    <div class="col-md-4 col-xs-6">
                        <div class="single-project">
                            <div class="image">
                                @if ($formation->type == 'Formation en ligne')
                                    <img src="images/formation/1.jpg" alt="{{ $formation->title }}" class="img-fluid">
                                @else
                                    <img src="images/formation/2.jpg" alt="{{ $formation->title }}" class="img-fluid">
                                @endif
                            </div>
                            <div class="text">
                                <h4><a href="{{ route('formations_details', ['id' => $formation->id]) }}"
                                        class="tran3s">{{ $formation->title }}</a></h4>
                                <p>{{ Str::limit($formation->description, 50) }}</p>
                                <a href="{{ route('formations_details', ['id' => $formation->id]) }}"
                                    class="theme-button p-bg-color hvr-bounce-to-right">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

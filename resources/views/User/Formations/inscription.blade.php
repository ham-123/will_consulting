@extends('layouts.user')

@section('title')
    Inscription à {{ $formation->title }}
@endsection

@section('content')
    <div class="snappy-inner-banner" style="background-image: url('{{ asset('images/banner/1.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 50px 0;">
        <div class="container">
            <h2>Inscription à {{ $formation->title }}</h2>
            <ul class="breadcrumb">
                <li><a href="{{ route('accueil') }}" class="tran3s">Accueil</a></li>
                <li>.</li>
                <li><a href="{{ route('formations') }}" class="tran3s">Formations</a></li>
                <li>.</li>
                <li>{{ $formation->title }}</li>
            </ul>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="bg-light p-4 rounded">
                    <h3>Formulaire d'inscription</h3>
                    <form action="{{ route('formations_register', ['id' => $formation->id]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nom complet</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Adresse email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Numéro de téléphone</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

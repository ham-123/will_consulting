@extends('layouts.user')

@section('title')
    Inscription à {{ $formation->title }}
@endsection

@section('content')
    <div class="snappy-inner-banner"
        style="background-image: url('{{ asset('images/banner/2.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 50px 0;">
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
                    <br>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('inscription.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Formation</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ $formation->title }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="price">Prix</label>
                            <input type="text" name="price" id="price" class="form-control"
                                value="{{ $formation->price }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="price">Type de Formation</label>
                            <input type="text" name="type" id="type" class="form-control"
                                value="{{ $formation->type }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="name">Nom complet</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Adresse email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Numéro de téléphone (WhatsApp)</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                        </div>
                        <button type="submit" class="theme-button p-bg-color hvr-bounce-to-right">Souscrire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection

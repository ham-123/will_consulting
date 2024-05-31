@extends('layouts.admin')

@section('title')
    Admin
@endsection

@section('content')
    <section class="main-container mb-4">
        <div class="container-fluid">
            <div class="row">
                <!-- Carte pour Service -->
                <div class="col-md-4 mb-4">
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white">
                            <h4 class="font-weight-bold mb-0">SERVICE</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Gérer les Services</h5>
                            <p class="card-text">Cliquez ici pour gérer les services.</p>
                            <a href="{{ Route('services.index') }}" class="btn btn-primary">Accéder au Service</a>
                        </div>
                    </div>
                </div>

                <!-- Carte pour Formation -->
                <div class="col-md-4 mb-4">
                    <div class="card border-success">
                        <div class="card-header bg-success text-white">
                            <h4 class="font-weight-bold mb-0">FORMATION</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Gérer les Formations</h5>
                            <p class="card-text">Cliquez ici pour gérer les formations.</p>
                            <a href="{{ Route('formations.index') }}" class="btn btn-success">Accéder à la Formation</a>
                        </div>
                    </div>
                </div>

                <!-- Carte pour Recrutement -->
                <div class="col-md-4 mb-4">
                    <div class="card border-warning">
                        <div class="card-header bg-warning text-white">
                            <h4 class="font-weight-bold mb-0">RECRUTEMENT</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Gérer les Recrutements</h5>
                            <p class="card-text">Cliquez ici pour gérer les recrutements.</p>
                            <a href="{{ Route('recrutements.index') }}" class="btn btn-warning">Accéder au Recrutement</a>
                        </div>
                    </div>
                </div>

                <!-- Carte pour Article -->
                <div class="col-md-4 mb-4">
                    <div class="card border-info">
                        <div class="card-header bg-info text-white">
                            <h4 class="font-weight-bold mb-0">ARTICLE</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Gérer les Articles</h5>
                            <p class="card-text">Cliquez ici pour gérer les articles.</p>
                            <a href="{{ Route('articles.index') }}" class="btn btn-info">Accéder à l'Article</a>
                        </div>
                    </div>
                </div>

                <!-- Carte pour Contact -->
                <div class="col-md-4 mb-4">
                    <div class="card border-danger">
                        <div class="card-header bg-danger text-white">
                            <h4 class="font-weight-bold mb-0">CONTACT</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Gérer les Contacts</h5>
                            <p class="card-text">Cliquez ici pour gérer les contacts.</p>
                            <a href="" class="btn btn-danger">Accéder au Contact</a>
                        </div>
                    </div>
                </div>

                <!-- Carte pour Rendez-vous -->
                <div class="col-md-4 mb-4">
                    <div class="card border-secondary">
                        <div class="card-header bg-secondary text-white">
                            <h4 class="font-weight-bold mb-0">RENDEZ-VOUS</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Gérer les Rendez-vous</h5>
                            <p class="card-text">Cliquez ici pour gérer les rendez-vous.</p>
                            <a href="{{ route('rdvs.index') }}" class="btn btn-secondary">Accéder aux Rendez-vous</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

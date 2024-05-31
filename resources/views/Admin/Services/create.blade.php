@extends('layouts.admin')

@section('title', 'Créer un Service')

@section('content')
<section  class="main-container mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-4">Créer un Service</h2>
                <form action="{{ route('services.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Titre du service" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description du service" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Créer</button>
                    <a href="{{ route('services.index') }}" class="btn btn-secondary">Annuler</a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@extends('layouts.admin')

@section('title', 'Détails de l\'Article')

@section('content')
<section class="main-container mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-4">Détails de l'Article</h2>
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="font-weight-bold mb-0">{{ $article->title }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <strong>Contenu :</strong>
                            <p>{{ $article->content }}</p>
                        </div>
                        @if($article->image)
                        <div class="mb-4">
                            <strong>Image :</strong>
                            <div>

                                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="img-fluid">
                            </div>
                        </div>
                        @endif
                        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Retour à la liste</a>
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Modifier</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

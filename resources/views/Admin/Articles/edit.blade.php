@extends('layouts.admin')

@section('title', 'Modifier l\'article')

@section('content')
    <section class="main-container mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h4 class="font-weight-bold mb-0">Modifier l'article</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="title">Titre</label>
                                    <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $article->title) }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="content">Contenu</label>
                                    <textarea name="content" class="form-control" id="content" rows="5" required>{{ old('content', $article->content) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control-file" id="image">
                                    @if ($article->image)
                                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="img-fluid mt-2">
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.admin')

@section('title', 'Modifier une Formation')

@section('content')
    <section class="main-container mb-4">
        <div class="container">
            <h2 class="mb-4">Modifier une Formation</h2>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('formations.update', $formation->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $formation->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $formation->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date" value="{{ $formation->date }}" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Prix</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{ $formation->price }}" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select class="form-control" id="type" name="type" required>
                                <option value="Formation en présentiel" {{ $formation->type == 'Formation en présentiel' ? 'selected' : '' }}>Formation en présentiel</option>
                                <option value="Formation en ligne" {{ $formation->type == 'Formation en ligne' ? 'selected' : '' }}>Formation en ligne</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Enregistrer les modifications</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

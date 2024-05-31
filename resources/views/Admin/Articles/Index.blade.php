@extends('layouts.admin')

@section('title', 'Liste des Articles')

@section('content')
    <section class="main-container mb-4">
        <div class="container-fluid">
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="col-md-12">
                    <h2 class="mb-4">Liste des Articles</h2>
                    <a href="{{ route('articles.create') }}" class="btn btn-info mb-4">Ajouter un Article</a>
                    <div class="table-responsive-vertical">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Contenu</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($articles as $article)
                                    <tr>
                                        <td data-title="#"> {{ $loop->iteration }} </td>
                                        <td data-title="Titre"> {{ $article->title }} </td>
                                        <td data-title="Contenu"> {{ $article->content }} </td>
                                        <td data-title="Image">
                                            @if ($article->image)
                                                <img src="{{ url('storage/' . $article->image) }}"
                                                    alt="{{ $article->title }}" class="img-thumbnail"
                                                    style="max-width: 100px;">
                                            @endif
                                        </td>
                                        <td data-title="Actions">
                                            <a href="{{ route('articles.show', $article->id) }}"
                                                class="btn btn-sm btn-info">Voir</a>
                                            <a href="{{ route('articles.edit', $article->id) }}"
                                                class="btn btn-sm btn-primary">Modifier</a>
                                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Aucun article trouvé.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .table-responsive-vertical {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        @media (max-width: 768px) {
            .table-responsive-vertical {
                overflow-x: visible;
                overflow-y: auto;
                max-height: 400px; /* Adjust height as needed */
            }

            .table-responsive-vertical table {
                display: block;
            }

            .table-responsive-vertical thead,
            .table-responsive-vertical tbody,
            .table-responsive-vertical th,
            .table-responsive-vertical td,
            .table-responsive-vertical tr {
                display: block;
            }

            .table-responsive-vertical thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            .table-responsive-vertical tr {
                border: 1px solid #ccc;
                margin-bottom: 5px;
            }

            .table-responsive-vertical td {
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
                text-align: right;
            }

            .table-responsive-vertical td:before {
                position: absolute;
                top: -4px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                content: attr(data-title);
                text-align: left;
                font-weight: bold;
            }
        }
    </style>
@endsection

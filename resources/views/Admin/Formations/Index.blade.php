@extends('layouts.admin')

@section('title', 'Liste des Formations')

@section('content')
    <section class="main-container mb-4">
        <div class="container">
            <h2 class="mb-4">Liste des Formations</h2>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('formations.create') }}" class="btn btn-success mb-4">Ajouter une Formation</a>
            <a href="{{ route('liste.inscription') }}" class="btn btn-success mb-4">Liste des Inscription</a>
            <div class="table-responsive-vertical">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titre</th>
                            <th scope="col" class="hidden-mobile">Description</th>
                            <th scope="col">Nom complet</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Type</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($formations as $formation)
                            <tr>
                                <td data-title="#"> {{ $loop->iteration }} </td>
                                <td data-title="Titre"> {{ $formation->title }} </td>
                                <td data-title="Description" class="hidden-mobile"> {{ $formation->description }} </td>
                                <td data-title="Nom complet"> {{ $formation->date }} </td>
                                <td data-title="Prix"> {{ $formation->price }} </td>
                                <td data-title="Type"> {{ $formation->type }} </td>
                                <td data-title="Actions">
                                    <a href="{{ route('formations.edit', $formation->id) }}" class="btn btn-sm btn-primary">Modifier</a>
                                    <form action="{{ route('formations.destroy', $formation->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette formation ?')">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Aucune formation trouvée.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
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
                max-height: 600px; /* Adjust height as needed */
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

            /* Hide the Description column on mobile */
            .hidden-mobile {
                display: none;
            }
        }
    </style>
@endsection

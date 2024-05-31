@extends('layouts.admin')

@section('title', 'Liste des Recrutements')

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
                    <h2 class="mb-4">Liste des Recrutements</h2>
                    <a href="{{ route('recrutements.create') }}" class="btn btn-warning mb-4">Ajouter un Recrutement</a>
                    <div class="table-responsive-vertical">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Titre</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Compétences Requises</th>
                                    <th scope="col">Type de Contrat</th>
                                    <th scope="col">Lieu de Travail</th>
                                    <th scope="col">Date de Publication</th>
                                    <th scope="col">Date Limite</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($recrutements as $recrutement)
                                    <tr>
                                        <td data-title="#"> {{ $loop->iteration }} </td>
                                        <td data-title="Titre"> {{ $recrutement->titre }} </td>
                                        <td data-title="Description"> {{ $recrutement->description }} </td>
                                        <td data-title="Compétences Requises"> {{ $recrutement->competences_requises }} </td>
                                        <td data-title="Type de Contrat"> {{ $recrutement->type_contrat }} </td>
                                        <td data-title="Lieu de Travail"> {{ $recrutement->lieu_travail }} </td>
                                        <td data-title="Date de Publication"> {{ $recrutement->date_publication }} </td>
                                        <td data-title="Date Limite"> {{ $recrutement->date_limite }} </td>
                                        <td data-title="Actions">
                                            <a href="{{ route('recrutements.edit', $recrutement->id) }}" class="btn btn-sm btn-primary">Modifier</a>
                                            <form action="{{ route('recrutements.destroy', $recrutement->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce recrutement ?')">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center">Aucun recrutement trouvé.</td>
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

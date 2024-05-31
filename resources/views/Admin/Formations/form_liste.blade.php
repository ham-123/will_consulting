@extends('layouts.admin')

@section('title', 'Liste des Inscrits aux Formations')

@section('content')
    <section class="main-container mb-4">
        <div class="container">
            <h2 class="mb-4">Liste des Inscrits aux Formations</h2>

            <div class="table-responsive-vertical">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Formation</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Type de Formation</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Adresse email</th>
                            <th scope="col">Numéro de téléphone</th>
                            <th scope="col">Date d'inscription</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($inscriptions as $inscription)
                            <tr>
                                <td data-title="#"> {{ $loop->iteration }} </td>
                                <td data-title="Formation"> {{ $inscription->formation_title }} </td>
                                <td data-title="Prix"> {{ $inscription->formation_price }} </td>
                                <td data-title="Type de Formation"> {{ $inscription->formation_type }} </td>
                                <td data-title="Nom"> {{ $inscription->name }} </td>
                                <td data-title="Adresse email"><a href="mailto:{{ $inscription->email }}">{{ $inscription->email }}</a></td>
                                <td data-title="Numéro de téléphone"><a href="tel:{{ $inscription->phone }}">{{ $inscription->phone }}</a></td>
                                <td data-title="Date d'inscription"> {{ $inscription->created_at->format('d/m/Y H:i') }} </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Aucune inscription trouvée.</td>
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

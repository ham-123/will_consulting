@extends('layouts.admin')

@section('title', 'Liste des Rendez-vous')

@section('content')
    <section class="main-container mb-4">
        <div class="container">
            <h2 class="mb-4">Demandes de Rendez-vous</h2>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive-vertical">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Motif</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Date d'envoie</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rdvs as $rdv)
                            <tr>
                                <td data-title="ID">{{ $rdv->id }}</td>
                                <td data-title="Motif">{{ $rdv->motif }}</td>
                                <td data-title="Nom">{{ $rdv->nom }}</td>
                                <td data-title="Email"><a href="mailto:{{ $rdv->email }}">{{ $rdv->email }}</a></td>
                                <td data-title="Téléphone"><a href="tel:{{ $rdv->telephone }}">{{ $rdv->telephone }}</a></td>
                                <td data-title="Date d'envoie">{{ $rdv->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @endforeach
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
        top: 6px;
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

@extends('layouts.admin')

@section('title', 'Modifier un Recrutement')

@section('content')
<section class="main-container mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-4">Modifier un Recrutement</h2>
                <form action="{{ route('recrutements.update', $recrutement->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="titre">Titre</label>
                        <input type="text" name="titre" class="form-control" id="titre" value="{{ old('titre', $recrutement->titre) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="4" required>{{ old('description', $recrutement->description) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="competences_requises">Compétences Requises</label>
                        <textarea name="competences_requises" class="form-control" id="competences_requises" rows="3" required>{{ old('competences_requises', $recrutement->competences_requises) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="competences_souhaitables">Compétences Souhaitables</label>
                        <textarea name="competences_souhaitables" class="form-control" id="competences_souhaitables" rows="3">{{ old('competences_souhaitables', $recrutement->competences_souhaitables) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="type_contrat">Type de Contrat</label>
                        <select name="type_contrat" class="form-control" id="type_contrat" required>
                            <option value="CDI" {{ old('type_contrat', $recrutement->type_contrat) == 'CDI' ? 'selected' : '' }}>CDI</option>
                            <option value="CDD" {{ old('type_contrat', $recrutement->type_contrat) == 'CDD' ? 'selected' : '' }}>CDD</option>
                            <option value="Freelance" {{ old('type_contrat', $recrutement->type_contrat) == 'Freelance' ? 'selected' : '' }}>Freelance</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lieu_travail">Lieu de Travail</label>
                        <input type="text" name="lieu_travail" class="form-control" id="lieu_travail" value="{{ old('lieu_travail', $recrutement->lieu_travail) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="date_publication">Date de Publication</label>
                        <input type="date" name="date_publication" class="form-control" id="date_publication" value="{{ old('date_publication', $recrutement->date_publication) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="date_limite">Date Limite</label>
                        <input type="date" name="date_limite" class="form-control" id="date_limite" value="{{ old('date_limite', $recrutement->date_limite) }}" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Enregistrer les modifications</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

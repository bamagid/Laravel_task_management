@include('default')

<div class="container mt-5">
    <h1 class="text-center">Je souhaite modifier cette tâche</h1>

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="/taches/enregistrer/{{$tache->id}}">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="form-group mt-4">
                    <label for="nomTache">Nom de la tâche</label>
                    <input name="nom" type="text" class="form-control" id="nomTache" value="{{ $tache->nom_tache }}" placeholder="Renseignez le nom de la nouvelle tâche">
                </div>
                <div class="form-group mt-4">
                    <label for="descriptionTache">Description de la tâche</label>
                    <input name="description" type="text" class="form-control" id="descriptionTache" value="{{ $tache->description_tache }}" placeholder="Renseignez la description">
                </div>
                <div class="form-group mt-4">
                    <label for="dateTache">Date d'échéance</label>
                    <input name="date" type="date" class="form-control" id="dateTache" value="{{ $tache->date_echeance }}" placeholder="Date d'échéance de la tâche">
                </div>
                <div class="form-group mt-4">
                    <label for="priorite">Priorité</label>
                    <select name="priorite" class="form-select" aria-label="Sélectionnez la priorité">
                        <option selected>{{ $tache->priorite }}</option>
                        <option value="haute">Haute</option>
                        <option value="moyenne">Moyenne</option>
                        <option value="faible">Faible</option>
                    </select>
                </div>
                <div class="form-group mt-4">
                    <div class="form-check">
                        <input class="form-check-input" name="termine" type="checkbox" value="1" id="isTermine" {{ $tache->is_termine? "checked": ""}}>
                        <label class="form-check-label" for="isTermine">
                            Déjà terminée ?
                        </label>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <button name="modifier" type="submit" class="btn btn-success btn-block">Modifier</button>          
                </div>
            </div>
        </div>
    </form>
</div>

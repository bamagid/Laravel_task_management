@include('default');
<div class="container mt-4">
    <h1 class="text-center">Je souhaite créer une nouvelle tâche</h1>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <form method="POST" action="/tache/save">
                @csrf
                <div class="form-group">
                    <label for="nomTache">Nom de la tâche</label>
                    <input name="nom" type="text" class="form-control" id="nomTache" placeholder="Renseignez le nom de la nouvelle tâche">
                </div>
                <div class="form-group mt-4">
                    <label for="descriptionTache">Description de la tâche</label>
                    <input name="description" type="text" class="form-control" id="descriptionTache" placeholder="Renseignez la description">
                </div>
                <div class="form-group mt-4">
                    <label for="dateTache">Date d'échéance</label>
                    <input name="date" type="date" class="form-control" id="dateTache" placeholder="Date d'échéance de la tâche">
                </div>
                <div class="form-group mt-4">
                    <label for="priorite">Priorité</label>
                    <select name="priorite" class="form-select" aria-label="Sélectionnez la priorité">
                        <option selected>Sélectionnez la priorité</option>
                        <option value="haute">Haute</option>
                        <option value="moyenne">Moyenne</option>
                        <option value="faible">Faible</option>
                    </select>
                </div>
                <div class="form-group mt-4">
                    <div class="form-check">
                        <input class="form-check-input" name="termine" type="checkbox" value="1" id="isTermine">
                        <label class="form-check-label" for="isTermine">
                            Déjà terminée ?
                        </label>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <button name="ajouter" type="submit" class="btn btn-success btn-block">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>

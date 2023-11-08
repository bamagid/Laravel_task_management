@include('default')

<div class="container">
    <div class="div mt-5">
        <h1 class="text-center">
            Je souhaite créer une nouvelle tache
        </h1>
    </div>

    <form method="POST" action="/tache/save">
        @csrf
        <div class="form-group my-3">
            <label for="nomTache">Nom de tache</label>
            <input name="nom" type="text" class="form-control" id="nomTache" placeholder="Renseignez le nom de la nouvelle tache">
        </div>
        <div class="form-group my-3">
            <label for="descriptionTache">Description de la tache</label>
            <input name="description" type="text" class="form-control" id="descriptionTache" placeholder="Renseignez la description">
        </div>


        <div class="form-group my-3">
            <label for="dateTache">Date d'echéance</label>
            <input name="date" type="date" class="form-control" id="dateTache" placeholder="Date d'echéance de la tache">
        </div>

        <div class="form-group my-3">
            <label for="descriptionTache">Priorité</label>

            <select name="priorite" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Selectionnez la priorité</option>
                <option value="haute">Haute</option>
                <option value="moyenne">Moyenne</option>
                <option value="faible">Faible</option>
            </select>
        </div>

        <div class="form-group my-3">

            <div class="form-check">
                <input class="form-check-input" name="termine" type="checkbox" value="1" id="isTermine">
                <label class="form-check-label" for="isTermine">
                    Déja terminée ?
                </label>
            </div>
        </div>

        <div class="form-group my-3 mt-3">

            <button name="ajouter" type="submit" class="btn btn-success">Ajouter</button>           
        </div>

    </form>
</div>
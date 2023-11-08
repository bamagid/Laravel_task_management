@include('default')

<div class="container">
    <div class="div mt-5">
        <h1 class="text-center">
            Je souhaite modifier cette tache
        </h1>
    </div>
            @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                     @endif

    <form method="POST" action="/taches/enregistrer/{{$tache->id}}">
        @csrf
        <div class="form-group my-3">
            <label for="nomTache">Nom de tache</label>
            <input name="nom" type="text" class="form-control" id="nomTache" value=" {{$tache->nom_tache}}" placeholder="Renseignez le nom de la nouvelle tache">
        </div>
        <div class="form-group my-3">
            <label for="descriptionTache">Description de la tache</label>
            <input name="description" type="text" class="form-control" id="descriptionTache" value=" {{$tache->description_tache}}" placeholder="Renseignez la description">
        </div>


        <div class="form-group my-3">
            <label for="dateTache">Date d'echéance</label>
            <input name="date" type="date" class="form-control" id="dateTache" value="{{$tache->date_echeance}}" placeholder="Date d'echéance de la tache">
        </div>

        <div class="form-group my-3">
            <label for="priorite">Priorité</label>

            <select name="priorite" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>{{$tache->priorite}}</option>
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
            <button name="modifier" type="submit" class="btn btn-success">Modifier</button>          
        </div>

    </form>
</div>
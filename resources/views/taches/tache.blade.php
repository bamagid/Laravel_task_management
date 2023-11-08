@include('default')

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-5">
                Liste des taches
            </h1>

        </div>
    </div>

    <div class="container">
        <div class="row">
        @foreach ($taches as $tache)
        @if($tache->is_deleted==0)
        <div class="col-12 col-md-3 my-1">
        <div class="card mx-6" style="width: 18rem; height: 20rem; margin-top:20px;" >
            <div class="card-body">
                <p class="card-title">Nom de la tache : {{ $tache->nom_tache }}</p>
                <p class="card-subtitle mb-2 text-muted">Priorité : {{ $tache->priorite }}</p>
                <p class="card-text">Description :  {{ $tache->description_tache }}</p>
                <p class="card-text">Statut :  {{ $tache->is_termine? 'Terminée' : 'En cours' }}</p>
                <a href="/taches/supprimer/{{$tache->id}}" class="card-link btn btn-danger danger">supprimer</a>
                <a href="/taches/{{$tache->id}}/details" class="card-link btn btn-primary primary">details</a>
                <a href="/taches/modifier/{{$tache->id}}" class="card-link btn btn-info info">Modfier</a>
            </div>
        </div>
    </div>
    @endif
    @endforeach

        </div>
    </div>
</div>
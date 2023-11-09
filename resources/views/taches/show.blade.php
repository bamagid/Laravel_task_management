@include('default');
<div class="container">
    <h1>Je spouhaite afficher les details de la tache selectionnée</h1>
    <div class="card">
  <div class="card-header">
    Nom de la tache:  {{$tache->nom_tache}}
  </div>
  <div class="card-body">
    <p class="card-title">Priorite:  {{$tache->priorite}}</p>
    <p class="card-text">Description : {{$tache->description_tache}}</p>
    @if ($tache->is_termine===1)
        Terminée
    @else
     En cours <br>
    <a href="/taches/terminer/{{$tache->id}}" class="btn btn-primary">Terminer</a>
    @endif
  </div>
</div>
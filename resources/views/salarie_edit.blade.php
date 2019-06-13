@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('salarie.update', $salarie->id_salarie) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">   
        <div class="form-group">
          <label for="Nom">Nom :</label>
          <input type="text" class="form-control" name="salarie_nom" value={{ $salarie->nom }} />
        </div>
        <div class="form-group">
          <label for="Prenom">Prenom :</label>
          <input type="text" class="form-control" name="salarie_prenom" value={{ $salarie->prenom }} />
        </div>
        <div class="form-group">
          <label for="sexe">Sexe :</label>
          F <input type="radio" class="form-control" name="salarie_sexe" value="F"  @if($salarie->sexe =='F') checked @endif /><br>
          M <input type="radio" class="form-control" name="salarie_sexe" value="M"  @if($salarie->sexe =='M') checked @endif/>
        </div>
        <div class="form-group">
          <label for="date">Date de naissance :</label>
          <input type="date" class="form-control" name="salarie_date_naissance" value="{{ $salarie->date_naissance }}" />
        </div>
        <div class="form-group">
          <label for="niveau">Niveau d'étude :</label>
          <input type="number" class="form-control" name="salarie_id_niveau" value="{{ $salarie->id_niveau }}" />
        </div>
        <div class="form-group">
          <label for="suivi">:</label>
          <input type="number" class="form-control" name="salarie_id_suivi" value="{{ $salarie->id_suivi }}" />
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
      </form>
  </div>
</div>
@endsection
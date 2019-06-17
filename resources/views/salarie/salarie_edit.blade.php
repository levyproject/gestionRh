@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Modifier un salarié
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
      <form action="{{ route('updateSalarie', $salarie->id_salarie) }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">   
        <div class="form-group">
          <label for="Nom">Nom :</label>
          <input type="text" class="form-control" name="salarie_nom" value={{ $salarie->nom }} />
        </div>
        <div class="form-group">
          <label for="Prenom">Prenom :</label>
          <input type="text" class="form-control" name="salarie_prenom" value={{ $salarie->prenom }} />
        </div>
        <div class="form-group form_sexe">
          <label for="sexe">Sexe :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
          F &nbsp;&nbsp;<input type="radio" class="" name="salarie_sexe" value="F"  @if($salarie->sexe =='F') checked @endif /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          M &nbsp;&nbsp;<input type="radio" class="" name="salarie_sexe" value="M"  @if($salarie->sexe =='M') checked @endif/>
        </div>
        <div class="form-group">
          <label for="date">Date de naissance :</label>
          <input type="date" class="form-control" name="salarie_date_naissance" value="{{ $salarie->date_naissance }}" />
        </div>
        <div class="form-group">
          <label for="niveau">Niveau d'étude :</label>
          <select class="form-control" name="salarie_id_niveau">
            @foreach ( $niveau_etudes as $niveau )
                <option value="{{ $niveau->id_niveau }}" 
                 @if ($salarie->id_niveau == $niveau->id_niveau)
                     selected=""
                 @endif
                > {{ $niveau->designation }} </option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="suivi">Suivi Salarié:</label>
          <select class="form-control" name="salarie_id_suivi" required>
            @foreach ( $suivi_salaries as $suivi )
                <option
                  @if ($suivi->id_suivi == 4)
                      selected
                  @endif
                  value="{{ $suivi->id_suivi }}">{{ $suivi->motivation }}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
      </form>
  </div>
</div>
@endsection
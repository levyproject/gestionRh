@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Ajouter un salarié
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
    {{-- action="{{ route('salaries.store') }}" --}}
      <form method="post" action="{{ route('salarie.store') }}">

          <input type="hidden" name="_token" value="{{ csrf_token() }}">          
          <div class="form-group">
              <label for="nom">Nom:</label>
              <input type="text" class="form-control" name="salarie_nom" required/>
          </div>
          <div class="form-group">
              <label for="prenom">Prenom :</label>
              <input type="text" class="form-control" name="salarie_prenom" required/>
          </div>
          <div class="form-group">
              <label for="sexe">Sexe: </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
              F &nbsp;&nbsp; <input type="radio" class="" name="salarie_sexe" value="F" checked/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              M &nbsp;&nbsp; <input type="radio" class="" name="salarie_sexe" value="M"/>
          </div>
          <div class="form-group">
              <label for="date_naissance">Date de naissance: </label>
              <input type="date" class="form-control" name="salarie_date_naissance" required/>
          </div>
            <div class="form-group">
              <label for="id_niveau">Niveau d'étude : </label>
              <select class="form-control" name="salarie_id_niveau" required>
                @foreach ( $niveau_etude as $niveau )
                    <option value="{{ $niveau->id_niveau }}">{{ $niveau->designation }}</option>
                @endforeach
              </select>
          </div>
            <div class="form-group">
              <label for="id_suivi">Motivation salarié : </label>
              <select class="form-control" name="salarie_id_suivi" required>
                @foreach ( $suivi_salarie as $suivi )
                    <option
                     @if ($suivi->id_suivi == 4)
                         selected
                     @endif
                      value="{{ $suivi->id_suivi }}">{{ $suivi->motivation }}</option>
                @endforeach
              </select>
          </div>
          <button type="submit" class="btn btn-primary">Ajouer Salarie</button>
      </form>
  </div>
</div>
@endsection
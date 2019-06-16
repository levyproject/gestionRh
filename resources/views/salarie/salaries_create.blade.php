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
      <form method="post" action="{{ route('salaries.store') }}">
          {{-- {{ crsf_field()}} --}}
          <div class="form-group">
              <label for="nom">Nom:</label>
              <input type="text" class="form-control" name="salarie_nom"/>
          </div>
          <div class="form-group">
              <label for="prenom">Prenom :</label>
              <input type="text" class="form-control" name="salarie_prenom"/>
          </div>
          <div class="form-group">
              <label for="sexe">Sexe: </label>
              <input type="radio" class="form-control" name="salarie_sexe"/>F<br>
              <input type="radio" class="form-control" name="salarie_sexe"/>M
          </div>
          <div class="form-group">
              <label for="date_naissance">Date de naissance: </label>
              <input type="date" class="form-control" name="salarie_date_naissance"/>
          </div>
            <div class="form-group">
              <label for="id_niveau">Niveau: </label>
              <input type="number" class="form-control" name="salarie_id_niveau"/>
          </div>
            <div class="form-group">
              <label for="id_suivi">Suivi: </label>
              <input type="number" class="form-control" name="salarie_id_suivi"/>
          </div>
          <button type="submit" class="btn btn-primary">Ajouer Salarie</button>
      </form>
  </div>
</div>
@endsection
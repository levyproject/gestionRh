@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a class="addSalarie" href={{ route('candidat.create') }}><button class="btn btn-secondary"> Ajoutez un nouveau candidat</button></a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nom</td>
          <td>Prenom</td>
          <td>Date de Naissance</td>
          <td>Année d'experience</td>
          <td>Prétention Salariale</td>
          <td>Niveau d'étude</td>
          <td>Poste souhaité</td>

          <td colspan="">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($candidats as $candidat)
        <tr>
            <td>{{$candidat->id_candidat}}</td>
            <td>{{$candidat->nom}}</td>
            <td>{{$candidat->prenom}}</td>
            <td>{{$candidat->date_naissance}}</td>
            <td>{{$candidat->annee_experience}}</td>
            <td>{{$candidat->pretention}} €</td>
            <td>{{$candidat->getNiveau()}}</td>
            <td>{{$candidat->getPoste()}}</td>
            <td><a href="{{ route('candidat.edit', $candidat->id_candidat)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('candidat.destroy', $candidat->id_candidat)}}">
                  {{-- @csrf --}}
                  {{-- @method('DELETE') --}}
                   <a href="{{ route('candidat.destroy', $candidat->id_candidat)}}"><button class="btn btn-danger"  type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
@extends('layout')

@section('content')
    <style>
        .conteneur{
            width: 100%;
            max-width: 1200px;

            min-height : 800px;
        }

        .maFrame{
            width: 100%;
            height: 100%;
            min-height : 800px;
        }
    </style>
    <h1 class="title">Analyse des données</h1>

    <div class="conteneur">
        <iframe class="maFrame"  src="https://app.powerbi.com/view?r=eyJrIjoiMDNiN2E3MDktNTA3ZC00MDk5LTlhNjQtN2E3YTBjMjk2NDk3IiwidCI6ImIzMjNiY2I0LTZkNTgtNGYyNS04N2JmLTYzNjZjM2Q2ODlhZiIsImMiOjh9" frameborder="0" allowFullScreen="true"></iframe>
    </div>
@endsection
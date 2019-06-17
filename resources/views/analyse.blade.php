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

        #salaire{
            display: none;
        }
    </style>
    <h1 class="title">Analyse des données</h1>

    <div class="conteneur">

        <p> Sélectionnez votre métrique :</p>
        <select id="metrique">
            <option> ----------------------</option>
            <option value="salaire"> Salaire</option>
            <option value="absence"> Absence</option>
            <option> Candidature</option>
        </select>

        <iframe id="salaire" class="maFrame"  src="https://app.powerbi.com/view?r=eyJrIjoiYTkyNDkwMTctNGI2Yi00YzkyLTgxNGUtOTdhYTk4NGVlZTZmIiwidCI6ImIzMjNiY2I0LTZkNTgtNGYyNS04N2JmLTYzNjZjM2Q2ODlhZiIsImMiOjh9" frameborder="0" allowFullScreen="true"></iframe>
    </div>

    <script>

        var metrique = document.getElementById('metrique');

        metrique.addEventListener('change', function() {
             var laMetrique = metrique.selectedOptions[0].value;
            console.log(laMetrique);

            switch(laMetrique){
                case "salaire":
                    salaire.style.display="block";
                    break;

                case "absence" :
                    break;
                
                default: 
                    break;
            }
        })

      /* function cacheFrame(){
            var frames = document.getElementsByClassName('maFrame');
            
            foreach(frame in frames)
            {
                frame.style.display = "none";
            }
        }*/

    </script>
@endsection
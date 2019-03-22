<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Ecole Supérieure d'Ingénierie En Sciences Appliquées</title>
    <link href="{{asset('css/Style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/Menu.css')}}" rel="stylesheet" />
    <link href="{{asset('css/intranet.css')}}" type="text/css" rel="stylesheet"/>
    <script src="{{ asset('js/scripts/jquery-1.9.0.min.js')}}"></script>
    <script src="{{ asset('js/scripts/Scripts.js')}}"></script>
    <script src="{{ asset('js/scripts/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="width:100%; background-color:#ffffff">
    <div class="Slogo" style="width:100%">

        <img src="{{asset('images/images/logo2.png')}}" class="Image" />
    </div>
    <div class="topnav" id="myTopnav">
      <center>
      <div class="espace-intranet">Espace Intranet</div>
      <center>
    </div>

    <center>
        <div class="nameEtudiantWelcome" style="text-decoration: none;">Fiche d'absence de l'étudiant(e) {!! $lastName !!} {!! $firstName !!}</div>
    </center>
    <div style="margin-top: 2%;">
         <form action="/"><p style="float: left; margin-left: 5%; margin-right: 2%;"><input type="submit" value="Accueil" style="font-family:verdana;width:80px; height:30px;font-size:15px;background-color:rgb(255,255,128);" ></p></form>
	       <form action="/logout"><p style="float: right; margin-right: 5%; margin-left: 2%;"><input type="submit" value="D&eacute;connexion" style="font-family:verdana;width:120px; height:30px;font-size:15px;background-color:rgb(255,255,128);" ></p></form>
    </div>

    <center>
      @if (count($absences) === 0)
          <h2 class=".text-success">Aucune absence enregistre</h2>
      @else

        <div class="table-responsive">

          <table class="table table-striped table-bordered table-hover table-condensed" border="1" style="border-collapse: collapse;">
                <tr>
                    <th>Séance</th>
                    <th>Date</th>
                    <th>Matière</th>
                    <th>Motif</th>
                    <th>Appel</th>
                </tr>
              @foreach ($absences as $absence)
                <tr>
                    <td>{!! $absence['seance'] !!}</td>
                    <td>{!! date('d-m-Y', strtotime($absence['date'])) !!}</td>
                    <td>{!! $absence['matiere'] !!}</td>
                    <td>{!! $absence['motif'] !!}</td>
                    <td>{!! $absence['appel'] !!}</td>
                </tr>
              @endforeach
                <tr>
                  <td colspan="5" align="center">
                      <a href="/absences/pdf">Imprimer</a>
                  </td>
                </tr>
            </table>
        </div>
     @endif
    </center>



</body>
</html>

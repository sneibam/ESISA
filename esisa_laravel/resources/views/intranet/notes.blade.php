<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
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
        <div class="nameEtudiantWelcome" style="text-decoration: none;">
          Les notes de l'étudiant(e) {!! $lastName !!} {!! $firstName !!}<br />
          Année Universitaire {!! $level['annee1'] !!} - {!! $level['annee1']+1 !!}
        </div>
    </center>
    <div style="margin-top: 2%;">
         <form action="/"><p style="float: left; margin-left: 5%; margin-right: 2%;"><input type="submit" value="Accueil" style="font-family:verdana;width:80px; height:30px;font-size:15px;background-color:rgb(255,255,128);" ></p></form>
	       <form action="/logout"><p style="float: right; margin-right: 5%; margin-left: 2%;"><input type="submit" value="D&eacute;connexion" style="font-family:verdana;width:120px; height:30px;font-size:15px;background-color:rgb(255,255,128);" ></p></form>
    </div>

    <center>
      <div class="table-responsive">
        <div style="margin-bottom: 5px;" class="print"><a href="/notes/pdf">Imprimer</a></div>
          <table class="table table-striped table-bordered table-hover table-condensed" style="width: 50%;">
                <tr>
                    <th colspan="3 " align="center" style="padding-left:40%;">1er Semestre</th>
                </tr>
                <tr>
                    <th>Matière</th>
                    <th>Type</th>
                    <th>Note</th>
                </tr>
                @if (count($notes1) === 0)
                  <tr><td colspan="3" align="center">Aucune note à afficher</td></tr>
                @else
                  @foreach ($notes1 as $note)
                    <tr>
                        <td>{!! $note['matiere'] !!}</td>
                        <td>{!! $note['type'] !!}</td>
                        <td>{!! $note['valeur'] !!}</td>
                    </tr>
                  @endforeach
                @endif

          </table>
          <table class="table table-striped table-bordered table-hover table-condensed" style="width: 50%;  ">
                <tr>
                    <th colspan="3 " align="center" style="padding-left:40%;">2ème Semestre</th>
                </tr>
                <tr>
                    <th>Matière</th>
                    <th>Type</th>
                    <th>Note</th>
                </tr>
                @if (count($notes2) === 0)
                  <tr><td colspan="3" align="center">Aucune note à afficher</td></tr>
                @else
                  @foreach ($notes2 as $note)
                    <tr>
                        <td>{!! $note['matiere'] !!}</td>
                        <td>{!! $note['type'] !!}</td>
                        <td>{!! $note['valeur'] !!}</td>
                    </tr>
                  @endforeach
                @endif

          </table>
          <div class="print"><a href="/notes/pdf">Imprimer</a></div>
      </div>
    </center>
</body>
</html>

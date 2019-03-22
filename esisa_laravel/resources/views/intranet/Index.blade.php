<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Ecole Supérieure d'Ingénierie En Sciences Appliquées</title>
    <link href="{{asset('css/Style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/Menu.css')}}" rel="stylesheet" />
    <link href="{{asset('css/intranet.css')}}" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('js/scripts/jquery-1.9.0.min.js')}}"></script>
    <script src="{{ asset('js/scripts/Scripts.js')}}"></script>
    <script src="{{ asset('js/scripts/bootstrap.min.js')}}"></script>
</head>
<body style="width:100%; background-color:#ffffff">
    <div class="Slogo" style="width:100%">
        <img src="{{asset('images/images/logo2.png')}}" class="Image" />
    </div>
    <div class="topnav" id="myTopnav">
      <center>
      <div class="espace-intranet">Espace Intranet -  Année Universitaire : {!! $level['annee1'] !!}-{!! $level['annee1']+1 !!}</div>
      <center>
    </div>

    <center>
        <div class="nameEtudiantWelcome">Bienvenue {!! $lastName !!} {!! $firstName !!}</div>
    </center>
    <div style="margin-top: 2%;">
         <form action="/"><p style="float: left; margin-left: 5%;"><input type="submit" value="Accueil" style="font-family:verdana;width:80px; height:30px;font-size:15px;background-color:rgb(255,255,128);" ></p></form>
	       <form action="/logout"><p style="float: right; margin-right: 5%;"><input type="submit" value="D&eacute;connexion" style="font-family:verdana;width:120px; height:30px;font-size:15px;background-color:rgb(255,255,128);" ></p></form>
    </div>

    <div>
        <center>
            <span style="font-size: 20px;">Niveau: {!! $level['val'] !!}, Groupe: {!! $level['groupe'] !!}
        </center>
    </div>

    <center>
      <table class="jaune" style="margin-top: 2%;">
        <tr>
          <td align="center">
          <a href="absences">Afficher Les absences<br/></a>
          </td>
        </tr>
        <tr>
          <td align="center">
          <a href="notes">Afficher Les notes<br/></a>
          </td>
        </tr>
    </center>

</body>
</html>

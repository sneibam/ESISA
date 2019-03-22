<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Ecole Supérieure d'Ingénierie En Sciences Appliquées</title>
    <link href="{{asset('css/Style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/Menu.css')}}" rel="stylesheet" />
    <link href="{{asset('css/Tabs.css')}}" rel="stylesheet" />
    <link href="{{asset('css/SideBar.css')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('css/form.css')}}" type="text/css" rel="stylesheet"/>
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
      <style>
          .espace-intranet {
            font-weight: bold;
            font-size: 1.4em;
            color: rgb(255, 255, 200);
            font-family: verdana;
            margin-left: 45%;
          }
      </style>
      <div class="espace-intranet">Espace Intranet</div>
    </div>

      <center>
        <div style="margin-bottom: 1%; margin-top: 2%;">
          <table>
            <tr>
              <td style="font-weight:bold; font-size:1.4em;color:blue;font-family:verdana;"><img src="{{asset('images/images/lock.png')}}" height="77" width="220"/></td>
            </tr>
            <tr style="margin-top: 2%;"><td style="border: 1px solid grey;margin: 20px;padding:20px;border-radius:8px; box-shadow: 4px 4px 4px grey;" >

            <form method="post" action="connect" >
              @csrf
              <label for="nom" style="font-family:verdana;font-size:0.8em;font-style:bold;color:rgb(0,64,128);">Identifiant </label><br/>
              <input type="text" name="nom" id="nom" style="width:200px;height:25px;font-size:1.1em;color:rgb(29,29,29);" /><br/><br/>
              <label for="mdp" style="font-family:verdana;font-size:0.8em;font-style:bold;color:rgb(0,64,128);">Mot de passe </label><br/>
              <input type="password" name="mdp" id="mdp"  style="width:200px;height:25px;font-size:1.1em;color:rgb(29,29,29);"/><br/><br/>
              <input type="submit" value="Connexion" style="width:200px;height:30px;"/><br/>
            </form>
            </td></tr>
            </table>
        </div>
        <div class="pieds">
          <p>29 bis Av Ibn Khatib Route d'Immouzzer F&egrave;s - Maroc.</br>
            T&eacute;l&eacute;phone : +212 (0)5 35 65 70 95</br>&copy;1999 - 2018
          </p>
        </div>
      </center>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Ecole Supérieure d'Ingénierie En Sciences Appliquées</title>
    <link href="{{asset('css/Style2.css')}}" rel="stylesheet" />
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
<body style="width:100%; background-color:#f8f8f8">
    <div class="Slogo" style="width:100%">
        <img src="{{asset('images/images/logo2.png')}}" class="Image" />
    </div>
    <div class="topnav" id="myTopnav">
        <a href="/">@lang('menu.home')</a>
        <div class="myDropdown">
            <button class="dropbtn">
                @lang('menu.about')
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="myDropdown-content">
                <a href="Mot-President" style="color:black;">@lang('menu.wordOfMekouar')</a>
                <a href="Etudier-ESISA" style="color:black">@lang('menu.studyatesisa')</a>
                <a href="Objectifs" style="color:black">@lang('menu.esisagoals')</a>
                <a href="Anciens" style="color:black">@lang('menu.eldersvoice')</a>
                <a href="Conferences-ESISA" style="color:black">@lang('menu.ESISAConference')</a>
                <a href="Conferences-Etranger" style="color:black">@lang('menu.abroadConference')</a>
                <a href="Workshop" style="color:black">Workshop</a>
                <a href="Themes-Recherche" style="color:black">@lang('menu.researchThemes')</a>
            </div>
        </div>
        <div class="myDropdown">
            <button class="dropbtn">
                @lang('menu.education')
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="myDropdown-content">
                <a href="Systeme-Enseignement" style="color:black;">@lang('menu.educationalSystem')</a>
                <a href="Parcours-Procedures" style="color:black">@lang('menu.admission')</a>
                <a href="{{asset('pdf/Reglement_interieur.pdf')}}" style="color:black">@lang('menu.innerRules')</a>
                <a href="Bac3" style="color:black">Bac + 3</a>
                <a href="Bac5" style="color:black">Bac + 5</a>
                <a href="CCNA" style="color:black">@lang('menu.ccnaformation')</a>
            </div>
        </div>
        <div class="myDropdown">
            <button class="dropbtn">
                @lang('menu.international')
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="myDropdown-content">
                <a href="ESISA-International" style="color:black">@lang('menu.esisainternation')</a>
                <a href="Admis-Etranger" style="color:black">@lang('menu.admittedabroad')</a>
                <a href="Partenaires" style="color:black">@lang('menu.ourpartners')</a>
            </div>
        </div>
        <div class="myDropdown">
            <button class="dropbtn">
                @lang('menu.companiesInternships')
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="myDropdown-content">
                <a href="ESISA-Entreprises" style="color:black">@lang('menu.esisacompanies')</a>
                <a href="Stages" style="color:black">@lang('menu.internships')</a>
                <a href="Emplois" style="color:black">@lang('menu.jobs')</a>
                <a href="PartenairesEntreprises" style="color:black">@lang('menu.ourpartners')</a>
            </div>
        </div>
        <div class="myDropdown">
            <button class="dropbtn">
                @lang('menu.others')
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="myDropdown-content">
                <a href="Presse" style="color:black">@lang('menu.press')</a>
                <a href="Galerie" style="color:black">@lang('menu.gallery')</a>
                <a href="Contactez-nous" style="color:black">@lang('menu.contactus')</a>
            </div>
        </div>
        <a href="register"><span><img src="{{asset('images/images/male(1).png')}}" style="margin-right:9px" /></span>@lang('menu.inscription')
        </a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>

    <div class="row" style="width:100%; padding-top:1%; ">
    <div style="margin-left:3%;" class="column">
      <p style="color:#1962e5;font-size:1.3vw;margin-top:2.1%;">
        NOS PARTENAIRES EN FRANCE :
      </p>
      <div style="margin-bottom:2%;">

          <a href="http://www.ensiie.fr/" class="p11"><img src="{{asset('images/images/ensiie.jpg')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>


          <a href="https://polytech.univ-amu.fr/" style="padding-left:5%;" class="p12"><img src="{{asset('images/images/PM.png')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>


          <a href="http://www.eilco-ulco.fr/" style="padding-left:5%;" class="p13">
                        <img src="{{asset('images/images/eil.png')}}" class="Panneau" class="Panneau" style="max-width:100%;height:auto;" />
                    </a>


          <a href="https://www.isima.fr/" style="padding-left:5%;" class="p14"><img src="{{asset('images/images/CLA.jpeg')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>

      </div>

      <div style="margin-bottom:2%;">
          <a href="https://www.isima.fr/" class="p14responsive"><img src="{{asset('images/images/CLA.jpeg')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>
          <a href="http://www.u-pem.fr/" class="p21"><img src="{{asset('images/images/UPem.png')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>

          <a href="https://www.lsis.org/" style="padding-left:5%;" class="p22"><img src="{{asset('images/images/lsis.jpg')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>
          <a href="http://www.univ-lorraine.fr/" style="padding-left:5%;" class="p23">
                        <img src="{{asset('images/images/logo-universite-de-lorraine.png')}}" class="Panneau" style="max-width:100%;height:auto;" />
                    </a>


          <a href="http://www.uca.fr/" style="padding-left:5%;" class="p24"><img src="{{asset('images/images/cla2.jpg')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>


      </div>

      <div style="margin-bottom:2%;">

        <a href="http://www.univ-lorraine.fr/" class="p23responsive">
          <img src="{{asset('images/images/logo-universite-de-lorraine.png')}}" class="Panneau" style="max-width:100%;height:auto;" />
        </a>

          <a href="http://www.uca.fr/" class="p24responsive"><img src="{{asset('images/images/cla2.jpg')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>


          <a href="http://www.univ-paris8.fr/" class="p31"><img src="{{asset('images/images/P8.png')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>

          <a href="https://www.univ-paris13.fr/" style="padding-left:5%;" class="p32"><img src="{{asset('images/images/USPC-PARIS13-1.png')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>


          <a href="http://www.u-bourgogne.fr/" style="padding-left:6%;" class="p33"><img src="{{asset('images/images/ubourgogne_logo.jpg')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>

          <a href="https://www.u-cergy.fr/fr/index.html" style="padding-left:4%;" class="p34"><img src="{{asset('images/images/Universite_de_Cergy-Pontoise_(logo).svg.png')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>

      </div>

      <div style="margin-bottom:2%;">

        <a href="https://www.univ-paris13.fr/" class="p32responsive"><img src="{{asset('images/images/USPC-PARIS13-1.png')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>


        <a href="http://www.u-bourgogne.fr/"  class="p33responsive"><img src="{{asset('images/images/ubourgogne_logo.jpg')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>


          <a href="https://www.u-cergy.fr/fr/index.html" class="p34responsive"><img src="{{asset('images/images/Universite_de_Cergy-Pontoise_(logo).svg.png')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>

          <a href="http://www.u-pec.fr/universite-paris-est-creteil-805685.kjsp" class="p41" ><img src="{{asset('images/images/upec.png')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>


          <a href="https://unige.it/" style="padding-left:5%;" class="p42"><img src="{{asset('images/images/diptem_big_1.jpg')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>

          <a href="http://www.univ-fcomte.fr/pages/fr/ea-4269---lifc-8136.html" style="padding-left:5%;" class="p43">
            <img src="{{asset('images/images/lifc.jpg')}}" class="Panneau" style="max-width:100%;height:auto;" />
          </a>

     </div>

     <div style="margin-bottom:2%;" class="lastRow">
       <a href="http://www.u-pec.fr/universite-paris-est-creteil-805685.kjsp" ><img src="{{asset('images/images/upec.png')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>


       <a href="https://unige.it/" style="padding-left:5%;" ><img src="{{asset('images/images/diptem_big_1.jpg')}}" class="Panneau" style="max-width:100%;height:auto;" /></a>

       <a href="http://www.univ-fcomte.fr/pages/fr/ea-4269---lifc-8136.html" style="padding-left:6%;">
         <img src="{{asset('images/images/lifc.jpg')}}" class="Panneau" style="max-width:100%;height:auto;" />
       </a>
     </div>

      <!-- <table style="margin-top:10%;margin-bottom:15%">
                <tr>

                </tr>

                <tr>

                </tr>

                <tr>

                </tr>
            </table> -->

      <table style="margin-top: auto;">
        <tr>
          <img src="{{asset('images/images/accreditation.jpg')}}" width="120" height="80" style="max-width:100%; height:auto;" />
        </tr>
        <tr>
          <img src="{{asset('images/images/cisco.jpg')}}" width="120" height="80" style="margin-left:10% ;max-width:100%; height:auto;" />
        </tr>
      </table>
      <div class="mydiv sidenav" style="margin-top:5%">
            <header class="header"><span style="margin-left: 20%;">@lang('menu.inscription')</span></header>
            <a href="register">@lang('menu.online-inscription')</a>
            <a href="{{asset('pdf/dossier_inscription.pdf')}}">@lang('menu.downloadFolder')</a>
            <a href="{{asset('pdf/Reglement_interieur.pdf')}}">@lang('menu.innerRules')</a>
            <header class="header" style="margin-top:3%"><span style="margin-left: 20%;">@lang('menu.intranet')</span></header>
            <a href="parent">@lang('menu.espace-parent')</a>
            <header class="header" style="margin-top:3%"><span style="margin-left: 20%;">@lang('menu.education')</span></header>
            <a href="Etudier-ESISA">@lang('menu.school')</a>
            <a href="Objectifs">@lang('menu.goals')</a>
            <a href="Mot-President">@lang('menu.wordOfMekouar')</a>
            <a href="Systeme-Enseignement">@lang('menu.educationalSystem')</a>
            <header class="header" style="margin-top:3%"><span style="margin-left: 20%;">@lang('menu.research')</span></header>
            <a href="Conferences-ESISA">@lang('menu.ESISAConference')</a>
            <a href="Conferences-Etranger">@lang('menu.abroadConference')</a>
            <a href="Workshop">Workshops</a>
            <a href="Themes-Recherche">@lang('menu.researchThemes')</a>
            <header class="header" style="margin-top:3%"><span style="margin-left: 20%;">@lang('menu.documents')</span></header>
            <a href="Parcours-Procedures">@lang('menu.admission')</a>
            <a href="{{asset('pdf/programme.pdf')}}">@lang('menu.bac3brochure')</a>
            <a href="{{asset('pdf/ISI.pdf')}}">@lang('menu.bac5ISI')</a>
            <a href="{{asset('pdf/ISD.pdf')}}" style=" margin-bottom:3%">@lang('menu.bac5ISD')</a>
      </div>
    </div>
        <div class="column2 " style="padding-left:0.6%; margin-bottom: 5%;">
          <div class="en_tete">
            <h4>INSCRIPTION EN LIGNE</h4>
          </div>
          {!! Form::open(['route' => 'register']) !!}

          @if ($errors->any())
            <div class="alert alert-danger" style="margin-top: 5%; margin-bottom: 5%;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif

            <div class="form-group">
              <div class="form-labels">{!! Form::label('gender', 'Genre') !!}  *</div>
              <div class="radio-buttons">
                {!! Form::radio('gender','Homme', true)!!} Homme<br />
                {!! Form::radio('gender','Femme')!!} Femme
              </div>
            </div>
            <div class="form-group">
                <div class="form-labels">{!! Form::label('lastName', 'Nom') !!}  *</div>
                {!! Form::text('lastName', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <div class="form-labels">{!! Form::label('firstName', 'Prénom') !!}  *</div>
                {!! Form::text('firstName', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <div class="form-labels">{!! Form::label('birthDate', 'Date de Naissance') !!}  *</div>
                {!! Form::text('birthDate', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <div class="form-labels">{!! Form::label('email', 'Email') !!}  *</div>
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <div class="form-labels">{!! Form::label('phone', 'Téléphone') !!}  *</div>
                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <div class="form-labels">{!! Form::label('adress', 'Adresse') !!}</div>
                {!! Form::text('adress', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <div class="form-labels">{!! Form::label('highschool', 'Lycée') !!}</div>
                {!! Form::text('highschool', null, ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
              <div class="form-labels">{!! Form::label('bactype', 'Type de Baccalauréat') !!}  *</div>
              <div class="radio-buttons">
                {!! Form::radio('bactype','SciencesMath', true)!!} Sciences Mathématiques<br />
                {!! Form::radio('bactype','SciencesPhysiques', true)!!} Sciences Physiques<br />
                {!! Form::radio('bactype','SVT', true)!!} Sciences de la Vie et de la Terre<br />
                {!! Form::radio('bactype','Sciences_economiques', true)!!} Sciences Economiques<br />
                {!! Form::radio('bactype','Technique', true)!!} Technique<br />
                {!! Form::radio('bactype','autres', true)!!} Autre : <br />
                {!! Form::text('bactype', null, ['class' => 'form-control']) !!}
              </div>
            </div>

            <div class="form-group">
              <div class="form-labels">{!! Form::label('filiere', 'Choisissez une filiere') !!}  *</div>
              {!! Form::select('filiere', array(
                    'IL' => 'Bac +3 Ingénierie Logicielle',
                    'IAGF' => 'Bac +3 Informatique Appliquée à la Gestion et la Finance',
                    'IDAF' => 'Bac +5 Informatique Décisionnelle appliquée à la Finance',
                    'ISI' => 'Bac +5 Ingénierie des Systèmes d\'Informations',
                    'ISD' => 'Bac +5 Ingénierie des Systèmes Distribués'
              )) !!}
            </div>

            <div class="form-group">
                <div class="form-labels">{!! Form::label('mathAvg', 'Moyenne Mathématiques') !!} *</div>
                {!! Form::text('mathAvg', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <div class="form-labels">{!! Form::label('frenchAvg', 'Moyenne Francais') !!} *</div>
                {!! Form::text('frenchAvg', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <div class="form-labels">{!! Form::label('langAvg', 'Moyenne 2ème langue étrangère') !!} *</div>
                {!! Form::text('langAvg', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}

        </div>

    </div>
    <footer class="Ftr" style="margin-bottom:0%">
        <div>
            <p>Copyright © 2018 ESISA - Tous droits Réservés - <a class="lien" href="#"> www.esisa.ac.ma</a></p>
            <p><a>Accueil</a> | <a>Mentions Légales</a> | <a>Contact</a></p>
            <p>
                suivez-nous :
                <span><img src="{{asset('images/images/fb.png')}}" style="max-width:32px; height:auto" /></span>
                <span><img src="{{asset('images/images/twitter-icon.png')}}" style="max-width:32px; height:auto" /></span>
                <span><img src="{{asset('images/images/youtube.png')}}" style="max-width:32px; height:auto" /></span>
                <span><img src="{{asset('images/images/linkedin.png')}}" style="max-width:32px; height:auto" /></span>
            </p>
        </div>
    </footer>
</body>
</html>

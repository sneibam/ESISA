<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Ecole Supérieure d'Ingénierie En Sciences Appliquées</title>
    <link href="{{asset('css/Style2.css')}}" rel="stylesheet" />
    <link href="{{asset('css/Menu.css')}}" rel="stylesheet" />
    <link href="{{asset('css/Tabs.css')}}" rel="stylesheet" />
    <link href="{{asset('css/SideBar.css')}}" type="text/css" rel="stylesheet"/>
    <script src="{{ asset('js/scripts/jquery-1.9.0.min.js')}}"></script>
    <script src="{{ asset('js/scripts/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/scripts/Scripts.js')}}"></script>
    <script src="{{ asset('js/scripts/TabsJS.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:#f8f8f8" onload="openEve(event, 'NOKIA');">
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
        <div class="column2" style="padding-left:2%;font-size:2vw">
            <p style="color:#1962e5;font-size:1.3vw;margin-top:0.5%;">CONFÉRENCES A L'ESISA :</p>
            <div class="tab">
                <button class="tablinks" onclick="openEve(event, 'NOKIA')">Nokia Paris-Saclay 2016</button>
                <button class="tablinks" onclick="openEve(event, 'SETIT')">SETIT - Hammamet 2009</button>
                <button class="tablinks" onclick="openEve(event, 'SETIT2')">SETIT - Hammamet 2007</button>
                <button class="tablinks" onclick="openEve(event, 'DFMA')">DFMA - Besançon 2005</button>
            </div>

            <div id="NOKIA" class="tabcontent">
                <p style="color:#1976e9;margin-top:0.2%;font-size:1.1vw;font-weight:bold">Journée nationale organisée le 29 Novembre 2016 à la Cite´ de l’Innovation, Nokia Paris-Saclay </p>
                <img src="{{asset('images/images4/3(1).jpg')}}" style="width:100%" height="300" class="thumbnail" />
                <p style="color:#1976e9;margin-top:0.2%;font-size:1.1vw;font-weight:bold">
                    Thématiques
                </p>
                <p align="justify">La journée a pour objectif de valoriser les recherches et les réalisations basées sur les technologies numériques et les objets connectés et leurs usages quotidiens</p>
                <p style="color:#1976e9;margin-top:0.2%;font-size:1.1vw;font-weight:bold">
                    PRÉSENTATION
                </p>
                <img src="{{asset('images/images4/3(2).jpg')}}" style="width:100%" height="300" class="thumbnail" />
                <p align="justify">
                    Cette Journée consacrée aux nouveaux défis de l’Internet des Objets propose de porter un regard qui intègre d’une part les problématiques de facteurs humains et problématiques technologiques, et d’autre part la question du rôle que joue aujourd’hui les objets connectés dans la vie quotidienne comme la santé, l’habitat, l’automobile, l’assurance, qui sont en train d’être bouleversés par cette mutation du réseau. Cette journée s'inscrit dans la continuité des évenements académiques sur le sujet de l'Internet des Objets
                </p>
            </div>

            <div id="SETIT" class="tabcontent">
                <p style="color:#1976e9;margin-top:0.2%;font-size:1.1vw;font-weight:bold; border-bottom:2px solid gray">
                    Sciences of Electronics, Technologies of Information and Telecommunication - 2009
                    March 22-26, Hammamet, Tunisia
                </p>
                <img src="{{asset('images/images4/stt3.gif')}}" style="width:100%" height="100" class="thumbnail" />

            </div>

            <div id="SETIT2" class="tabcontent">
                <p style="color:#1976e9;margin-top:0.2%;font-size:1.1vw;font-weight:bold; border-bottom:2px solid gray">
                    Sciences of Electronics, Technologies of Information and Telecommunication, Hammamet 2007
                </p>
                <img src="{{asset('images/images4/stt2.gif')}}" style="max-width:100%;float:left" height="100" width="100" class="thumbnail" />
                <p align="center" style="font-weight:bold">Honorary Chair</p>
                <p align="center" style="font-weight:bold">Lazhar BOUOUNI</p>
                <p align="center" style="font-weight:bold">Minister of Higher Education, Scientific Research and Technology</p>
                <p align="center" style="font-weight:bold">Conference Chairmen</p>
                <p align="center" style="font-weight:bold">Mohamed Salim BOUHLEL (ISBS-Sfax, Tunisia)</p>
                <p align="center" style="font-weight:bold;border-bottom:2px solid gray">Bassel SOLAIMAN (ENST-Br, France</p>
                <div>
                    <img src="{{asset('images/images4/setit2008 mekouar1.jpg')}}" style="max-width:100%;" height="150" width="150" class="thumbnail" />
                    <img src="{{asset('images/images4/setit2008 1.jpg')}}" style="max-width:100%;" height="150" width="150" class="thumbnail" />
                    <img src="{{asset('images/images4/setit2008 mekouar.jpg')}}" style="max-width:100%;" height="150" width="150" class="thumbnail" />
                    <img src="{{asset('images/images4/setit2008 mekouar2.jpg')}}" style="max-width:100%;" height="150" width="150" class="thumbnail" />
                </div>
            </div>

            <div id="DFMA" class="tabcontent">
                <p style="color:#1976e9;margin-top:0.2%;font-size:1.1vw;font-weight:bold; border-bottom:2px solid gray">
                    THE FIRST INTERNATIONAL CONFERENCE ON DISTRIBUTED FRAMEWORKS FOR MULTIMEDIA APPLICATION DFMA 2005 - FEBRUARY 6-9, 2005 - BESANÇON, FRANCE
                </p>
                <div>
                    <img src="{{asset('images/images4/dfma2005 mekouar1.jpg')}}" style="max-width:100%;" height="120" width="220" class="thumbnail" />
                    <p align="justify" style="border-bottom:2px solid gray">Depuis l’année 2004 l’ESISA n’a pas cessé de donner de l’importance à la recherche scientifique en informatique au sein de son cursus universitaires. </p>
                </div>

                <div>
                    <img src="{{asset('images/images4/dfma2005 mekouar2.jpg')}}" style="max-width:100%;" height="120" width="220" class="thumbnail" />
                    <p align="justify">Résultat : un grand nombre parmi ses lauréats actuellement sont en préparation de thèses dans différents laboratoires en France et notamment au LIFC et LSIS. </p>
                </div>
            </div>

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

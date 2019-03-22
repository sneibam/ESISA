<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Ecole Supérieure d'Ingénierie En Sciences Appliquées</title>
    <link href="{{asset('css/Style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/Menu.css')}}" rel="stylesheet" />
    <link href="{{asset('css/SideBar.css')}}" type="text/css" rel="stylesheet"/>
    <script src="{{ asset('js/scripts/jquery-1.9.0.min.js')}}"></script>
    <script src="{{ asset('js/scripts/Scripts.js')}}"></script>
    <script src="{{ asset('js/scripts/bootstrap.min.js')}}"></script>
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

        <div class="column2 " style="padding-left:0.6%; margin-left: 2%;">
            <!-- <p style="color:#1962e5;font-size:1.3vw;margin-top:0.8%;">ETUDIER A l'ESISA :</p> -->
            <div class="part">ETUDIER A l'ESISA :</div>
            <br />
            <img src="{{asset('images/images/1.JPG')}}" height="134" width="240" style="max-width:100%;height:auto; margin-right:2%;float:left;" class="thumbnail" />
            <div style="font-size:1vw;font-family:'calibri'">
                <p align="justify">
                    L'Ingénierie informatique s'impose de plus en plus aux entreprises comme une technologie incontournable.
                </p>
                <p align="justify">
                    Concevoir et mettre en œuvre des systèmes informatiques, organiser et exploiter un service informatique... un métier à multiples facettes de l'ingénieur ESISA.
                </p>
                <p align="justify">
                    L'Ecole Supérieure d'ingénierie en Sciences Appliquées est une école, fondée par un professionnel de l'informatique (Docteur, Ingénieur, PDG, Teneur du prix Sadi Carnot), qui répond aux besoins du marché de travail de la région et de son développement.
                </p>
                <img src="{{asset('images/images/2.JPG')}}" height="134" width="240" style="max-width:100%;height:auto; margin-left:2%;float:right;" class="thumbnail" />
                <p align="justify">
                    L'Ingénierie informatique s'impose de plus en plus aux entreprises comme une technologie incontournable.

                    Concevoir et mettre en œuvre des systèmes informatiques, organiser et exploiter un service informatique... un métier à multiples facettes de l'ingénieur ESISA.
                </p>

            </div>
            <div>
                <p style="color:#1962e5;font-size:1.3vw;margin-top:14%;">UN ENVIRONNEMENT DE TRAVAIL TRÈS CONVIVIAL... :</p>
                <p align="justify" style="font-size:1vw;font-family:'calibri'">
                    L'école est située dans un quartier résidentiel, calme, sur un écrin de verdure de 2400 m2 à quelques minutes du centre ville.
                </p>
            </div>
            <div>
                <p style="color:#1962e5;font-size:1.3vw;margin-top:0.9%;">UN CENTRE INFORMATIQUE... :</p>
                <span>
                    <img src="{{asset('images/images/i1.jpg')}}" width="200" style="max-width:100%;height:auto;float:left;margin-right:2%" class="thumbnail" />
                </span>
                <span>
                    <img src="{{asset('images/images/i3.jpg')}}" width="200" style="max-width:100%;height:auto;float:left;margin-right:2%" class="thumbnail" />
                </span>
                <span>
                    <img src="{{asset('images/images/img5.jpg')}}" width="200" style="max-width:100%;height:auto;" class="thumbnail" />
                </span>
            </div>
            <div>
                <p style="color:#1962e5;font-size:1.3vw;margin-top:0.9%;">UN AMPHI-THÉÂTRE... :</p>
                <img src="{{asset('images/images/amphi.jpg')}}" width="200" style="max-width:100%;height:auto;float:right;margin-left:1%" class="thumbnail" />
                <p align="justify" style="font-size:1vw;font-family:'calibri'">D'une centaine de places, équipé des technologies de l'information et de communication pour organiser des visioconférences, des séminaires et des cours à distances. </p>
            </div>

            <div style="margin-top:10%">
                <p style="color:#1962e5;font-size:1.3vw;margin-top:0.9%;">UNE EQUIPE PÉDAGOGIQUE... :</p>
                <p align="justify" style="font-size:1vw;font-family:'calibri'">
                    Le corps enseignant est constitué essentiellement de docteurs d'état et d'ingénieurs d'état de haut niveau. La plus part d'entre eux, ont fait leur preuve à l'étranger (USA, France, Canada) et au Maroc, Ils occupent actuellement des postes importants à responsabilité pédagogique.
                </p>
            </div>

            <div>
                <p style="color:#1962e5;font-size:1.3vw;margin-top:0.9%;">UNE PÉDAGOGIE ACTIVE... :</p>
                <p align="justify" style="font-size:1vw;font-family:'calibri'">
                    Donner en quatre ans une formation scientifique étendue et de haut niveau en ingénierie informatique.
                    Former de véritables professionnels métrisant complètement les techniques informatiques d'aujourd'hui. Entrainer es ingénieurs à la conduite des projets importants et au travail collectif. Forger l'esprit de compétition des élèves-ingénieurs ESISA face aux réalités de la concurrence internationale ...
                </p>
            </div>

            <div>
                <p style="color:#1962e5;font-size:1.3vw;margin-top:0.8%;">DES OBJECTIFS AMBITIEUX.... :</p>
                <img src="{{asset('images/images/3.JPG')}}" height="134" width="240" style="max-width:100%;height:auto; margin-right:2%;float:left;" class="thumbnail" />
                <div style="font-size:1vw;font-family:'calibri'">
                    <p align="justify">
                        L'ESISA la grande école d'ingénierie informatique. Ses diplômes auront vocation à exercer des fonctions d'ingénieurs d'études, de conception, de développement et d'exploitation de systèmes....
                    </p>
                    <p align="justify">
                        L'école s'attache à familiariser ses élèves aux outils modernes de l'ingénieur, tels que qualité, travail en groupe et conduite de projet... Cette volonté se traduit par l'importance donnée aux stages en entreprise :
                    </p>
                    <p align="justify">
                        Un stage "Méthodes Informatiques" de 1 à 2 mois à la fin de la 3ème année. Un stage "Etude et conception" de 4 à 6 mois à la fin de la 4ème année, qui fera l'objet d'une soutenance de mémoire.
                    </p>
                </div>

                <div>
                    <p style="color:#1962e5;font-size:1.3vw;margin-top:0.8%;">UNE OUVERTURE À L'INTERNATIONAL... :</p>
                    <img src="{{asset('images/images/6.JPG')}}" height="134" width="240" style="max-width:100%;height:auto; margin-right:2%;float:right;" class="thumbnail" />
                    <div style="font-size:1vw;font-family:'calibri'">
                        <p align="justify">
                            Les stages à l'étranger sont encouragés surtout en 3ème et 4ème année.
                            Chaque année une vingtaine d'étudiant partent à l'étranger (France, Canada, Etats unis, Sénégal, Guinée, Mali, ….) pour effectuer leurs stages..
                        </p>
                        <p align="justify">
                            Des accords de partenariat avec des écoles d'ingénieur d'état prestigieuses et des universités étatiques en France (Enseignement gratuit) :
                        </p>
                        <ul>
                            <li>
                                Ecole Polytechnique de Marseille
                            </li>
                            <li>
                                Ecole Nationale Supérieure d'Informatique pour l'Industrie et l'Entreprise (Paris-Evry/Strasbourg)
                            </li>
                            <li>
                                Institut Supérieur d'Informatique, de Modélisation et de leurs Applications) de Clermont-Ferrand,
                            </li>
                            <li>
                                L'ESIAG (Ecole Supérieure d'Informatique Appliquée à la Gestion) à Paris
                            </li>
                            <li>
                                LIFC (Laboratoire d'Informatique de Franche Comté) à Besançon
                            </li>
                            <li>
                                L'université Blaise Pascal de Clermont-Ferrand
                            </li>
                            <li>
                                LSIS (Laboratoire des Sciences de l'Information et des Systèmes) à Marseille
                            </li>
                            <li>
                                L'Université de Paris 8
                            </li>
                            <li>
                                L'Université de Cergy Pontoise
                            </li>
                            <li>
                                L'Université de Bourgogne
                            </li>
                            <li>
                                L'Université Paul Verlaine de Metz
                            </li>
                            <li>
                                Università degli studi di Genova - Italie
                            </li>
                        </ul>
                    </div>
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

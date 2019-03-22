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
            <header class="header"><span style="margin-left: 20%;">INSCRIPTION</span></header>
            <a href="register">Inscription En Ligne</a>
            <a href="{{asset('pdf/dossier_inscription.pdf')}}">Telecharger Le Dossier d'Inscription</a>
            <a href="{{asset('pdf/Reglement_interieur.pdf')}}">Règlement Intérieur</a>
            <header class="header" style="margin-top:3%"><span style="margin-left: 20%;">INTRANET</span></header>
            <a href="parent">Espace Parents</a>
            <header class="header" style="margin-top:3%"><span style="margin-left: 20%;">ENSEIGNEMENTS</span></header>
            <a href="Etudier-ESISA">L'Ecole</a>
            <a href="Objectifs">Nos Objectifs</a>
            <a href="Mot-President">Mot Du Président</a>
            <a href="Systeme-Enseignement">Système d'Enseignement</a>
            <header class="header" style="margin-top:3%"><span style="margin-left: 20%;">RECHERCHE</span></header>
            <a href="Conferences-ESISA">Conférence à L'ESISA</a>
            <a href="Conferences-Etranger">Conférence à L'Etranger</a>
            <a href="Workshop">Workshops</a>
            <a href="Themes-Recherche">Thèmes de Recherche</a>
            <header class="header" style="margin-top:3%"><span style="margin-left: 20%;">DOCUMENTS</span></header>
            <a href="Parcours-Procedures">Procédure d'Admission</a>
            <a href="{{asset('pdf/programme.pdf')}}">Plaquette Bac +3 Ingénierie Logiciel</a>
            <a href="{{asset('pdf/ISI.pdf')}}">Bac +5 Mastères ISI</a>
            <a href="{{asset('pdf/ISD.pdf')}}" style=" margin-bottom:3%">Bac +5 Mastères ISD</a>
      </div>
    </div>
        <div class="column2 " style="padding-left:2%">
            <p style="color:#1962e5;font-size:1.3vw;margin-top:0.8%;">INTRODUCTION</p>
            <div style="font-size:1vw;font-family:'calibri'">
                <p align="justify">
                    Notre ambition est que les étudiants que nous formons aujourd'hui, soient demain pour vous des collaborateurs efficaces, sachant prendre des responsabilités dans un environnement professionnel changeant. Pour réussir ce pari, nous nous devons de travailler étroitement avec vous. Le développement de l'école et la bonne adéquation des compétences de nos ingénieurs au marché, passe obligatoirement par un partenariat fort avec les entreprises. C'est pourquoi nous sommes prêts à mener avec vous toute opération ou partenariat nous permettant de renforcer les liens de l'école avec le monde professionnel.
                </p>
                <p align="justify">
                    Cette partie du site a pour but d'améliorer les échanges entre les entreprises et l'ESISA, en proposant un certain nombre de partenariats envisageables.
                </p>
                <p align="justify">
                    Nous restons a votre écoute et n'hésitez pas à nous contacter à l'adresse suivante : <a style="color:#428bca">stages@esisa.ac.ma</a> pour toute nouvelles suggestions.
                </p>
                <p align="justify">
                    La rubrique stages vous permet de déposer vos offres qui seront diffusées auprès des élèves d'ingénieur concernés.
                </p>
                <p align="justify">
                    La rubrique emplois vous permet de déposer vos offres qui seront diffusées auprès des élèves de dernière année, ainsi qu'à nos anciens élèves. La rubrique partenariat regroupe un ensemble de relations possibles entre les entreprises et l'ESISA. Vous y trouverez la possibilité de proposer des projets industriels pouvant être effectués dans le cadre du cursus des élèves de l'ESISA, de proposer des enseignements ou des conférences, de proposer des réunions de présentation de votre entreprise à nos élèves, enfin la rubrique reste ouverte à toute autre proposition que vous pourriez nous suggérer.
                    Les écoles d'ingénieurs telle que l'ESISA ont besoin également, pour fournir un enseignement de qualité en phase avec les besoins du marché, de renouveler rapidement les environnements de travail des étudiants (matériels et logiciels). Ce que nous souhaitons avant tout c'est de rester en liaison avec vous.
                </p>

                <img src="{{asset('images/images4/entreprise.jpg')}}" height="240" width="400" style="max-width:100%; margin-left:25%;" class="thumbnail" />

                <p style="color:#1962e5;font-size:1.3vw;margin-top:0.8%;">RELATIONS ENTREPRISES</p>
                <p align="justify">
                    Pionnière de la formation Ingénierie Informatique au Maroc depuis 15 ans (1999), l'ESISA est partenaire de plus de 100 entreprises privées et publiques.
                </p>
                <p align="justify">
                    « Avec l'ESISA, vous jouez la carte de la confiance! C'est une source de compétences ». C'est ce qui se dégage des réactions des Directeurs des Ressources Humaines des entreprises. Les étudiants de l'ESISA ont en général de vraies aptitudes sur le terrain et un bon esprit au sein des entreprises
                </p>
                <p align="justify">
                    C'est pour ça d'ailleurs qu'on s'intéresse de plus en plus aux étudiants de l'ESISA qui sont souvent très autonomes dans leur façon de travailler, grâce aux stages mais aussi au système lui-même qui laisse pas mal d'initiative aux étudiants.
                </p>

                <img src="{{asset('images/images4/entreprise3.jpg')}}" height="240" width="400" style="max-width:100%; margin-left:25%;" class="thumbnail" />

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

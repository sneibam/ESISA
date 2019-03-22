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
    <link href="{{asset('bootstrap/css/bootstrap-grid.min.css')}}" type="text/css" rel="stylesheet"/>
    <script src="{{ asset('js/scripts/jquery-1.9.0.min.js')}}"></script>
    <script src="{{ asset('js/scripts/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/scripts/Scripts.js')}}"></script>
    <script src="{{ asset('js/scripts/TabsJS.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:#f8f8f8" onload="openEve(event, 'NDIDO')">
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
                <button class="tablinks" onclick="openEve(event, 'NDIDO')">NDIDO 2017</button>
                <button class="tablinks" onclick="openEve(event, 'Frontière')">Frontière Numériques, 2014</button>
                <button class="tablinks" onclick="openEve(event, 'Document')">Document Numérique, 2014</button>
                <button class="tablinks" onclick="openEve(event, 'F_Num')">Frontière Numériques, 2012</button>
                <button class="tablinks" onclick="openEve(event, 'I3M')">I3M 2010</button>
                <button class="tablinks" onclick="openEve(event, 'emedysis2010')">E-MEDISYS 2010 - FÈS</button>
                <button class="tablinks" onclick="openEve(event, 'emedysis2008')">E-MEDISYS 2008 - SFAX</button>
                <button class="tablinks" onclick="openEve(event, 'emedysis2007')">E-MEDISYS 2007 - FÈS</button>

            </div>

            <div id="NDIDO" class="tabcontent">
                <p style="color:#1976e9;margin-top:0.2%;font-size:1.1vw;font-weight:bold">Nouveaux Défis de l’Internet Des Objets. 18 et 19 MAI 2017, Fès MAROC</p>
                <p align="justify">
                    Suite à la journée nationale organisée le 29 Novembre 2016 à la Cite´ de l’Innovation, Nokia Paris-Saclay (https://ido2016.sciencesconf.org/), nous souhaitons poursuivre l’exploration des nouveaux défis que l’Internet des Objets (IdO) lors d’une conférence de deux jours qui aura lieu à Fès au Maroc dans les locaux de l’Ecole Supérieure d’Ingénierie en Sciences Appliquées (ESISA). Cette conférence interrogera les problématiques de l’IdO suivant trois axes complémentaires technique, usage, éthique. Les techniques utilisées pour produire les artefacts (objets physiques, infrastructures), les programmes (algorithmiques, logiciels) et les données (Big Data, linked data, metadata, ontologies) font l’objet de multiple innovations tant le domaine de l’IdO est riche et stimulant.
                </p>
                <p style="color:#1976e9;margin-top:0.2%;font-size:1.1vw;font-weight:bold">Présidents de la conférence :</p>
                <ul>
                    <li>
                        Mehdi Ammi, Univ. Paris-Sud / LIMSI-CNRS, France.
                    </li>

                    <li>
                        Sabine Coquillart, INRIA-Grenoble Rhône-Alpes, France
                    </li>

                    <li>
                        Khalid Mekouar, Président Directeur Pédagogique de l'ESISA, Maroc
                    </li>

                    <li>
                        Samuel Szoniecky, Univ. Paris 8 / Laboratoire Paragraphe - CiTU, France
                    </li>
                </ul>

                <div>
                    <table style="width: 100%;">
                        <tr>
                            <td colspan="2">
                                <a href="images/images2/1.jpg"><img src="{{asset('images/images2/1.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>

                        <tr>
                            <td><a href="images/images2/2.jpg"><img src="{{asset('images/images2/2.jpg')}}" style="max-width:100%;" height="300" width="360" class="thumbnail"/></td></a>
                            <td><a href="images/images2/3.jpg"><img src="{{asset('images/images2/3.jpg')}}" style="max-width:100%; float:right;" height="300" width="338" class="thumbnail"/></td></a>
                        </tr>
                        <tr>
                            <td><a href="images/images2/4.jpg"><img src="{{asset('images/images2/4.jpg')}}" style="max-width:100%;" height="300" width="360" class="thumbnail"/></td></a>
                            <td><a href="images/images2/5.jpg"><img src="{{asset('images/images2/5.jpg')}}" style="max-width:100%; float:right;" height="300" width="338" class="thumbnail"/></td></a>
                        </tr>
                    </table>
                </div>
            </div>

            <div id="Frontière" class="tabcontent">
                <p style="color:#1976e9;margin-top:0.2%;font-size:1.1vw;font-weight:bold">2ème Edition du Colloque International "Frontière Numériques", Fès MAROC</p>
                <p style="color:#1976e9;margin-top:0.2%;font-size:1.1vw;font-weight:bold">Mardi 18 et Mercredi 19 Novembre 2014</p>
                <img src="{{asset('images/images2/colloque.jpg')}}" style="max-width:100%" height="300" class="thumbnail" />
                <p align="justify">
                    Colloque organisé par :
                </p>
                <ul>
                    <li>
                        Le Laboratoire Paragraphe EA 349 (Université de Cergy-Pontoise),
                    </li>

                    <li>
                        Le Laboratoire Arts de Images & Art Contemporain EA (Université Paris 8),
                    </li>

                    <li>
                        L'Ecole Supérieure d'Ingénierie en Sciences Appliquées,
                    </li>

                    <li>
                        Avec le soutien de l'Initiative d'excellence en formations innoventes créatric et du Laboratoire d'Excellence Labex Arts-H2H
                    </li>
                </ul>
                <div>
                    <table style="width: 100%;">
                        <tr>
                            <td>
                                <a href="images/images3/1.jpg"><img src="{{asset('images/images3/1.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images3/2.jpg"><img src="{{asset('images/images3/2.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="images/images3/3.jpg"><img src="{{asset('images/images3/3.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images3/4.jpg"><img src="{{asset('images/images3/4.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="images/images3/5.jpg"><img src="{{asset('images/images3/5.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images3/6.jpg"><img src="{{asset('images/images3/6.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="images/images3/7.jpg"><img src="{{asset('images/images3/7.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images3/8.jpg"><img src="{{asset('images/images3/8.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="images/images3/9.jpg"><img src="{{asset('images/images3/9.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images3/10.jpg"><img src="{{asset('images/images3/10.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>

               <div id="Document" class="tabcontent">
                <p style="color:#1976e9;margin-top:0.2%;font-size:1.1vw;font-weight:bold">Livre post-numérique : historique, mutations et perspectives</p>
                <p style="color:#1976e9;margin-top:0.2%;font-size:1.1vw;font-weight:bold">19-20 Novembre 2014 – Fès, Maroc</p>
                <p>Colloque organisé par : </p>
                <ul>
                    <li>
                        CiTU – Paragraphe, Université Paris 8, Saint-Denis – France
                    </li>

                    <li>
                        ESISA, Fés – Maroc
                    </li>

                    <li>
                        Europia, Paris – France
                    </li>

                    <li>
                        GERiiCO, Université de Lille – France
                    </li>

                    <li>
                        IDEFI – Creatic, Université Paris 8, Saint-Denis – France
                    </li>

                    <li>
                        LEDEN – MSH Paris-Nord, Saint-Denis – France
                    </li>
                </ul>
                <p>Aujourd’hui, il est d’usage de parler et de pratiquer la lecture et l’écriture sur des ouvrages dématérialisés, augmentés, enrichis, contextualisés, interactifs, hybrides, crossmédiatisés, etc.  </p>
            </div>

            <div id="F_Num" class="tabcontent">
                <img src="{{asset('images/images3/colloque2012.jpg')}}" style="width:100%" />
                <p>L'ESISA a organisé en partenariat avec l'Université de Paris 8 et le Laboratoire Paragraphe le 1er et 2 novembre 2012 un colloque sous le thème :<span style="font-weight:bold"> "Frontières Numériques et Créations géoartistiques et réalités géopolitiques en Méditerranée : Nouvelles expériences de la mobilité.</span> </p>
                <div>
                    <table style="width: 100%;">
                        <tr>
                            <td>
                                <a href="images/images4/1.jpg"><img src="{{asset('images/images4/1.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images4/2.jpg"><img src="{{asset('images/images4/2.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="images/images4/3.jpg"><img src="{{asset('images/images4/3.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images4/4.jpg"><img src="{{asset('images/images4/4.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="images/images4/5.jpg"><img src="{{asset('images/images4/5.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images4/6.jpg"><img src="{{asset('images/images4/6.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="images/images4/7.jpg"><img src="{{asset('images/images4/7.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images4/8.jpg"><img src="{{asset('images/images4/8.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="images/images4/9.jpg"><img src="{{asset('images/images4/9.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images4/10.jpg"><img src="{{asset('images/images4/10.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="images/images4/11.jpg"><img src="{{asset('images/images4/11.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images4/12.jpg"><img src="{{asset('images/images4/12.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=2>
                                <a href="images/images4/13.jpg"><img src="{{asset('images/images4/13.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="I3M" class="tabcontent">
                <div width="100%;">
                    <img src="images/images4/esisa.png" style="width: 20%" height="auto" />
                    <img src="images/images4/emss.png" style="width: 15%" height="auto"/>
                    <img src="images/images4/hms.png" style="width: 20%" height="auto"/>
                    <img src="images/images4/imaaca.png" style="width: 20%" height="auto"/>
                    <img src="images/images4/mas.png" style="width: 20%" height="auto" />
                </div>
                <p>I3M implique plusieurs conférences co-implantées sur le même site. En 2010 ESISA a co-organisé cet évènement scientifique qui favorise la discussion entre tous les simulationnistes, qui sont activement à jouer des rôles différents dans le modeling et la simulation, afin de transformer les intuitions et les attentes dans la réalité</span> </p>
                <p>L'initiative I3M est le principal outil pour améliorer la valeur des compétences et l'expertise afin de promouvoir efficacement les aspects innovants et les contributions scientifiques. </p>
                <div>
                    <table style="width: 100%;">
                        <tr>
                            <td>
                                <a href="images/images4/1(2).jpg"><img src="{{asset('images/images4/1(2).jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images4/1(3).jpg"><img src="{{asset('images/images4/1(3).jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images4/1(4).jpg"><img src="{{asset('images/images4/1(4).jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="images/images4/1(5).jpg"><img src="{{asset('images/images4/1(5).jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images4/1(1).jpg"><img src="{{asset('images/images4/1(1).jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images4/1(7).jpg"><img src="{{asset('images/images4/1(7).jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="emedysis2010" class="tabcontent">

                <p>Suite au succès de la 1ère et 2ème conférence Emedisys 07/08 organisées par l'ESISA une troisième sera organisée à Fès le 12-14 Mai 2010.</span> </p>
                <p>La conférence s'est tenue à la Faculté de Médecine et de Pharmacie de Fès </p>
                <p><span style="font-weight: bold;">Adresse:</span> Route de Sefrou Outre le nouveau stade </p>
                <p>
                    E-Medisys est une nouvelle conférence internationale , très novateur , dans les rubriques de la télémédecine. Cette conférence est née de la collaboration de trois équipes de recherche réparties entre Sfax ( Tunisie ) , Besançon ( France ) et Fès ( Maroc ) .
                </p>
                <p>Les actes du colloque ont été distribués aux participants sous forme imprimée .</p>
                <div>
                    <table style="width: 100%;">
                        <tr>
                            <td>
                                <a href="images/images4/med.jpg"><img src="{{asset('images/images4/med.jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images4/1(8).jpg"><img src="{{asset('images/images4/1(8).jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images4/1(9).jpg"><img src="{{asset('images/images4/1(9).jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="images/images4/1(10).jpg"><img src="{{asset('images/images4/1(10).jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images4/1(11).jpg"><img src="{{asset('images/images4/1(11).jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images4/1(12).jpg"><img src="{{asset('images/images4/1(12).jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="images/images4/1(13).jpg"><img src="{{asset('images/images4/1(13).jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images4/1(14).jpg"><img src="{{asset('images/images4/1(14).jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                            <td>
                                <a href="images/images4/1(15).jpg"><img src="{{asset('images/images4/1(15   ).jpg')}}" style="width:100%" height="300" class="thumbnail"/></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div id="emedysis2008" class="tabcontent">
                <div width="100%;">
                    <img src="images/images4/stt4.gif" style="width: 100%" height="auto" />
                </div>
                <p>
                    Suite au succès de la 1ère conférence Emedisys 07 organisée par l'ESISA à Fès une deuxième sera organisée à Sfax à Tunis le 29-31 Octobre 2008.
                </p>
                <p>
                    Conference Chairman<br />
                    <span style="font-weight: bold;">Mohamed Salim BOUHLEL</span><br />
                    Professor, University of Sfax, E-Medisys, Tunisia<br />
                    <span style="font-weight: bold;">Jean-christophe LAPAYRE</span><br />
                    Professor in the university of Franche-Comté, LIFC, France<br />
                    <span style="font-weight: bold;">Khalid MEKOUAR</span><br />
                    President of ESISA Fès, Maroc<br />
                    Scientific Committee Chairman<br />
                    <span style="font-weight: bold;">Mohamed ESSAAIDI</span><br />
                    IEEE Morocco Section Chair<br />
                    <span style="font-weight: bold;">Jamel DAOUD</span><br />
                    Professor in the Sfax Faculty of Medicine, Tunisia
                </p>
            </div>

            <div id="emedysis2007" class="tabcontent">
                <p>
                    <img src="images/images4/emedisys.jpg" />
                    e-Medisys est un e nouvelle conférence internationale, très novatrice, sur le thème de la télémédecine. Cette conférence est née de la collaboration de trois équipes de recherche réparties entre l’Université de Sfax-Tunis, l’Universités de Franche Comté-Besançon-France et l’Ecole Supérieure d’Ingénierie en Sciences Appliquées ESISA-Fès Maroc.

Qu'il s'agisse d'une expérience de télémédecine entre praticiens ou d'articles plus techniques pour des informaticiens, il est vraiment intéressant que nos communautés échangent les points de vue. e-Medisys, de par son thème transdisciplinaire, a pour vocation de réunir les chercheurs, mais aussi les industriels, qui sont acteurs de la télémédecine tant du point de vue médical que du point de vue informatique. C'est ce qui en fait un évènement unique : la réunion des acteurs qui permettront de traiter la télémédecine "de bout en bout".

Cette conférence s'est tenue en français et en anglais. Les papiers ont été sélectionnés par un comité de lecture mixte regroupant des spécialistes de renommée dans le domaine de la télémédecine et les nouvelles technologies de l'information. Pour la session de tutoriaux, nous avons invité des sommités comme le Professeur Maresco (Opération Lindberg, argonaute3D), le Professeur Bashshur (Journal on e-health and telemedecine) ou encore le Professeur Lareng (Président de la Société Européenne de Télémédecine) et d'autres sommités dans le domaine de la recherche.
                </p>

                <!-- <table style="width: 100%;">
                    <tr>
                        <td style="background-color: red;">
                            <img src="images/images4/emedisys07 esisa mekouar2.gif.jpg" width="50%;"/>
                        </td>
                        <td>
                            <p>De gauche à droite</p>
                            <p>Pr. Nouredine ALAMI : Vice président la faculté de Médecine et de Pharmacie</p>
                            <p>Dr. Khalid MEKOUAR : Président de la conférence EMEDISYS 07</p>
                            <p>Pr. Mohamed ESSAAIDI : Président IEEE Maroc</p>
                            <p>Pr. Mohamed Salim BOUHLEL : Président de Setit 09 et EMEDISYS 08 à Tunis</p>
                            <p>Pr. Jean-christophe LAPAYRE : Directeur du LIFC (Besançon-France)</p>
                        </td>
                    </tr>
                </table> -->
                <div class="container">
                    <style>
                        .row {
                            border-top: 1px solid rgb(221, 221, 221);
                            padding-top : 2%;
                            padding-bottom : 2%;
                        }
                    </style>
                    <div class="row">
                        <div class="col-4">
                            <a href="images/images4/emedisys07 esisa mekouar2.gif.jpg"><img src="images/images4/emedisys07 esisa mekouar2.gif.jpg" style="width:100%;" height="100%;"/></a>
                        </div>
                        <div class="col-8">
                            <p>De gauche à droite</p>
                            <p>Pr. Nouredine ALAMI : Vice président la faculté de Médecine et de Pharmacie</p>
                            <p>Dr. Khalid MEKOUAR : Président de la conférence EMEDISYS 07</p>
                            <p>Pr. Mohamed ESSAAIDI : Président IEEE Maroc</p>
                            <p>Pr. Mohamed Salim BOUHLEL : Président de Setit 09 et EMEDISYS 08 à Tunis</p>
                            <p>Pr. Jean-christophe LAPAYRE : Directeur du LIFC (Besançon-France)</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <a href="images/images4/emedisys07 esisa esisa2.jpg"><img src="images/images4/emedisys07 esisa2.jpg" style="width:100%;" height="100%;"/></a>
                        </div>
                        <div class="col-8">
                            <p>
                                Participation des élèves de l’ESISA aux grandes conférences internationales une initiative qui est une partie intégrante de sa pédagogie active.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <a href="images/images4/emedisys07 esisa esisa3.jpg"><img src="images/images4/emedisys07 esisa3.jpg" style="width:100%;" height="100%;"/></a>
                        </div>
                        <div class="col-8">
                            <p>
                                La force d’ESISA est son corps enseignant (à la hauteur de l’espérance) qui est formé essentiellement de Docteurs d’état qui ont fait leur preuve à l’étranger (USA, France, Canada) et au Maroc.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <a href="images/images4/emedisys07 esisa mekouar3.jpg"><img src="images/images4/emedisys07 esisa mekouar3.jpg" style="width:100%;" height="100%;"/></a>
                        </div>
                        <div class="col-8">
                            <p>
                                Un ancien étudiant de l’ESISA, qui a intégré le Laboratoire LIFC de Besançon et qui est un chercheur et parmi le comité d’organisation de la conférence.
Reçoit le prix de la main de M. MEKOUAR Khalid Président de l’ESISA et Président de la Conférence EMEDISYS 07.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <a href="images/images4/emedisys07 esisa esisa4.jpg"><img src="images/images4/emedisys07 esisa4.jpg" style="width:100%;" height="100%;"/></a>
                        </div>
                        <div class="col-8">
                            <p>
                                La Faculté de Médecine et de Pharmacie de Fès (doyen, Vices Doyen, Professeurs, ….) a joué un rôle primordial à la réussite de cette conférence EMEDISYS 07 Un Carrefour d’information multi disciplinaire
Chercheurs en Médecine, Pharmacie, Informatique, Electronique, Télésanté, Réseaux, Télésurveillance, …..
                            </p>
                        </div>
                    </div>
                    <ul class="ulEmedisys2007">
                        <style>
                            .ulEmedisys2007 li{
                                color: rgb(90, 90, 90);
                            }
                            .ulEmedisys2007 li a {
                                color: rgb(66, 139, 202);
                            }
                        </style>
                        <li><a href="emedisys2007/index.html">Tutorials Sessions</a></li>
                        <li><a href="emedisys2007/topics.html">Official Ceremony</a></li>
                        <li><a href="emedisys2007/participants.html">Participants and Organizers</a></li>
                        <li><a href="emedisys2007/galaDinner.html">Gala Dinner and Social Events</a></li>
                    </ul>
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
</html >

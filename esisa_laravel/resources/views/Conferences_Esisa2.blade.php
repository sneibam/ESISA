<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Ecole Supérieure d'Ingénierie En Sciences Appliquées</title>
    <link href="{{asset('css/Style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/Menu.css')}}" rel="stylesheet" />
    <link href="{{asset('css/Tabs.css')}}" rel="stylesheet" />

    <script src="{{ asset('js/scripts/jquery-1.9.0.min.js')}}"></script>
    <script src="{{ asset('js/scripts/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/scripts/Scripts.js')}}"></script>
    <script src="{{ asset('js/scripts/TabsJS.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:#f8f8f8">
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
    </div>
        <div class="column2" style="padding-left:2%;font-size:2vw;">
            <p style="color:#1962e5;font-size:1.3vw;margin-top:0.5%;">CONFÉRENCES A L'ESISA :</p>
            <div class="tab">
                <button class="tablinks" onclick="window.location.href='Conferences-ESISA'" style="margin-right:3.8%;margin-left:0.5%"><<</button>
                <button class="tablinks" onclick="openEve(event, 'I3M')">I3M 2010</button>
                <button class="tablinks" onclick="openEve(event, 'MEDISYS')">E-MEDISYS 2010 - Fès</button>
                <button class="tablinks" onclick="openEve(event, 'MEDISYS2')">E-MEDISYS 2008 - SFAX</button>
                <button class="tablinks" onclick="openEve(event, 'MEDISYS3')">E-MEDISYS 2007 - Fès</button>
            </div>

            <div id="I3M" class="tabcontent">
                <img src="{{asset('images/images4/esisa.png')}}" style="max-width:100%;margin-left:15%;" width="90" height="90" />
                <img src="{{asset('images/images4/emss.png')}}" style="max-width:100%;float:unset;" width="90" height="90" />
                <img src="{{asset('images/images4/hms.png')}}" style="max-width:100%; float:unset;" width="90" height="90" />
                <img src="{{asset('images/images4/imaaca.png')}}" style="max-width:100%;float:unset;" width="90" height="90" />
                <img src="{{asset('images/images4/mas.png')}}" style="max-width:100%; float:unset" width="90" height="90" />
                <p align="justify">I3M implique plusieurs conférences co-implantées sur le même site. En 2010 ESISA a co-organisé cet évènement scientifique qui favorise la discussion entre tous les simulationnistes, qui sont activement à jouer des rôles différents dans le modeling et la simulation, afin de transformer les intuitions et les attentes dans la réalité. </p>
                <p align="justify">L'initiative I3M est le principal outil pour améliorer la valeur des compétences et l'expertise afin de promouvoir efficacement les aspects innovants et les contributions scientifiques.  </p>

                <img src="{{asset('images/images4/1(2).jpg')}}" style="max-width:100%;float:right" height="160" width="238" class="thumbnail" />
                <img src="{{asset('images/images4/1(3).JPG')}}" style="max-width:100%;" height="160" width="238" class="thumbnail" />
                <img src="{{asset('images/images4/1(4).JPG')}}" style="max-width:100%;float:right" height="160" width="238" class="thumbnail" />
                <img src="{{asset('images/images4/1(5).JPG')}}" style="max-width:100%;float:right" height="160" width="238" class="thumbnail" />
                <img src="{{asset('images/images4/1(7).jpg')}}" style="max-width:100%;" height="160" width="238" class="thumbnail" />
                <img src="{{asset('images/images4/1(1).jpg')}}" style="max-width:100%;float:left" height="160" width="238" class="thumbnail" />
            </div>

            <div id="MEDISYS" class="tabcontent">
                <p>Suite au succès de la 1ère et 2ème conférence Emedisys 07/08 organisées par l'ESISA une troisième sera organisée à Fès le 12-14 Mai 2010. </p>
                <p>
                    La conférence s'est tenue à la Faculté de Médecine et de Pharmacie de Fès
                </p>
                <p>
                    <span style="font-weight:bold">
                        Adresse:
                    </span>
                    Route de Sefrou Outre le nouveau stade .
                </p>
                <p>E-Medisys est une nouvelle conférence internationale , très novateur , dans les rubriques de la télémédecine. Cette conférence est née de la collaboration de trois équipes de recherche réparties entre Sfax ( Tunisie ) , Besançon ( France ) et Fès ( Maroc ) . </p>
                <p>Les actes du colloque ont été distribués aux participants sous forme imprimée . </p>

                <div>
                    <img src="{{asset('images/images4/med.jpg')}}" style="max-width:100%;" height="160" width="238" class="thumbnail" />
                    <img src="{{asset('images/images4/1(8).jpg')}}" style="max-width:100%;float:right" height="160" width="238" class="thumbnail" />
                    <img src="{{asset('images/images4/1(9).JPG')}}" style="max-width:100%;float:right" height="160" width="238" class="thumbnail" />
                    <img src="{{asset('images/images4/1(10).JPG')}}" style="max-width:100%;" height="160" width="238" class="thumbnail" />
                    <img src="{{asset('images/images4/1(11).JPG')}}" style="max-width:100%;float:right" height="160" width="238" class="thumbnail" />
                    <img src="{{asset('images/images4/1(12).jpg')}}" style="max-width:100%;float:right" height="160" width="238" class="thumbnail" />
                    <img src="{{asset('images/images4/1(13).jpg')}}" style="max-width:100%;" height="160" width="238" class="thumbnail" />
                    <img src="{{asset('images/images4/1(14).jpg')}}" style="max-width:100%;float:right" height="160" width="238" class="thumbnail" />
                    <img src="{{asset('images/images4/1(15).jpg')}}" style="max-width:100%;float:right" height="160" width="238" class="thumbnail" />
                </div>
            </div>

            <div id="MEDISYS2" class="tabcontent">
                <img src="{{asset('images/images4/stt4.gif')}}" style="width:100%;" height="160" />
                <p>Suite au succès de la 1ère conférence Emedisys 07 organisée par l'ESISA à Fès une deuxième sera organisée à Sfax à Tunis le 29-31 Octobre 2008.</p>
                <p>Conference Chairmen</p>
                <p style="font-weight:bold">Mohamed Salim BOUHLEL</p>
                <p style="font-style:italic">Professor, University of Sfax, E-Medisys, Tunisia</p>
                <p style="font-weight:bold">Jean-christophe LAPAYRE</p>
                <p style="font-style:italic">Professor in the university of Franche-Comté, LIFC, France</p>
                <p style="font-weight:bold">Khalid MEKOUAR</p>
                <p style="font-style:italic">President of ESISA Fès, Maroc</p>
                <p style="font-style:italic">Scientific Committee Chairman</p>
                <p style="font-weight:bold">Mohamed ESSAAIDI</p>
                <p style="font-style:italic">IEEE Morocco Section Chair</p>
                <p style="font-weight:bold">Jamel DAOUD</p>
                <p style="font-style:italic">Professor in the Sfax Faculty of Medicine, Tunisia </p>

            </div>

            <div id="MEDISYS3" class="tabcontent">
                <div style="border-bottom:2px solid gray">
                    <img src="{{asset('images/images4/emedisys.jpg')}}" style="float:left" class="thumbnail" />
                    <p style="margin-left:12%">e-Medisys est un e nouvelle conférence internationale, très novatrice, sur le thème de la télémédecine. Cette conférence est née de la collaboration de trois équipes de recherche réparties entre l’Université de Sfax-Tunis, l’Universités de Franche Comté-Besançon-France et l’Ecole Supérieure d’Ingénierie en Sciences Appliquées ESISA-Fès Maroc. </p>
                    <p style="margin-left:12%">Qu'il s'agisse d'une expérience de télémédecine entre praticiens ou d'articles plus techniques pour des informaticiens, il est vraiment intéressant que nos communautés échangent les points de vue. e-Medisys, de par son thème transdisciplinaire, a pour vocation de réunir les chercheurs, mais aussi les industriels, qui </p>
                    <p>sont acteurs de la télémédecine tant du point de vue médical que du point de vue informatique. C'est ce qui en fait un évènement unique : la réunion des acteurs qui permettront de traiter la télémédecine "de bout en bout". </p>
                    <p>Cette conférence s'est tenue en français et en anglais. Les papiers ont été sélectionnés par un comité de lecture mixte regroupant des spécialistes de renommée dans le domaine de la télémédecine et les nouvelles technologies de l'information. Pour la session de tutoriaux, nous avons invité des sommités comme le Professeur Maresco (Opération Lindberg, argonaute3D), le Professeur Bashshur (Journal on e-health and telemedecine) ou encore le Professeur Lareng (Président de la Société Européenne de Télémédecine) et d'autres sommités dans le domaine de la recherche. </p>
                </div>
                <div style="margin-top:0.5%;border-bottom:2px solid gray">
                    <img src="{{asset('images/images4/emedisys07 esisa mekouar2.gif.jpg')}}" style="max-width:100%;float:left" height="160" width="238" class="thumbnail" />
                    <p>De gauche à droite : </p>
                    <p>Pr. Nouredine ALAMI : Vice président la faculté de Médecine et de Pharmacie</p>
                    <p>Dr. Khalid MEKOUAR : Président de la conférence EMEDISYS 07</p>
                    <p>Pr. Mohamed ESSAAIDI : Président IEEE Maroc</p>
                    <p>Pr. Mohamed Salim BOUHLEL : Président de Setit 09 et EMEDISYS 08 à Tunis emedisys07 esisa mekouar2</p>
                    <p>Pr. Jean-christophe LAPAYRE : Directeur du LIFC (Besançon-France)</p>
                </div>

                <div style="margin-top:0.5%;border-bottom:2px solid gray">
                    <img src="{{asset('images/images4/emedisys07 esisa2.jpg')}}" style="max-width:100%;" height="160" width="238" class="thumbnail" />
                    <p>Participation des élèves de l’ESISA aux grandes conférences internationales une initiative qui est une partie intégrante de sa pédagogie active.  </p>
                </div>

                <div style="margin-top:0.5%;border-bottom:2px solid gray">
                    <img src="{{asset('images/images4/emedisys07 esisa3.jpg')}}" style="max-width:100%;" height="160" width="238" class="thumbnail" />
                    <p>La force d’ESISA est son corps enseignant (à la hauteur de l’espérance) qui est formé essentiellement de Docteurs d’état qui ont fait leur preuve à l’étranger (USA, France, Canada) et au Maroc.</p>

                </div>

                <div style="margin-top:0.5%;border-bottom:2px solid gray">
                    <img src="{{asset('images/images4/emedisys07 esisa mekouar3.jpg')}}" style="max-width:100%;" height="160" width="238" class="thumbnail" />
                    <p>
                        Un ancien étudiant de l’ESISA, qui a intégré le Laboratoire LIFC de Besançon et qui est un chercheur et parmi le comité d’organisation de la conférence.
                        Reçoit le prix de la main de M. MEKOUAR Khalid Président de l’ESISA et Président de la Conférence EMEDISYS 07.
                    </p>
                </div>

                <div style="margin-top:0.5%;">
                    <img src="{{asset('images/images4/emedisys07 esisa4.jpg')}}" style="max-width:100%;" height="160" width="238" class="thumbnail" />
                    <p>La Faculté de Médecine et de Pharmacie de Fès (doyen, Vices Doyen, Professeurs, ….) a joué un rôle primordial à la réussite de cette conférence EMEDISYS 07 Un Carrefour d’information multi disciplinaire</p>
                    <p>Chercheurs en Médecine, Pharmacie, Informatique, Electronique, Télésanté, Réseaux, Télésurveillance, …..</p>
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

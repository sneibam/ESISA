<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Ecole Supérieure d'Ingénierie En Sciences Appliquées</title>
    <link href="{{asset('css/Style2.css')}}" rel="stylesheet" />
    <link href="{{asset('css/Menu.css')}}" rel="stylesheet" />
    <link href="{{asset('css/SideBar.css')}}" rel="stylesheet" />
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

        <div class="column2 " style="padding-left:0.6%">
            <!--<p style="color:#1962e5;font-size:1.3vw;margin-top:0.8%;">LES ANCIENS S'EXPRIMENT :</p>
            <div class="column3 Ancien" style="width:42%">
                <img src="{{asset('images/images/nabil.jpg')}}" class="thumbnail" style="align-items:center;max-width:100%" height="100" width="100" />
                <p style="color:#1962e5;font-size:1.1vw;margin-top:0.8%;">EL MARZOUQUI Nabil - Professeur de NTIC (ENSA Marrakech)</p>
                <p>
                    Actuellement, je suis professeur d'informatique et des nouvelles technologies à l'ENSA de Marrakech et aussi à l'Université de sciences de Marrakech. Ex chercheur au Laboratoire d'Informatique de l'Université de Franche-Comté (LIFC) en France j'étais également enseignant à la même Université et dans d'autres écoles d'ingénieurs comme l'ISIFC .
                    Ayant été le responsable des relations étrangères de mon laboratoire avec le Maroc, j'ai constamment gardé le contact avec l'ESISA.
                </p>

                <p>
                    L'ESISA a été pour moi plus qu'une école...une famille. La qualité de la formation qui y est dispensée est incontestable et est sans aucun doute, la raison de ma réussite aujourd'hui.
                </p>
            </div>
            <div class="column3 Ancien" style="width:42%;margin-left:5%;">
                <img src="{{asset('images/images/safia.jpg')}}" class="thumbnail" style="align-items:center;max-width:100%" height="100" width="100" />
                <p style="color:#1962e5;font-size:1.1vw;margin-top:0.8%;">EL MOUDNI Safia - Ingénieur d'Etude chez Capgemini Telecom Media & Defense à Paris</p>
                <p>
                    L'ESISA est pour moi le meilleur choix que j'ai fait car elle m'a donné l'opportunité de vivre deux expériences :
                    Effectuer un stage à LIFC à Besançon, où j'ai intégré une équipe d'enseignants chercheurs qui m'ont proposé par la suite de passer une thèse au sein du laboratoire.Et puisque j'avais des orientations plutôt professionnelles, et grâce à l'école ESISA, j'ai pu intégrer en 4ème année l'école Polytech'Marseille - GII (Génie Industriel et Informatique) où j'ai préparé le diplôme d'ingénieur d'état.
                </p>

                <p>
                    Aujourd'hui, je suis en CDI chez Capgemini Telecom Média Défense à Paris en qualité d'Ingénieur d'études.
                </p>
            </div>
          -->
          <div id="table">

    <div class="rowP">
          <div class="columnP">

              <img src="images/anciens/nabil.jpg" style="margin-left: 40%;"width="66" height="80" />
              <p class="titreEcole">EL MARZOUQUI Nabil - Professeur de NTIC (ENSA Marrakech)</p>
              <div style="padding-left: 5px;">Actuellement, je suis professeur d'informatique et des nouvelles technologies à l'ENSA de Marrakech et aussi à l'Université de sciences de Marrakech. Ex chercheur au Laboratoire d'Informatique de l'Université de Franche-Comté (LIFC) en France j'étais également enseignant à la même Université et dans d'autres écoles d'ingénieurs comme l'ISIFC .
Ayant été le responsable des relations étrangères de mon laboratoire avec le Maroc, j'ai constamment gardé le contact avec l'ESISA.
L'ESISA a été pour moi plus qu'une école...une famille. La qualité de la formation qui y est dispensée est incontestable et est sans aucun doute, la raison de ma réussite aujourd'hui. </div>

          </div>
          <div class="columnP columnP2">

              <img src="images/anciens/safia.jpg" style="margin-left: 40%;"width="66" height="80" />
              <p class="titreEcole">EL MOUDNI Safia - Ingénieur d'Etude chez Capgemini Telecom Media & Defense à Paris</p>
              <div style="padding-left: 5px;">L'ESISA est pour moi le meilleur choix que j'ai fait car elle m'a donné l'opportunité de vivre deux expériences : Effectuer un stage à LIFC à Besançon, où j'ai intégré une équipe d'enseignants chercheurs qui m'ont proposé par la suite de passer une thèse au sein du laboratoire. Et puisque j'avais des orientations plutôt professionnelles, et grâce à l'école ESISA, j'ai pu intégrer en 4ème année l'école Polytech'Marseille - GII (Génie Industriel et Informatique) où j'ai préparé le diplôme d'ingénieur d'état. Aujourd'hui, je suis en CDI chez Capgemini Telecom Média Défense à Paris en qualité d'Ingénieur d'études.
              </div>

          </div>
    </div>

    <div class="rowP">
          <div class="columnP">

              <img src="images/anciens/amine.jpg" style="margin-left: 40%;"width="66" height="80" />
              <p class="titreEcole">ZAROUK Amine - Directeur Général G-FIT Maroc</p>
              <div style="padding-left: 5px;">Après avoir obtenu mon diplôme de l'ESISA, j'ai pu bénéficier d'une équivalence systématique pour continuer des études à l'université Paris12 et suivre ensuite une formation d'Ingénieur d'affaires grands comptes à la CCIP. Aujourd'hui, grâce à ce cursus polyvalent et riche en rencontres, je me retrouve à la tête de G-FIT Maroc, la première SSII française qui s'installe dans la région. Je ne regrette aucune des décisions que j'ai prises au cours de mon cursus académique, encore moins celle d'avoir choisi l'ESISA.  </div>

          </div>
          <div class="columnP columnP2">

              <img src="images/anciens/karim.jpg" style="margin-left: 40%;"width="66" height="80" />
              <p class="titreEcole">BERRADA Karim - Directeur Général du Groupe Shore</p>
              <div style="padding-left: 5px;">Lauréat de la troisième promotion, je retiendrais toujours l'ESISA comme école de qualité, de partage et de progrès. En suivant un cursus long de quatre années, c'est l'école de la vie qui nous est enseigné; Un directeur de renom, une équipe pédagogique de force et une infrastructure de très haut niveau qui nous ont permis aujourd'hui de gravir les plus hauts échelons dans le monde professionnel et dans les meilleurs conditions possible. L'ESISA pour moi est une source d'inspiration et surtout une des clés de ma réussite.
              </div>

          </div>
    </div>


    <div class="rowP">
          <div class="columnP">

              <img src="images/anciens/reda.jpg" style="margin-left: 40%;"width="66" height="80" />
              <p class="titreEcole">Reda BOUCHALKHA - Consultant Fonctionnel ERP au sein du groupe Capgemini à Paris.</p>
              <div style="padding-left: 5px;">Lauréat de ESISA en 2007, j'ai eu la chance d'intégrer l'école Polytech Marseille, une des écoles d'ingénieurs de renommé en France.
Les enseignements techniques et théoriques disposés au sein de ESISA, par un corps professoral de qualité, ainsi que l'accompagnement rigoureux assuré par son corps pédagogique, m'ont permis de réussir mon parcours d'ingénieur et d'arriver a chaque fois parmi les premiers de ma promotion.
Aujourd'hui j'occupe le poste de Consultant Fonctionnel ERP au sein du groupe Capgemini, à Paris et j'interviens chez de grands comptes du CAC40.   </div>

          </div>
          <div class="columnP columnP2">

              <img src="images/anciens/driss.jpg" style="margin-left: 40%;"width="66" height="80" />
              <p class="titreEcole">BELKHAYAT ZOUGGARI Idriss - Ingénieur Expert Technique chez SQLI France</p>
              <div style="padding-left: 5px;">Actuellement Ingénieur expert technique chez SQLI, le leader français des sociétés de services spécialisées dans les N.T.I.C, je suis responsable d'une équipe de 5 personnes dans un projet de plusieurs milliers de jour/homme, pour le compte d'une grande multinationale suisse.
ESISA m'a donné le savoir, la motivation et la confiance pour me lancer dans une belle aventure qui est l'informatique, et pouvoir réussir mes missions au sein de l'entreprise.
              </div>

          </div>
    </div>

    <div class="rowP">

          <div class="columnP">

              <img src="images/anciens/benkhaled.jpg" style="margin-left: 40%;"width="66" height="80" />
              <p class="titreEcole">BENKHALED Mohamed - Ingénieur d'Etude chez Capgemini Telecom Media & Defense à Paris</p>
              <div style="padding-left: 5px;">J'ai intégré l'ESISA en 2002 pour mon intérêt à l'informatique et aux sciences de l'ingénieur ainsi que pour la réputation qu'elle a pu acquérir 4 ans après sa création. Choisir cette école était pour moi un choix stratégique, à court terme : avoir un BAC + 4 en informatique et intégrer le marché de travail, et à moyen/long terme : poursuivre mes études en France pour un Master, diplôme d'ingénieur ou un doctorat.
Aujourd'hui je ne regrette pas mes choix, pour la simple raison c'est que je pourrai intervenir dans n'importe quel domaine (Qualité, Industrie, Automobile, électronique, énergie, Ingénierie Informatique, Nouvelles technologies…) selon le besoin sur le marché, à l'aide de mon profil assez polyvalent.
              </div>

          </div>
          <div class="columnP columnP2">

              <img src="images/anciens/mamoun.jpg" style="margin-left: 40%;"width="66" height="80" />
              <p class="titreEcole">SQUALLI Mamoun - Doctorant au Laboratoire des Sciences de l'Information et des Systèmes Marseille</p>
              <div style="padding-left: 5px;"> Après un bac en 2001, j'ai intégré l'ESISA pour une formation de quatre ans. Ces quatre années m'ont permis d'acquérir de bonnes connaissances en systèmes d'information et de calcul. Ma volonté de poursuivre des études à un niveau supérieur m'a poussé à demander une inscription en France pour préparer un M2 "Recherche informatique" de Marseille à l'université PAUL CEZANNE, spécialité Info Système (Modélisation et Simulation).
Après le master, j'ai intégré le laboratoire LSIS de Marseille pour préparer mon diplôme de doctorat en informatique, où je suis actuellement en 2ème année de thèse, ce qui me permet d'approfondir mes connaissances et bénéficier des opportunités offertes afin acquérir le maximum d'expériences.
              </div>

          </div>
    </div>

    <div class="rowP">

          <div class="columnP">

              <img src="images/anciens/ghita.jpg" style="margin-left: 40%;"width="66" height="80" />
              <p class="titreEcole">YAHYAOUI Ghita - Chargée d'Etudes à BNP Personal Finance à Paris</p>
              <div style="padding-left: 5px;">La richesse et la diversité de ses enseignements sont deux atouts majeurs qui font de l'ESISA une porte d'ouverture à la fois sur le monde professionnel et sur le monde de la recherche. En effet, son programme solide et diversifié permet à ses étudiants d'avoir des compétences pluridisciplinaires, en adéquation avec le monde du travail, et en même temps d'avoir des bases pour se lancer dans le monde de la recherche. ESISA est pour moi une famille avant d'être une école. J'ai beaucoup apprécié mes quatre années passés dans cette école pour son corps enseignant, son corps administratif et ses partenariats.
              </div>

          </div>
          <div class="columnP columnP2">

              <img src="images/anciens/naoufal.jpg" style="margin-left: 40%;"width="66" height="80" />
              <p class="titreEcole">FAHEM Naoufal - Consultant IT au sein de GDF Suez Trading</p>
              <div style="padding-left: 5px;"> Choisir l'ESISA, c'est intégrer une Ecole d'Ingénieurs atypique où l'on vous apprend, dès vos premiers cours, à vous prendre en charge, à vous affirmer, et surtout à remettre perpétuellement en question vos acquis en vue de créer et concevoir les nouveaux systèmes d'informations du XXIe siècle.
Aujourd'hui j'occupe le poste d'ingénieur consultant au sein du Gaselys.Tous les jours, je mets à profit ce que j'ai appris à l'ESISA : les travaux de groupe, les études de cas réels,la curiosité, la prise d'initiative et la force de proposition.
              </div>

          </div>
    </div>

    <div class="rowP">

          <div class="columnP">

              <img src="images/anciens/ghita.jpg" style="margin-left: 40%;"width="66" height="80" />
              <p class="titreEcole">BENKHAYAT Youness - Ingénieur Consultant au sein de SQLI France</p>
              <div style="padding-left: 5px;">La formation assurée par l'ESISA est assez impressionnante. Tout en fournissant les bases théoriques nécessaires, elle privilégie l'aspect technique. Ainsi, elle offre un programme qui combine entre le savoir-faire théorique nécessaire pour comprendre les concepts fondamentaux de l'informatique, et la mise en application de ces concepts par le biais de projets professionnels.
Au niveau personnel, mes années d'études à l'ESISA resteront parmi les plus belles de ma vie. C'est une expérience humaine, sans précédente pour moi. C'était plus qu'une école, c'était une vraie famille !
              </div>

          </div>
          <div class="columnP columnP2">

              <img src="images/anciens/ibrahim.jpg" style="margin-left: 40%;"width="66" height="80" />
              <p class="titreEcole">NIANGADO Ibrahim- Ingénieur Consultant chez VAVIS, France</p>
              <div style="padding-left: 5px;"> Lauréat de la 4ème promo, je suis l'actualité de l'ESISA à travers notamment son site internet avec une émotion particulière. C'est avec un réel plaisir que je témoigne ma pleine gratitude. Gratitude au regard de la qualité de l'enseignement ESISA et de son engagement pour la réussite de ses élèves-ingénieurs.
Grâce à cette Ecole qui m'a offert tant d'opportunités, aujourd'hui j'occupe le poste d'ingénieur consultant au sein de VAVIS. Nous devons tous à son président et à son staff nos réussites actuelles
              </div>

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


﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-Frame-Options" content="deny" />
    <title>Ecole Supérieure d'Ingénierie En Sciences Appliquées</title>
    <link href="{{asset('css/Style.css')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('css/Menu.css')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('css/Slideshow.css')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('css/SideBar.css')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('bootstrap/css/bootstrap-grid.min.css')}}" type="text/css" rel="stylesheet"/>
    <script src="{{asset('js/scripts/jquery-1.9.0.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/scripts/Scripts.js')}}" type="text/javascript"></script>
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



      <div class="anciens">
          <div class="ancienTitre">
                LA VOIX DES ANCIENS
          </div>

          <div class="ancienSlideShow-container">

              <div class="anciensSlide fade">
                  <div class="cadre">
                      <img src="images/anciens/nabil.jpg" style="margin-left: 30%;" width="66" height="57"/>
                        <div class="caption">
                          <h3>EL MARZOUQUI Nabil - Professeur de NTIC (ENSA Marrakech)</h3>
                          <p align="justify">
                            Actuellement, je suis professeur d'informatique et des nouvelles technologies à l'ENSA de Marrakech et aussi à l'Université de sciences de Marrakech. Ex chercheur au Laboratoire d'Informatique de l'Université de Franche-Comté (LIFC) en France<a href="Anciens">...Lire la suite</a>
                          </p>

                        </div>
                  </div>
              </div>

              <div class="anciensSlide fade">
                  <div class="cadre">
                      <img src="images/anciens/safia.jpg" style="margin-left: 30%;" width="66" height="57"/>

                        <div class="caption">
                          <h3>EL MOUDNI Safia - Ingénieur d'Etude chez Capgemini Telecom Media & Defense à Paris</h3>
                          <p align="justify">
                              L'ESISA est pour moi le meilleur choix que j'ai fait car elle m'a donné l'opportunité de vivre deux expériences : Effectuer un stage à LIFC à Besançon, où j'ai intégré une équipe d'enseignants chercheurs.<br/>
                        Effectuer un stage à LIFC  à Besançon<a href="Anciens">...Lire la suite</a>
                          </p>

                        </div>
                  </div>
              </div>

              <div class="anciensSlide fade">
                  <div class="cadre">
                      <img src="images/anciens/amine.jpg" style="margin-left: 30%;" width="66" height="57"/>

                        <div class="caption">
                          <h3>ZAROUK Amine - Directeur Général G-FIT Maroc</h3>
                          <p align="justify">
                              Après avoir obtenu mon diplôme de l'ESISA, j'ai pu bénéficier d'une équivalence systématique pour continuer des études à l'université Paris12 et suivre ensuite une formation d'Ingénieur d'affaires grands comptes à la CCIP. Aujourd'hui, grâce à ce cursus polyvalent et riche en rencontres, je me retrouve à la tête de G-FIT Maroc<a href="Anciens">... Lire la suite</a>
                          </p>

                        </div>
                  </div>
              </div>

              <div class="anciensSlide fade">
                  <div class="cadre">
                      <img src="images/anciens/karim.jpg" style="margin-left: 30%;" width="66" height="57"/>

                        <div class="caption">
                          <h3>BERRADA Karim - Directeur Général du Groupe Shore</h3>
                          <p align="justify">
                              Lauréat de la troisième promotion, je retiendrais toujours l'ESISA comme école de qualité, de partage et de progrès. En suivant un cursus long de quatre années, c'est l'école de la vie qui nous est enseigné; Un directeur de renom, une équipe pédagogique de force et une infrastructure de très haut niveau qui nous ont permis aujourd'hui<a href="Anciens">... Lire la suite</a>
                          </p>

                        </div>
                  </div>
              </div>

              <div class="anciensSlide fade">
                  <div class="cadre">
                      <img src="images/anciens/Bouchalkha.jpg" style="margin-left: 30%;" width="66" height="57"/>

                        <div class="caption">
                          <h3>Reda BOUCHALKHA - Consultant Fonctionnel ERP au sein du groupe Capgemini à Paris.</h3>
                          <p align="justify">
                              Lauréat de ESISA en 2007, j'ai eu la chance d'intégrer l'école Polytech Marseille, une des écoles d'ingénieurs de renommé en France.<br/>
                      Les enseignements techniques et théoriques disposés au sein de ESISA, par un corps professoral de qualité, ainsi que <a href="Anciens">... Lire la suite</a>
                          </p>

                        </div>
                  </div>
              </div>

              <div class="anciensSlide fade">
                  <div class="cadre">
                      <img src="images/anciens/driss.jpg" style="margin-left: 30%;" width="66" height="57"/>

                        <div class="caption">
                          <h3>BELKHAYAT ZOUGGARI Idriss - Ingénieur Expert Technique chez SQLI France</h3>
                          <p align="justify">
                              Actuellement Ingénieur expert technique chez SQLI, le leader français des sociétés de services spécialisées dans les N.T.I.C, je suis responsable d'une équipe de 5 personnes dans un projet de plusieurs milliers de jour/homme, pour le compte d'une grande multinationale suisse.
                       <a href="Anciens">... Lire la suite</a>
                          </p>

                        </div>
                  </div>
              </div>

              <div class="anciensSlide fade">
                  <div class="cadre">
                      <img src="images/anciens/benkhaled.jpg" style="margin-left: 30%;" width="66" height="57"/>

                        <div class="caption">
                          <h3>BENKHALED Mohamed - Ingénieur d'Etude chez Capgemini Telecom Media & Defense à Paris</h3>
                          <p align="justify">
                              J'ai intégré l'ESISA en 2002 pour mon intérêt à l'informatique et aux sciences de l'ingénieur ainsi que pour la réputation qu'elle a pu acquérir 4 ans après sa création. Choisir cette école était pour moi un choix stratégique, à court terme : avoir un BAC + 4  <a href="Anciens">... Lire la suite</a>
                          </p>

                        </div>
                  </div>
              </div>

              <div class="anciensSlide fade">
                  <div class="cadre">
                      <img src="images/anciens/mamoun.jpg" style="margin-left: 30%;" width="66" height="57"/>

                        <div class="caption">
                          <h3>SQUALLI Mamoun - Doctorant au Laboratoire des Sciences de l'Information et des Systèmes Marseille</h3>
                          <p align="justify">
                              Après un bac en 2001, j'ai intégré l'ESISA pour une formation de quatre ans. Ces quatre années m'ont permis d'acquérir de bonnes connaissances en systèmes d'information et de calcul. Ma volonté de poursuivre des études à un niveau supérieur m'a poussé à demander   <a href="Anciens">... Lire la suite</a>
                          </p>

                        </div>
                  </div>
              </div>

              <div class="anciensSlide fade">
                  <div class="cadre">
                      <img src="images/anciens/ghita.jpg" style="margin-left: 30%;" width="66" height="57"/>

                        <div class="caption">
                          <h3>YAHYAOUI Ghita - Chargée d'Etudes à BNP Personal Finance à Paris</h3>
                          <p align="justify">
                              La richesse et la diversité de ses enseignements sont deux atouts majeurs qui font de l'ESISA une porte d'ouverture à la fois sur le monde professionnel et sur le monde de la recherche. En effet, son programme solide et diversifié permet à ses étudiants d'avoir des compétences pluridisciplinaires<a href="Anciens">... Lire la suite</a>
                          </p>

                        </div>
                  </div>
              </div>

              <div class="anciensSlide fade">
                  <div class="cadre">
                      <img src="images/anciens/naoufal.jpg" style="margin-left: 30%;" width="66" height="57"/>

                        <div class="caption">
                          <h3>FAHEM Naoufal - Consultant IT au sein de GDF Suez Trading</h3>
                          <p align="justify">
                              Choisir l'ESISA, c'est intégrer une Ecole d'Ingénieurs atypique où l'on vous apprend, dès vos premiers cours, à vous prendre en charge, à vous affirmer, et surtout à remettre perpétuellement en question vos acquis en vue de créer et concevoir les nouveaux systèmes d'informations du XXIe siècle. <a href="Anciens">... Lire la suite</a>
                          </p>

                        </div>
                  </div>
              </div>

              <div class="anciensSlide fade">
                  <div class="cadre">
                      <img src="images/anciens/younes.jpg" style="margin-left: 30%;" width="66" height="57"/>

                        <div class="caption">
                          <h3>BENKHAYAT Youness - Ingénieur Consultant au sein de SQLI France</h3>
                          <p align="justify">
                              La formation assurée par l'ESISA est assez impressionnante. Tout en fournissant les bases théoriques nécessaires, elle privilégie l'aspect technique. Ainsi, elle offre un programme qui combine entre le savoir-faire théorique nécessaire, elle privilégie l'aspect technique. <a href="Anciens">... Lire la suite</a>
                          </p>

                        </div>
                  </div>
              </div>

              <div class="anciensSlide fade">
                  <div class="cadre">
                      <img src="images/anciens/ibrahim.jpg" style="margin-left: 30%;" width="66" height="57"/>

                        <div class="caption">
                          <h3>NIANGADO Ibrahim- Ingénieur Consultant chez VAVIS, France</h3>
                          <p align="justify">
                              Lauréat de la 4ème promo, je suis l'actualité de l'ESISA à travers notamment son site internet avec une émotion particulière. C'est avec un réel plaisir que je témoigne ma pleine gratitude. Gratitude au regard de la qualité de l'enseignement ESISA et de son engagement pour la réussite de ses élèves-ingénieurs.<a href="Anciens">... Lire la suite</a>
                          </p>

                        </div>
                  </div>
              </div>

          </div>

          <div>
          </div>

      </div>


    </div>



        <div class="column2 " style="padding-left:2%;font-size:2vw">
            <!--<p style="color:#1962e5;font-size:1.3vw;margin-top:0.5%;">ESISA NEWS :</p> -->

            <div class="mySlideshow-container">

                <div class="mySlides fade">
                    <a href="http://www.digitaluses-congress.univ-paris8.fr/#&panel1-1">  <img src="{{asset('images/slides/confv2.jpg')}}" alt="" style="width: 100%;"></a>
                </div>

                <div class="mySlides fade">
                    <img src="{{asset('images/slides/ps.jpg')}}" alt="" style="width: 100%;">
                </div>

                <div class="mySlides fade">
                    <img src="{{asset('images/slides/AI.jpg')}}" alt="" style="width: 100%;">
                </div>

                <div class="mySlides fade">
                    <a href="Galerie"><img src="{{asset('images/slides/par.jpg')}}" alt="" style="width: 100%;"></a>
                </div>

                <div class="mySlides fade">
                    <a href="{{asset('pdf/IIDAF.pdf')}}"><img src="{{asset('images/slides/NFiliere.jpg')}}" alt="" style="width: 100%;"></a>
                </div>

                <div class="mySlides fade">
                    <a href="{{asset('pdf/IAGF.pdf')}}"><img src="{{asset('images/slides/IAGF.jpg')}}" alt="" style="width: 100%;"></a>
                </div>

                <div class="mySlides fade">
                    <a href="Lartiste-Event"><img src="{{asset('images/slides/3.jpg')}}" alt="" style="width: 100%;"></a>
                </div>

                <div class="mySlides fade">
                    <a href="Douzi-Event"><img src="{{asset('images/slides/douzi2.jpg')}}" alt="" style="width: 100%;"></a>
                </div>

                <div class="mySlides fade">
                    <a href="Parcours-Procedures"><img src="{{asset('images/slides/filieres.jpg')}}" alt="" style="width: 100%;"></a>
                </div>

                <div class="mySlides fade">
                    <img src="{{asset('images/slides/inscriptions.jpg')}}" alt="" style="width: 100%;"></a>
                </div>

                <div class="mySlides fade">
                    <a href="#"><img src="{{asset('images/slides/choisir_esisa2.jpg')}}" alt="" style="width: 100%;"></a><!-- TODO : choisir ESISA-->
                </div>

                <div class="mySlides fade">
                    <img src="{{asset('images/slides/soutenance3.jpg')}}" alt="" style="width: 100%;"></a>
                </div>

                <div class="mySlides fade">
                    <img src="{{asset('images/slides/Prisima.jpg')}}" alt="" style="width: 100%;"></a>
                </div>

                <a class="myPrev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="myNext" onclick="plusSlides(1)">&#10095;</a>

            </div>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
                <span class="dot" onclick="currentSlide(9)"></span>
                <span class="dot" onclick="currentSlide(10)"></span>
                <span class="dot" onclick="currentSlide(11)"></span>
                <span class="dot" onclick="currentSlide(12)"></span>
                <span class="dot" onclick="currentSlide(13)"></span>
            </div>

            <div style="padding-top:2%; width:100%;">
                <p style="color:#1962e5;font-size:1.3vw;margin-top:1%;">ACTUALITÉS ET EVENEMENTS:</p>
                <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" BEHAVIOR="ALTERNATE" height="500px;">
                    <div style="background-color:gainsboro;font-size:0.9vw;">
                        <a style="font-size:1.3vw; color:#4e95ac">Etudiants admis à l'École d'Ingénieurs du Littorale Côte d’Opale (Calais)(Rentrée 2018-2019)</a>
                        <br />
                        <img src="{{asset('images/images/eil.png')}}" style="padding-left:0.2%;padding-bottom:0.2%;" />
                        <b style="font-size:0.9vw">Mouttakil Othmane</b> - Informatique
                        <br />
                        <b style="font-size:0.9vw;">BENKABBOU Oussama</b>- Informatique
                        <br />
                        <b style="font-size:0.9vw;">TIJANI Khalil</b>- Informatique
                    </div>
                    <div style="background-color:gainsboro;margin-top:1.3%; font-size:0.9vw;">
                        <a style="font-size:1.3vw; color:#4e95ac">Etudiants admis à l'ENSIIE (Rentrée 2018-2019)</a>
                        <br />
                        <img src="{{asset('images/images/ensiie.jpg')}}" style="padding-left:0.2%;padding-bottom:0.2%;" />
                        <b>BERRADA Mohamed</b> - Paris-Evry
                        <br />
                        <b>HAMOUD Mohamed Sneiba</b> - Paris-Evry
                        <br />
                        <b>KHCHAF Yassir</b> - Paris-Evry
                    </div>
                    <div style="background-color:gainsboro;margin-top:1.3%;font-size:0.9vw;">
                        <a style="font-size:1.3vw; color:#4e95ac">Etudiants admis à l'UNIVERSITÉ DE BOURGOGNE (Rentrée 2017-2018)</a>
                        <br />
                        <img src="{{asset('images/images/ubourgogne_logo.jpg')}}" style="padding-left:0.2%;padding-bottom:0.2%;" />
                        <b>ECHEHAB Mohamed Salim</b> - Bases de Données et Intelligence Artificielle
                        <br />
                        <b>BENAYAD Tawfik</b>- Bases de Données et Intelligence Artificielle
                    </div>
                    <div style="background-color:gainsboro;margin-top:1.3%;font-size:0.9vw;">
                        <a style="font-size:1.3vw; color:#4e95ac">Etudiants admis à l'Université blaise pascal (Clermont-Ferrand) (Rentrée 2018-2019)</a>
                        <br />
                        <img src="{{asset('images/images/cla2.jpg')}}" style="padding-left:0.2%;padding-bottom:0.2%;" />
                        <b>BENSAKA Mouad</b> - Génie Logiciel et Intelligence Artificielle
                        <br />
                        <b>CHEKKOURI Mohamed</b> - Génie Logiciel et Intelligence Artificielle
                        <br />
                        <b>EL GUENNOUNI</b> - Systèmes d’Information et Aide à la Décision
                        <br />
                        <b>EL YAMANI Mounia</b> - Systèmes d’Information et Aide à la Décision
                        <br />
                        <b>NALI Meryem</b> - Stratégies Internet et Pilotage de Projets en Entreprise
                    </div>
                    <div style="background-color:gainsboro;margin-top:1.3%;font-size:0.9vw;">
                        <a style="font-size:1.3vw; color:#4e95ac">Etudiants admis à l'Université de Lorraine (Rentrée 2018-2019)</a>
                        <br />
                        <img src="{{asset('images/images/logo-universite-de-lorraine.png')}}" style="padding-left:0.2%;padding-bottom:0.2%;" />
                        <b>BERDAI Khadija</b> - Interaction Humain-Machine
                        <br />
                        <b>BOUKAA Selma</b> - Systèmes d'Information Décisionnels
                        <br />
                        <b>EL HADRACHI Hicham</b> - Ingénierie Logicielle
                        <br />
                        <b>EL MANSOURI Hatim</b> - Systèmes d'Information Décisionnels
                        <br />
                        <b>HAYANI Salma</b> - Systèmes d'Information Décisionnels
                        <br />
                        <b>LAHJOUJI Yahya</b> - Systèmes d'Information Décisionnels
                        <br />
                        <b>LEMTIRI CHLIEH Allae Ddine</b> - Ingénierie Logicielle
                    </div>
                    <div style="background-color:gainsboro;margin-top:1.3%;font-size:0.9vw;">
                        <a style="font-size:1.3vw; color:#4e95ac">Etudiants admis à LSIS (Rentrée 2018-2019)</a>
                        <br />
                        <img src="{{asset('images/images/lsis.jpg')}}" style="padding-left:0.2%;padding-bottom:0.2%;" />
                        <b>BOUABDALLAH Fadila</b> - Génie Logiciel
                        <br />
                        <b>CHARAI Maryam</b> - Génie Logiciel
                        <br />
                        <b> EL MANSOURI Hatim</b> - Génie Logiciel
                    </div>
                    <div style="background-color:gainsboro;margin-top:1.3%;font-size:0.9vw;">
                        <a style="font-size:1.3vw; color:#4e95ac">Etudiants admis à l'Ecole Polytechnique Universitaire de Marseille (Rentrée 2018-2019)</a>
                        <br />
                        <img src="{{asset('images/images/PM.png')}}" style="padding-left:0.2%;padding-bottom:0.2%;" />
                        <b>BAIDADA Mohammed</b> - Informatique
                        <br />
                        <b>EL MAJDOUBI Soukaina</b> - Informatique
                        <br />
                        <b>HARCHLI Chaymae</b> - GII
                        <br />
                        <b>JAAOUANE Yasmina</b> - GII
                        <br />
                        <b>LAZRAK Maha</b> - GII
                        <br />
                        <b>TAGMOUTI Zineb</b> - GII
                    </div>
                    <div style="background-color:gainsboro;margin-top:1.3%;padding-bottom:0.2%; font-size:0.9vw;">
                        <a style="font-size:1.3vw; color:#4e95ac">Etudiants admis à l'Université Paris Est Marne-La-Valée (Rentrée 2018-2019)</a>
                        <br />
                        <img src="{{asset('images/images/UPem.png')}}" style="padding-left:0.2%;padding-bottom:0.2%;" />
                        <b>AMHAOUCH Rida</b> - Génie Logiciel
                        <br />
                        <b>DIALLO Rokiatou</b> - Génie Logiciel
                        <br />
                        <b>IKMEL Jihane</b> - Génie Logiciel
                        <br />
                        <b>KATTAA Issam</b> - Génie Logiciel
                        <br />
                        <b>NASSIM Youssef</b> - Génie Logiciel
                        <br />
                        <b>GHOMARI Sara</b> - Génie Logiciel
                        <br />
                        <b>SERSOURI Soukaina</b> - Génie Logiciel
                        <br />
                        <b>BOUZOUBAA Ismail</b> - Internet des Objets
                    </div>
                    <div style="background-color:gainsboro;margin-top:1.3%;padding-bottom:0.2%; font-size:0.9vw;">
                        <a style="font-size:1.3vw;">Etudiants admis à l'Université de Paris 8 (Rentrée 2017-2018)</a>
                        <br />
                        <img src="{{asset('images/images/P8.png')}}" style="padding-left:0.2%;padding-bottom:0.2%;" />
                        <b>BERRADA Yassine</b> - Hypermédia
                        <b>HAMDANI Saad</b> - Hypermédia
                        <b>EL MOUNJIDE Hamza</b> - Hypermédia
                        <b>HAMID ALLAH Yassine</b> - Hypermédia
                        <b>MANESSOUB Soukaina</b> - Hypermédia
                    </div>
                </marquee>
            </div>
            <style>
              .videoTitle {
                  color:#1962e5;font-size:1.1vw;margin-top:3%;
                  border-bottom: #055293 solid 2px;
              }
            </style>
            <div class="container">
            <div class="row">
                <div class="col-6"><span class="videoTitle">CJD BUSINESS AWARDS MAROC - Amine Zarouk</span></div>
                <div class="col-6"><span class="videoTitle">VIE ESTUDIANTINES</span></div>
            </div>

            <div class="row">
                <div class="col-6">
                  <video width="100%" height="auto" controls>
                     <source src="{{asset('videos/ZAROUK_AMINE.mp4')}}" type="video/mp4">

                    Your browser does not support the video tag.
                  </video>
                </div>
                <div class="col-6">
                  <?php
                      $videos = array('videos/FI2017-2018.mp4', 'videos/ESISA_Gala_Douzi_Video_Officiel.mp4', 'videos/LARTISTE_ESISA_FETE_2017.mp4');
                      $video_a_afficher = $videos[rand(0,sizeof($videos) - 1)];
                   ?>

                   <script>
                        alert(<?php echo $video_a_afficher;?>);
                   </script>

                  <video width="100%" height="auto" controls>
                     <source src=<?php echo $video_a_afficher ?> type="video/mp4">

                    Your browser does not support the video tag.
                  </video>
                </div>
            </div>
          </div>
            <!-- <div>
                <p style="color:#1962e5;font-size:1.3vw;margin-top:3%;">
                    <span style="border-bottom: #055293 solid 2px;">CJD BUSINESS AWARDS MAROC - Amine Zarouk</span>
                    <span style="border-bottom: #055293 solid 2px;margin-left: 10%;">VIE ESTUDIANTINES</span>
                </p>
                <span >
                  <video width="320" height="240" controls>
                     <source src="{{asset('videos/ZAROUK_AMINE.mp4')}}" type="video/mp4">

                    Your browser does not support the video tag.
                  </video>
                </span>
                <span style="margin-right:10%">
                  <video width="320" height="240" controls>
                     <source src="{{asset('videos/FI2017-2018.mp4')}}" type="video/mp4">

                    Your browser does not support the video tag.
                  </video>
                </span>
            </div>-->

            <div style="margin-top:2%">
                <marquee behavior="alternate" direction="left" onmouseover="this.stop();" onmouseout="this.start();" BEHAVIOR="ALTERNATE">
                    <img src="{{asset('images/images/blaise-pascal-petit.jpg')}}" style="max-width:240px; height:auto" />
                    <img src="{{asset('images/images/Cergy-pontoise-petit.jpg')}}" style="max-width:240px; height:auto" />
                    <img src="{{asset('images/images/eil-petit.jpg')}}" style="max-width:240px; height:auto" />
                    <img src="{{asset('images/images/ensiie-petit.jpg')}}" style="max-width:240px; height:auto" />
                    <img src="{{asset('images/images/esiag-petit.jpg')}}" style="max-width:240px; height:auto" />
                    <img src="{{asset('images/images/genova-petit.jpg')}}" style="max-width:240px; height:auto" />
                    <img src="{{asset('images/images/isima-petit.jpg')}}" style="max-width:240px; height:auto" />
                    <img src="{{asset('images/images/lsis-petit.jpg')}}" style="max-width:240px; height:auto" />
                    <img src="{{asset('images/images/paris-13-petit.jpg')}}" style="max-width:240px; height:auto" />
                    <img src="{{asset('images/images/paris-8-petit.jpg')}}" style="max-width:240px; height:auto" />
                    <img src="{{asset('images/images/polytech-petit.jpg')}}" style="max-width:240px; height:auto" />
                </marquee>
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

    <script>
        var slideIndex = 0;
        showSlides();

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 5000); // Change image every 2 seconds
        }

        var anciensSlideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("anciensSlide");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            anciensSlideIndex++;
            if (anciensSlideIndex > x.length) {anciensSlideIndex = 1}
            x[anciensSlideIndex-1].style.display = "block";
            setTimeout(carousel, 5000); // Change image every 2 seconds
        }
    </script>

</body>
</html>

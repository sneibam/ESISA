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
        <div class="column2 " style="padding-left:2%">
          <div class="part">PARTENAIRES DE l'ESISA :</div>
          <div id="table">
              <div class="rowP">
                    <div class="columnP">
                        <a href="http://www.polytech.univ-amu.fr/">
                            <img src="{{asset('images/images/poly1.jpg')}}" width="100%;"  class="img"/>

                            <p class="titreEcole">Ecole Polytechnique Universitaire de Marseille</p>
                        </a>
                        <p class="pr">Elle a pour objectif de préparer en trois ans des ingénieurs dont la formation est ciblée vers une filière professionnelle de l'industrie et l’ingénierie informatique.
                        </p><p  class="pr">Les lauréats de l'ESISA peuvent intégrer l'Ecole Polytechnique en 2ème année
                        Spécialités :</p>


                      <ul class="ull">
                          <li>Génie Industriel et Informatique</li>
                          <li>Informatique Réseaux et Multimédia</li>
                      </ul>

                      <br />
                      <br />


                    </div>
                    <div class="columnP columnP2">
                        <a href="http://www.ensiie.fr/">
                          <img src="images/images/ensiie1.jpg"  width="100%" class="img" />
                          <p class="titreEcole">École Nationale Supérieure d’Informatique pour l’Industrie et l’entreprise</p></a>
                          <p  class="pr">Les lauréats de l'ESISA peuvent intégrer ENSIIE en 2ème année pour préparer un diplôme d'ingénieur d'état français. Spécialités :

                        </p>
                        <ul class="ull">
                          <li>Analyse du risque, optimisation et mathématique de la décision</li>
                          <li>Robotisation et réalité virtuelle</li>
                          <li>Ingénierie financière</li>
                          <li>Organisation de l’entreprise</li>
                          <li>Sécurité et réseau</li>
                          <li>Ingénierie logicielle</li>
                          <li>Ingénierie des systèmes d’information</li>
                          </ul>

                    </div>
              </div>
              <div class="rowP">
                    <div class="columnP">
                        <a href="http://www.isima.fr/">
                          <img src="images/images/isima.jpg"  width="100%" class="img"/>
                        <p class="titreEcole">Institut Supérieur d'Informatique, de Modélisation et de leurs Applications (ISIMA) Clermont-Ferrand</p></a>
                          <p  class="pr">Les lauréats de l'ESISA peuvent intégrer ISIMA de Clermont-Ferrand en 2ème année pour préparer un diplôme d'ingénieur d'état français.
                          Spécialités :	</p>


                          <ul class="ull">
                              <li>Informatique des Systèmes Embarqués.</li>
                              <li>Génie Logiciel et Systèmes Informatiques</li>
                              <li>Systèmes d'Information et Aide à la Décision.</li>
                              <li>Calcul et Modélisation Scientifiques.</li>
                              <li>Réseaux et Télécommunications.</li>
                          </ul>
                    </div>
                    <div class="columnP columnP2">
                        <a href="http://www.eilco-ulco.fr/">
                         <img src="images/images/eil.jpg" width="100%" class="img" />
                         <p class="titreEcole">École d'Ingénieurs du Littorale Côte d’Opale (Calais)</p></a>
                         <p  class="pr">Les lauréats de l'ESISA peuvent intégrer EIL en 2ème année pour préparer un diplôme d'ingénieur d'état français. Spécialités :</p>
                        <ul class="ull">
                            <li>Génie Industriel</li>
                        </ul>

                        <br /><br /><br /><br />
                    </div>
              </div>

              <div class="rowP">
                    <div class="columnP">
                        <a href="http://pegase.miage.univ-paris12.fr/international/L_ESIAG_s_exporte.html">
                        <img src="images/images/esiag.jpg"  width="100%" class="img"/>
                        <p class="titreEcole">InEcole Supérieure d'Informatique Appliquées à la Gestion</p></a>
                        <p  class="pr">L'Ecole Supérieure d'Informatique Appliquées à la Gestion (ISIAG) bénéficie d'une solide expérience au sein de l'Université VAL DE MARNE PARIS.</p>
                        <p  class="pr">L'ESIAG offre une formation d'excellence dans les domaines de la conception et de l'administration des Systèmes d'information.
                        Parmi les Objectifs de partenariat ESISA-ISIAG, permettre aux étudiants de 4ème années de l'ESISA d'accéder en 5ème année de l'ESIAG, pour un des deux masters:</p>

                        <ul class="ull">
                          <li>Ingénierie des Systèmes d'Information et d'Aide à la Décision (ISIAD)</li>
                          <li>Ingénierie des Systèmes d'Information Distribués (ISIDIS)</li>
                      </ul>

                    </div>
                    <div class="columnP columnP2">
                        <a href="http://www.lsis.org/index.php?processus=ok">
                        <img src="images/images/lsis1.jpg" width="100%" class="img" />
                        <p class="titreEcole">Laboratoire des Sciences de l'Information et des Systèmes (LSIS) - Marseille</p></a>
                        <p class="pr">Laboratoire des Sciences de l'Information et des Systèmes (LSIS) - Marseille</p>
                        <ul class="ull">
                          <li>Ingénierie des systèmes d'information</li>
                          <li>Génie Logiciel</li>
                          <li>Système, Commande et Diagnostic</li>
                        </ul>


                        <p  class="pr">Masters de Recherche :</p>
                        <ul class="ull">
                          <li>Conception de Produits et de Systèmes de Production.</li>
                          <li>Modélisation, Commande et Simulation</li>
                          <li>Imagerie Numérique</li>
                          <li>Systèmes d'Information et Connaissance</li>
                        </ul>

                    </div>
              </div>

              <div class="rowP">
                    <div class="columnP">
                        <a href="http://www.univ-bpclermont.fr/">
                        <img src="images/images/ubp.jpg" width="100%" class="img"/>
                        <p class="titreEcole">Université Blaise Pascal de Clermont-Ferrand</p></a>
                        <p  class="pr">Ce partenariat permettra aux étudiants de 4ème année de
                            l'ESISA d'accéder à l’un des masters professionnels publics de l'université Blaise Pascal de Clermont-Ferrand:</p>


                      <ul class="ull">
                          <li>Master SIPPE : Stratégie Internet et Pilotage de Projets d'Entreprises</li>
                          <li>Master IDL : Informatique Décisionnelle et Logicielle</li>
                      </ul>


                    </div>
                    <div class="columnP columnP2">
                        <a href="http://www.univ-paris8.fr/">
                        <img src="images/images/paris81.jpg" width="100%" class="img" />
                        <p class="titreEcole">Université de Paris 8</p></a>
                        <p  class="pr">Ce partenariat permettra aux étudiants de 4ème année de l'ESISA d'accéder à l’un des masters professionnels publics de l'université de Paris 8:    </p>
                        <ul class="ull">
                            <li>Master Technologies de l'hypermédia</li>
                            <li>Master Création et édition numériques</li>
                            <li>Master Gestion de l'information et du document</li>
                         </ul>
                    </div>
              </div>
              <div class="rowP">
                    <div class="columnP">
                        <a href="http://www.univ-lorraine.fr/">
                        <img src="images/images/lorraine.jpg" style="margin-left: 40%;"/>
                        <p class="titreEcole">Université de Lorraine</p></a>
                        <p  class="pr">Ce partenariat permettra aux étudiants de 4ème année de l'ESISA d'accéder à l’un des masters professionnels publics de l'université de Lorraine:</p>


                       <ul class="ull">
                           <li>Master Informatique Décisionnelle</li>
                           <li>Master Modélisation Logiciel</li>
                           <li>Master Sécurité des architectures web</li>
                           <li>Master Interaction Humain-Machine</li>
                           <li>Master Génie informatique</li>
                           <li>Sécurité des systèmes d’information</li>
                       </ul>
                    </div>
                    <div class="columnP columnP2">
                        <a href="http://www.u-bourgogne.fr/">
                        <img src="images/images/ub1.jpg" width="100%" class="img" />
                        <p class="titreEcole">Université de Bourgogne - Dijon</p></a>
                        <p class="pr">Ce partenariat permettra aux étudiants de 4ème année de l'ESISA d'accéder à l’un des masters professionnels publics de l'université de Bourgogne:</p>
                        <ul class="ull">
                          <li>Master Vision - Image et Intelligence artificielle - Multimédia</li>
                          <li>Master Base de données et Intelligence artificielle</li>
                          <li>Master Recherche Image-Informatique-Ingénierie</li>
                        </ul>

                    </div>
              </div>

              <div class="rowP">
                    <div class="columnP">
                        <a href="http://www.univ-paris13.fr/">
                        <img src="images/images/paris13.jpg" width="100%" class="img"/>
                        <p class="titreEcole">Université de Paris 13</p></a>
                        <p class="pr">Ce partenariat permettra aux étudiants de 4ème année de l'ESISA d'accéder d'accéder à l’un des masters professionnels publics de l'université de PARIS 13 :</p>

                        <ul class="ull">
                            <li>Exploration Informatique des Données et Décisionnel</li>
                            <li>Programmation et logiciels sûrs</li>
                        </ul>

                    </div>
                    <div class="columnP columnP2">
                        <a href="http://www.u-pem.fr/">
                        <img src="images/images/upem1.jpg" width="100%" class="img" />
                        <p class="titreEcole">Université Paris-Est Marne La Valée</p></a>
                        <p  class="pr">Ce partenariat permettra aux étudiants de 4ème année de l'ESISA d'accéder à l’un des masters professionnels publics de l'université PARIS-EST MARNE-LA-VALLEE :</p>
                        <ul class="ull">
                          <li>Informatique fondamentale</li>
                          <li>Sciences de l'image</li>
                          <li>Systèmes et services pour l'internet des objets</li>
                          <li>Logiciels</li>
                        </ul>
                    </div>
              </div>

              <div class="rowP">
                    <div class="columnP">
                        <a href="http://www.u-cergy.fr/fr/index.html">
                        <img src="images/images/cergy1.jpg" width="100%" class="img"/>
                        <p class="titreEcole">Université de Cergy Pontoise</p></a>
                        <p  class="pr">Ce partenariat permettra aux étudiants de 4ème année de l'ESISA d'accéder à l’un des masters professionnels publics de l'université de Cergy Pontoise:</p>


                        <ul class="ull">
                             <li>Master temps réel et Communicants.</li>
                             <li>Master Systèmes Intelligents et Distribués.</li>
                             <li>Réseaux et Sécurité.</li>
                         </ul>
                        <br /><br /><br /><br /><br />
                    </div>
                    <div class="columnP columnP2">
                        <a href="http://lifc.univ-fcomte.fr/lifc/presentation/">
                        <img src="images/images/lifc1.jpg" width="100%" class="img" />
                        <p class="titreEcole">Laboratoire d'informatique de l'université de Franche comté (LIFC)</p></a>
                        <p  class="pr">Le laboratoire d'informatique de l'université de Franche comté (LIFC) fournit une formation de haut niveau en Génie informatique spécialisé dans le domaine de la conception et du développement d'applications distribuées, clients serveur, multimédia et dans l'administration des systèmes et des réseaux.
    Masters:
                        </p>
                        <ul class="ull">
                              <li> Master Sécurité des logiciels</li>
                              <li>Master Systèmes distribués Répartis</li>
                              <li>Master Informatique Parallèle et Système Multimédia</li>
                        </ul>
                    </div>
              </div>

              <div class="rowP">
                    <div class="columnP">
                        <a href="http://www.diptem.unige.it/">
                        <img src="images/images/genova1.jpg" width="100%" class="img"/>
                        <p class="titreEcole">Università Degli Studi di Genova</p></a>
                        <ul class="ull">
                            <li>Un master professionnel et un master de Recherche</li>
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

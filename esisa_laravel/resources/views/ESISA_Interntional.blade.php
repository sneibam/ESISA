<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Ecole Supérieure d'Ingénierie En Sciences Appliquées</title>
    <link href="{{asset('css/Style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/Menu.css')}}" rel="stylesheet" />
    <link href="{{asset('css/Tabs.css')}}" rel="stylesheet" />
    <link href="css/Table2.css" rel="stylesheet" />
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
        <div class="column2" style="padding-left:0%;font-size:2vw;">
            <p style="color:#1962e5;font-size:1.3vw;margin-top:0.5%;">L'ESISA ET L'INTERNATIONAL :</p>
            <p align="justify">Partir à l'étranger, c'est découvrir un autre pays, une autre culture et une autre façon de vivre mais aussi :</p>
            <p align="justify">Enfin, demandez un peu autour de vous.. Tous ceux qui ont pu étudier à l'étranger vous en parleront d'une voix chevrotante, la larme à l'œil. </p>
            <p align="justify">L'ESISA encourage ses étudiants à effectuer des stages à l'étranger (USA, Canada, France) pour ceux ou celles qui en ont les moyens : </p>
            <p align="justify">En 3ème Année de l'ESISA, Stage de deux mois.</p>
            <p align="justify">En 4ème Année de l'ESISA, Stage de trois à cinq mois.</p>
            <p align="justify">L'ESISA a mis l'accent sur le renforcement des cours en anglais et en français pour bien préparer l'expatriation de ses étudiants, faciliter leur intégration et leur ouvrir les portes comme la possibilité de travailler à l'étranger (Pays anglophones et francophones). En outre, les entretiens de sélection pour les différents écoles et universités partenaires se passent en français et en anglais. Les étudiants de l'ESISA sont appelés à atteindre le niveau de TOEIC (Test of English for International Communication) en fin de 4ème année. </p>
            <p align="justify">Chaque année une grande partie des étudiants de la 4ème année continuent leurs études en France soit avec nos partenaires, soit dans d'autres universités étrangères.</p>
            <p style="color:#1962e5;font-size:1.3vw;margin-top:0.5%;">
                Flux de départs des étudiants de l'ESISA aux différents partenaires en France (2003-2017)
            </p>
            <div style="max-width:100%">

                <table id="customers">
                    <thead>
                        <tr>
                            <th style="background-color:#f8f8f8" scope="col"></th>
                            <th scope="col">2003</th>
                            <th scope="col">2004</th>
                            <th scope="col">2005</th>
                            <th scope="col">2006</th>
                            <th scope="col">2007</th>
                            <th scope="col">2008</th>
                            <th scope="col">2009</th>
                            <th scope="col">2010</th>
                            <th scope="col">2011</th>
                            <th scope="col">2012</th>
                            <th scope="col">2013</th>
                            <th scope="col">2014</th>
                            <th scope="col">2015</th>
                            <th scope="col">2016</th>
                            <th scope="col">2017</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="">Polytech marseille</td>
                            <td data-label="2003">-</td>
                            <td data-label="2004">-</td>
                            <td data-label="2005">5</td>
                            <td data-label="2006">7</td>
                            <td data-label="2007">7</td>
                            <td data-label="2008">5</td>
                            <td data-label="2009">7</td>
                            <td data-label="2010">7</td>
                            <td data-label="2011">5</td>
                            <td data-label="2012">4</td>
                            <td data-label="2013">7</td>
                            <td data-label="2014">6</td>
                            <td data-label="2015">6</td>
                            <td data-label="2016">9</td>
                            <td data-label="2017">6</td>
                        </tr>
                        <tr>
                            <td data-label="">EIL (Calais)</td>
                            <td data-label="2003">-</td>
                            <td data-label="2004">-</td>
                            <td data-label="2005">-</td>
                            <td data-label="2006">-</td>
                            <td data-label="2007">-</td>
                            <td data-label="2008">-</td>
                            <td data-label="2009">-</td>
                            <td data-label="2010">-</td>
                            <td data-label="2011">-</td>
                            <td data-label="2012">-</td>
                            <td data-label="2013">-</td>
                            <td data-label="2014">-</td>
                            <td data-label="2015">-</td>
                            <td data-label="2016">-</td>
                            <td data-label="2017">4</td>
                        </tr>
                        <tr>
                            <td data-label="">ISIMA Clermont-Ferrand </td>
                            <td data-label="2003">-</td>
                            <td data-label="2004">-</td>
                            <td data-label="2005">-</td>
                            <td data-label="2006">-</td>
                            <td data-label="2007">-</td>
                            <td data-label="2008">-</td>
                            <td data-label="2009">-</td>
                            <td data-label="2010">-</td>
                            <td data-label="2011">-</td>
                            <td data-label="2012">1</td>
                            <td data-label="2013">4</td>
                            <td data-label="2014">9</td>
                            <td data-label="2015">5</td>
                            <td data-label="2016">1</td>
                            <td data-label="2017">1</td>
                        </tr>
                        <tr>
                            <td data-label="">ENSIIE</td>
                            <td data-label="2003">-</td>
                            <td data-label="2004">-</td>
                            <td data-label="2005">-</td>
                            <td data-label="2006">-</td>
                            <td data-label="2007">-</td>
                            <td data-label="2008">-</td>
                            <td data-label="2009">-</td>
                            <td data-label="2010">-</td>
                            <td data-label="2011">-</td>
                            <td data-label="2012">-</td>
                            <td data-label="2013">-</td>
                            <td data-label="2014">-</td>
                            <td data-label="2015">5</td>
                            <td data-label="2016">5</td>
                            <td data-label="2017">4</td>
                        </tr>
                        <tr>
                            <td data-label="">LSIS marseille </td>
                            <td data-label="2003">-</td>
                            <td data-label="2004">-</td>
                            <td data-label="2005">4</td>
                            <td data-label="2006">6</td>
                            <td data-label="2007">8</td>
                            <td data-label="2008">11</td>
                            <td data-label="2009">13</td>
                            <td data-label="2010">13</td>
                            <td data-label="2011">21</td>
                            <td data-label="2012">13</td>
                            <td data-label="2013">11</td>
                            <td data-label="2014">11</td>
                            <td data-label="2015">6</td>
                            <td data-label="2016">2</td>
                            <td data-label="2017">4</td>
                        </tr>
                        <tr>
                            <td data-label="">LIFC Besancon </td>
                            <td data-label="2003">-</td>
                            <td data-label="2004">6</td>
                            <td data-label="2005">7</td>
                            <td data-label="2006">6</td>
                            <td data-label="2007">4</td>
                            <td data-label="2008">4</td>
                            <td data-label="2009">11</td>
                            <td data-label="2010">13</td>
                            <td data-label="2011">-</td>
                            <td data-label="2012">-</td>
                            <td data-label="2013">-</td>
                            <td data-label="2014">-</td>
                            <td data-label="2015">-</td>
                            <td data-label="2016">-</td>
                            <td data-label="2017">-</td>
                        </tr>
                        <tr>
                            <td data-label="">Esiag paris</td>
                            <td data-label="2003">9</td>
                            <td data-label="2004">12</td>
                            <td data-label="2005">10</td>
                            <td data-label="2006">15</td>
                            <td data-label="2007">16</td>
                            <td data-label="2008">17</td>
                            <td data-label="2009">15</td>
                            <td data-label="2010">15</td>
                            <td data-label="2011">21</td>
                            <td data-label="2012">9</td>
                            <td data-label="2013">6</td>
                            <td data-label="2014">14</td>
                            <td data-label="2015">10</td>
                            <td data-label="2016">-</td>
                            <td data-label="2017">-</td>
                        </tr>
                        <tr>
                            <td data-label="">Université de lorraine</td>
                            <td data-label="2003">-</td>
                            <td data-label="2004">-</td>
                            <td data-label="2005">-</td>
                            <td data-label="2006">-</td>
                            <td data-label="2007">-</td>
                            <td data-label="2008">-</td>
                            <td data-label="2009">-</td>
                            <td data-label="2010">4</td>
                            <td data-label="2011">5</td>
                            <td data-label="2012">8</td>
                            <td data-label="2013">9</td>
                            <td data-label="2014">7</td>
                            <td data-label="2015">7</td>
                            <td data-label="2016">6</td>
                            <td data-label="2017">6</td>
                        </tr>
                        <tr>
                            <td data-label="">Universite paris 8 </td>
                            <td data-label="2003">-</td>
                            <td data-label="2004">-</td>
                            <td data-label="2005">-</td>
                            <td data-label="2006">-</td>
                            <td data-label="2007">-</td>
                            <td data-label="2008">-</td>
                            <td data-label="2009">-</td>
                            <td data-label="2010">-</td>
                            <td data-label="2011">4</td>
                            <td data-label="2012">5</td>
                            <td data-label="2013">4</td>
                            <td data-label="2014">4</td>
                            <td data-label="2015">5</td>
                            <td data-label="2016">5</td>
                            <td data-label="2017">5</td>
                        </tr>
                        <tr>
                            <td data-label="">Universite de cergy pontoise </td>
                            <td data-label="2003">-</td>
                            <td data-label="2004">-</td>
                            <td data-label="2005">-</td>
                            <td data-label="2006">-</td>
                            <td data-label="2007">-</td>
                            <td data-label="2008">-</td>
                            <td data-label="2009">-</td>
                            <td data-label="2010">-</td>
                            <td data-label="2011">4</td>
                            <td data-label="2012">3</td>
                            <td data-label="2013">-</td>
                            <td data-label="2014">-</td>
                            <td data-label="2015">-</td>
                            <td data-label="2016">-</td>
                            <td data-label="2017">-</td>
                        </tr>
                        <tr>
                            <td data-label="">Universite de bourgogne</td>
                            <td data-label="2003">-</td>
                            <td data-label="2004">-</td>
                            <td data-label="2005">-</td>
                            <td data-label="2006">-</td>
                            <td data-label="2007">-</td>
                            <td data-label="2008">-</td>
                            <td data-label="2009">-</td>
                            <td data-label="2010">-</td>
                            <td data-label="2011">6</td>
                            <td data-label="2012">7</td>
                            <td data-label="2013">5</td>
                            <td data-label="2014">8</td>
                            <td data-label="2015">6</td>
                            <td data-label="2016">2</td>
                            <td data-label="2017">2</td>
                        </tr>
                        <tr>
                            <td data-label="">Universite de Clermont-Ferrand </td>
                            <td data-label="2003">-</td>
                            <td data-label="2004">-</td>
                            <td data-label="2005">-</td>
                            <td data-label="2006">-</td>
                            <td data-label="2007">-</td>
                            <td data-label="2008">-</td>
                            <td data-label="2009">-</td>
                            <td data-label="20010">-</td>
                            <td data-label="2011">-</td>
                            <td data-label="2012">6</td>
                            <td data-label="2013">4</td>
                            <td data-label="2014">5</td>
                            <td data-label="2015">6</td>
                            <td data-label="2016">3</td>
                            <td data-label="2017">6</td>
                        </tr>
                        <tr>
                            <td data-label="">L’Université de Paris-Est Marne La Valée</td>
                            <td data-label="2003">-</td>
                            <td data-label="2004">-</td>
                            <td data-label="2005">-</td>
                            <td data-label="2006">-</td>
                            <td data-label="2007">-</td>
                            <td data-label="2008">-</td>
                            <td data-label="2009">-</td>
                            <td data-label="2010">-</td>
                            <td data-label="2011">-</td>
                            <td data-label="2012">-</td>
                            <td data-label="2013">-</td>
                            <td data-label="2014">-</td>
                            <td data-label="2015">2</td>
                            <td data-label="2016">4</td>
                            <td data-label="2017">8</td>
                        </tr>
                        <tr>
                            <td data-label="">Université Paris 13 </td>
                            <td data-label="2003">-</td>
                            <td data-label="2004">-</td>
                            <td data-label="2005">-</td>
                            <td data-label="2006">-</td>
                            <td data-label="2007">-</td>
                            <td data-label="2008">-</td>
                            <td data-label="2009">-</td>
                            <td data-label="2010">-</td>
                            <td data-label="2011">-</td>
                            <td data-label="2012">-</td>
                            <td data-label="2013">-</td>
                            <td data-label="2014">-</td>
                            <td data-label="2015"></td>
                            <td data-label="2016">1</td>
                            <td data-label="2017">-</td>
                        </tr>
                        <tr>
                            <td data-label="">Autres</td>
                            <td data-label="2003">-</td>
                            <td data-label="2004">-</td>
                            <td data-label="2005">-</td>
                            <td data-label="2006">-</td>
                            <td data-label="2007">-</td>
                            <td data-label="2008">-</td>
                            <td data-label="2009">-</td>
                            <td data-label="2010">-</td>
                            <td data-label="2011">-</td>
                            <td data-label="2012">-</td>
                            <td data-label="2013">-</td>
                            <td data-label="2014">-</td>
                            <td data-label="2015">-</td>
                            <td data-label="2016">6</td>
                            <td data-label="2017">10</td>
                        </tr>
                    </tbody>
                </table>
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

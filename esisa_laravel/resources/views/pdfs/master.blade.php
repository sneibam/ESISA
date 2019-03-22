<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
</head>
<body style="width:100%; background-color:#ffffff">

    <style>
        .main {
          margin-left: 10px;
        }

        .content {
            margin-top: 20px;
        }
        .content div {
            font-family: serif;
            font-size: 23px;
            font-weight: bold;

        }

        .image {
          border-bottom-style: solid;
          border-bottom-width: 1px;
          border-bottom-color: #000000;
        }

        .table-responsive {
          margin-top: 20px;
        }
        .table {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

      .table td, .table th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      .table tr:nth-child(even){background-color: #f2f2f2;}

      .table tr:hover {background-color: #ddd;}

      .table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #2659ad;
        color: white;
      }
    </style>
    <div class="main">
      <div class="image" style="width:100%">
        <?php $image_path = '/images/images/logo.png'; ?>
        <img style="margin-bottom: 20px;" src="{{ public_path() . $image_path }}">
      </div>

      <div class="content" >
            <div>Fiche d'absence de l'étudiant(e) : @yield('lastName') @yield('firstName')</div>
            <div>CIN : @yield('CIN')</div>
            <div>Niveau : @yield('level') Groupe : @yield('groupe')</div>
            <div>Numéro d'inscription :@yield('numInscription')</div>
            <div>Tél domicile : @yield('teldom') Tél étudiant : @yield('teletu')</div>
            <div>Tél père : @yield('telpere') Tél mère : @yield('teldom')</div>
            <div>Année Universitaire : @yield('annee1') - @yield('annee2')</div>
      </div>

      <div class="table-responsive">

        @yield('dataTable')


      </div>
    </div>





</body>
</html>

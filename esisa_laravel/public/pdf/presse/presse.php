<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Ecole Supérieure d'Ingénierie en Sciences Appliquées</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="custom.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 
  </head>

  <body>

    <!-- Begin page content -->
    <div class="container">
      <!--Header -->
      <?php include("header.html"); ?>
      <!--End header-->

      <!-- nav -->
      <?php include("nav.html"); ?>
      <!-- end nav -->

      <!--Sidebar-->
      <?php include("sidebar.html"); ?>
      <!--End Sidebar -->

      <!--Content-->
      <section class="col-lg-9"> 
        <!--Le mot du président-->
        <article class="col-lg-12 mot-du-president">
          <h2>LA PRESSE PARLE DE NOUS</h2>
            <table class="table">
              <tr>
                <td style="border:none"><a href="pdf/presse/matin04.pdf"><img src="images/logo/pdf.png" alt="" width="64" height="64"></a></td>
                <td style="border:none"><a href="pdf/presse/matin05.pdf"><img src="images/logo/pdf.png" alt="" width="64" height="64"></a></td>
                <td style="border:none"><a href="pdf/presse/opinion07.pdf"><img src="images/logo/pdf.png" alt="" width="64" height="64"></a></td>
                <td style="border:none"><a href="pdf/presse/opinion072.pdf"><img src="images/logo/pdf.png" alt="" width="64" height="64"></a></td>
                <td style="border:none"><a href="pdf/presse/liberation10.pdf"><img src="images/logo/pdf.png" alt="" width="64" height="64"></a></td>
                <td style="border:none"><a href="pdf/presse/opinion10.pdf"><img src="images/logo/pdf.png" alt="" width="64" height="64"></a></td>
              </tr>
              <tr>
                <td><a href="pdf/presse/matin04.pdf">Le matin 2004</a></td>
                <td><a href="pdf/presse/matin05.pdf">Le matin 2005</a></td>
                <td><a href="pdf/presse/opinion07.pdf">L'opinion 2007</a></td>
                <td><a href="pdf/presse/opinion072.pdf">L'opinion 2007</a></td>
                <td><a href="pdf/presse/liberation 10.pdf">Liberation 2010</a></td>
                <td><a href="pdf/presse/lopinion10.pdf">L'opinion 2010</a></td>
              </tr>
              <tr>
                <td style="border:none"><a href="pdf/presse/matin04.pdf"><img src="images/logo/pdf.png" alt="" width="64" height="64"></a></td>
                <td style="border:none"><a href="pdf/presse/matin05.pdf"><img src="images/logo/pdf.png" alt="" width="64" height="64"></a></td>
              </tr>
              <tr>
                <td><a href="pdf/presse/economiste_frontieres_numeriques_2014.pdf">L'economiste 2014</a></td>
                <td><a href="pdf/presse/economiste_frontieres_numeriques_2014_2.pdf">L'economiste 2014</a></td>
              </tr>
            </table>
        </article>
        <!--end Le mot du président-->
      </section>
    </div>


    <!--footer -->
      <?php include("footer.php"); ?>
    <!--End footer-->
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/docs.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery.easy-ticker.js"></script>
    <script>
      $(document).ready(function(){
          var dd = $('.vticker').easyTicker({
            direction: 'up',
            speed: 'slow',
            interval: 4000,
            height: 'auto',
            visible: 2,
            mousePause: 0,
          }).data('easyTicker');
        });
    </script>
  </body>
</html>
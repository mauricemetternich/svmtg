<?php
// SV Version 2.1
// Copyright (c) 2017 Maurice Metternich

// ===== BEARBEITEN VERBOTEN! =====
// ===== BEARBEITEN VERBOTEN! =====
// ===== BEARBEITEN VERBOTEN! =====
// ===== BEARBEITEN VERBOTEN! =====
// ===== BEARBEITEN VERBOTEN! =====
// ===== BEARBEITEN VERBOTEN! =====
// ===== BEARBEITEN VERBOTEN! =====
// ===== BEARBEITEN VERBOTEN! =====
// ===== BEARBEITEN VERBOTEN! =====
// ===== BEARBEITEN VERBOTEN! =====
// ===== BEARBEITEN VERBOTEN! =====

// Hier finden sich
// wirklich nur die Kernfunktionen! Wenn ihr neue Einträge vornehmen wollt,
// bzw entfernen möchtet ist hierzu die data.php zu gebrauchen. Bei Unter-
// seiten gilt das Gleiche für die sub.php!

// Um es nochmal zu betonen: Modifikationen sind nicht vorzunehmen! Macht das
// nur, wenn ihr absolut sicher seit, was ihr tut und es gar nicht anders
// geht. Ich helfe euch nicht, wenn ihr das hier aus freier Entscheidung
// vermasselt!

// Und wenn ihr nicht wenigstens probiert mich zu erreichen bevor ihr hier
// Modifikationen vornimmt schon garnicht!


// An dieser Stelle wird die Datei geladen, in der die
// verwendeten Variablen definiert sind:

include "data.php";


//============================================================================
// Allgemeine Vorlage (Kopf)
//----------------------------------------------------------------------------
// Hier findet sich das Material, das auf jede einzelne Seite gehört.
// Zwichendurch werden PHP Befehle aufgerufen, um den Inhalt anzupassen.
// Dennoch soll der Überweigende Teil hier von PHP Tags befreit bleiben und
// sich auf den statischen Inhalt der Seite konzentrieren.
//============================================================================

//----------------------------------------------------------------------------
// Generation der Navigationsliste
//----------------------------------------------------------------------------
foreach($nav as $key => $link) {
   // Line Break nach vor den Einträgen hinzufügen und Abstand für den 
   // nächsten Eintrag anpassen.
   if($key != 0)
      $navlist .= "\n                ";
   $navlist .= "<li class=\"active\"><a href=\"$link[1]\">$link[0]</a></li>";
}

print<<<END
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{$title}</title>
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- off-canvas -->
    <link href="assets/css/mobile-menu.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <meta name="keywords" content="{$keywords}">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{$favicon_png}" sizes="32x32">

</head>
<body>
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<div class="uc-mobile-menu-pusher">

<div class="content-wrapper">
<nav class="navbar m-menu navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="{$logo}" height="40px" alt=""></a>
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="#navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right main-nav">
                {$navlist}
            </ul>

        </div>
        <!-- .navbar-collapse -->
    </div>
    <!-- .container -->
</nav>
<!-- .nav -->
END;

//============================================================================
// Individuell zu generierender Inhalt der einzelnen Seiten
//============================================================================

include "sub.php";

//============================================================================
// Allgemeine Vorlage (Fuß)
//============================================================================

print<<<END
<footer class="footer">

    <div class="copyright-section">
        <div class="container clearfix">
                <span class="copytext">{$copyright} <br> Design: Copyright &copy; 2016
                  <a href="https://uicookies.com/downloads/x-corporation-free-bootstrap-html-template/">X-Corporation</a>
                        by <strong style="color: #31aae2;"">uiCookies.com</strong></span>
        </div><!-- .container -->
    </div><!-- .copyright-section -->
</footer>
<!-- .footer -->

</div>
<!-- .content-wrapper -->
</div>
<!-- .offcanvas-pusher -->

<div class="uc-mobile-menu uc-mobile-menu-effect">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
            id="uc-mobile-menu-close-btn">&times;</button>
    <div>
        <div>
            <ul id="menu">
                {$navlist}
            </ul>
        </div>
    </div>
</div>
<!-- .uc-mobile-menu -->

</div>
<!-- #main-wrapper -->


<!-- Script -->
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/mobile-menu.js"></script>
<script src="assets/js/flexSlider/jquery.flexslider-min.js"></script>
<script src="assets/js/scripts.js"></script>
<div/>
		<a style="font-size:0; height:0; width:0; opacity:0; position:absolute" target="_blank" href="http://www.uicookies.com">HTML Templates by uiCookies</a>        
	</div>
</body>
</html>
END;

//============================================================================
// Generatorfunktionen für dynamisce Seiteninhalte
//============================================================================

//----------------------------------------------------------------------------
// Gallerie
//----------------------------------------------------------------------------
// Hier wird die Gallerie  für die Hauptseite generiert. Bitte beachte, dass
// nur die ersten drei Seiten aus dem Array gelesen werden. Die restlichen
// Seiten werden nicht beachtet.
//----------------------------------------------------------------------------

function genGallerie($gallerie) {
   print<<<END
<div id="x-corp-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#x-corp-carousel" data-slide-to="1"></li>
        <li data-target="#x-corp-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="{$gallerie[0][2]}" alt="Hero Slide">

            <div class="carousel-caption">
                <h1>{$gallerie[0][0]}</h1>

                <p>{$gallerie[0][1]}</p>
            </div>
        </div>
        <div class="item">
            <img src="{$gallerie[1][2]}" alt="...">

            <div class="carousel-caption">
                <h1>{$gallerie[1][0]}</h1>

                <p>{$gallerie[1][1]}</p>
            </div>
        </div>
        <div class="item">
            <img src="{$gallerie[2][2]}" alt="...">

            <div class="carousel-caption">
                <h1>{$gallerie[2][0]}</h1>

                <p>{$gallerie[2][1]}</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- #x-corp-carousel-->
END;
}

//----------------------------------------------------------------------------
// Titel der Unterseite
//----------------------------------------------------------------------------
function genTitel($titel) {
   print <<<END

<section class="single-page-title">
    <div class="container text-center">
        <h2>{$titel}</h2>
    </div>
</section>
<!-- .page-title -->

END;
}

//----------------------------------------------------------------------------
// About Text
//----------------------------------------------------------------------------
function genText($name, $text) {
   // Sektion öffnen
   print<<<END
<section class="about-text ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>{$name}</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container">
        <div class="row">
END;

   foreach($text as $key => $spalte) {
      // Falls wir nur einen String im Text haben, legen wir keine Spalten
      // an.
      if (count($text) == 1) {
         print<<<END
               <p>{$spalte}</p>
END;
      } else {
      // Text Generieren
         print<<<END
            <div class="col-md-6">
               <p>{$spalte}</p>
            </div>
END;
      }
   }
   // Sektion schließen
   print<<<END
        </div>
    </div>

</section>
<!-- .about-text-->
END;
}

//----------------------------------------------------------------------------
// Team Sektion
//----------------------------------------------------------------------------
function genTeam($name, $teams) {
   // Sektion öffnen
   print<<<END
<section class="team ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>{$name}</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
END;

   foreach($teams as $key => $team) {
      // Nach jedem dritten Mitglied / am Anfang eine neue Reihe aufmachen
      if($key % 3 == 0)
         print<<<END
        <div class="row">
END;
      // Den Mitgliedseintrag enerieren
      print<<<END
            <div class="col-sm-4">
                <figure class="thumbnail">
                    <!---a href="#"---><img src="{$team[2]}" class="img-responsive" alt="Image"><!---/a--->
                    <figcaption class="caption text-center">
                        <h3>{$team[0]} <br>
                            <small>{$team[1]}</small>
                        </h3>
                    </figcaption>
                </figure>
            </div>
            <!-- /.col-sm-4 -->

END;

   // Nach jedem Dritten Mitglied bzw. am Ende die Reihe schließen
      if($key % 3 == 2 || $key == count($teams) - 1)
         print<<<END
        </div>
        <!-- /.row -->
END;
   }
   // Die Sektion schließen
   print<<<END
    </div>
    <!-- /.container -->
</section>
<!-- .team -->
END;
}

//----------------------------------------------------------------------------
// X Services Sektion
//----------------------------------------------------------------------------
function genDienste($name, $dienste, $bg = "gray-bg") {

   // Sektion öffnen
   print<<<END
<section class="x-services ptb-100 {$bg}">

    <section class="section-title">
        <div class="container text-center">
            <h2>{$name}</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container">

END;

   // Individuelle Einträge generieren
   foreach($dienste as $key => $dienst) {
      // Jeden zweiten Eintrag eine neue Reihe aufmachen
      if($key %2 == 0)
         print<<<END
        <div class="row">
END;

      // Den Eintrag des Dienstes vornehmen
      print<<<END
            <div class="col-md-6">
                <div class="thumbnail clearfix">
END;

      // Nur ein Bild anbringen, wenn im Array vorhanden.
      if(isset($dienst[2]))
         print<<<END
                    <!---a href="#"---><img class="img-responsive" src="{$dienst[2]}" alt="Image"><!---/a--->
END;

      // Und den Rest des Eintrages fortsetzen
      print<<<END
                    <div class="caption">
                        <h3><!---a href="#"--->{$dienst[0]}<!---/a---></h3>

                        <p>{$dienst[1]}</p>
                    </div>
                </div>
            </div>
END;
      
      // Ansonsten die Reihe Schließen
      if($key %2 == 1 || $key == count($dienste) - 1) 
         print<<<END
        </div>
        <!-- row -->
END;
   }

   // Die Sektion schließen
   print<<<END
    </div>
    <!-- .container -->
</section>
<!-- .x-services -->

END;
}

//----------------------------------------------------------------------------
// Textmenu
//----------------------------------------------------------------------------

function genTextMenu($name, $textmenu) {

   // Sektion öffnen
   print<<<END
<section class="ptb-100 gray-bg">
    <section class="section-title">
        <div class="container text-center">
            <h2>{$name}</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="x-accordion">
                <div class="panel-group" id="accordionSixLeft">
END;

   // Die Einträge ausgeben
   foreach($textmenu as $key => $eintrag) {
   print<<<END
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordionSixLeft" href="#collapseSixLeft{$key}" aria-expanded="false" class="collapsed">
                                    {$eintrag[0]}
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSixLeft{$key}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                {$eintrag[1]}
                            </div>
                        </div>
                    </div><!-- /.panel-default -->
END;
   }

   // Sektion schließen
   print<<<END
                </div><!--end of /.panel-group-->
            </div>
            <!-- .x-aacordion-->
        </div>
        <!-- /.row -->
    </div> <!--- container --->

</section>
<!-- .about-text-->
END;

}

?>

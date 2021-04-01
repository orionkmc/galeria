<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>GABINETE DE ROSTROS</title>
  <meta name="description" content="Galeria de arte CEVAM"/>
  <meta name="author" content="NEEX Corp." >
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link type="text/css" rel="stylesheet" href="css/lightgallery.css" /> 
  <link href="css/impress-common.css" rel="stylesheet"/>
  <link href="css/cube.css" rel="stylesheet"/>
  <link href="css/mystyle.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Rhodium+Libre&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet"/>
  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png"/>
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png"/>
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png"/>
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png"/>
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png"/>
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png"/>
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png"/>
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png"/>
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png"/>
  <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png"/>
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png"/>
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png"/>
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png"/>
  <link rel="manifest" href="/manifest.json"/>
  <meta name="msapplication-TileColor" content="#ffffff"/>
  <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png"/>
  <meta name="theme-color" content="#ffffff"/>
</head>
<body class="impress-not-supported">
  <div class="techo"></div>
  <div class="piso"></div>
  <div class="fallback-message">
    <p>Su navegador <b>no admite las funciones requeridas</b> por impress.js, por lo que se le presenta una versión simplificada de esta presentación. </p>
    <p>Para obtener la mejor experiencia, utilice la última versión <b>Chrome</b>, <b>Safari</b> o <b>Firefox.</p>
    </div>
    <div id="impress" data-transition-duration="2000">
      <div id="entrada" class="step pared inselect list-unstyled row" data-x="0" data-y="0" data-z="0" data-scale="1">
        <div>
          <div class="superior">
            <div class="datos-galeria">
              <h2>GABINETE DE ROSTROS</h2>
              <h5>Arnaldo Delgado</h5>  
            </div>
          </div>
          <div class="izquierda2"></div>
          <div class="izquierda1">
            <div class="izq1"></div>
            <div class="izq2"></div>
          </div>
          <div class="izquierda3">
            <div class="izq3">
              <img class="logoIzq" src="img/logoGaleria.png" alt="">
            </div>
            <div class="izq4"></div>
          </div>
          <div class="derecha2"></div>
          <div class="derecha1">
            <div class="der1"></div>
            <div class="der2"></div>
          </div>
          <div class="derecha3">
            <div class="der3">
              <img class="logoDer" src="img/logocevam.png" alt="">
            </div>
            <div class="der4"></div>
          </div>
        </div>
      </div>

      <div id="pared1" class="step pared inselect list-unstyled row" data-x="-691" data-y="0" data-z="-350" data-rotate-y="90" data-scale="1">
        <div class="lightgallery">

          <?php
            $directory="img/pared1";
            $directory2="img/pared1/trumb";
            $dirint = dir($directory);
            while (($archivo = $dirint->read()) !== false)
            {
              if (preg_match( '/\.(?:jpe?g|png|gif)$/i', $archivo)) 
              {
                echo '
                  <div
                    class="figure"
                    data-responsive="'.$directory2."/".$archivo.'"
                    data-src="'.$directory."/".$archivo.'"
                    data-pinterest-text="Pin it1"
                    data-tweet-text="share on twitter 1">
                    <img class="img-responsive" src="'.$directory2."/".$archivo.'" alt="" width="100%" height= "100%";>
                  </div>
                ';
               }
              }
            $dirint->close();
          ?>
          
        </div>
      </div>

      <div id="pared2" class="step pared inselect list-unstyled row" data-x="-692" data-y="0" data-z="-1048" data-rotate-y="90" data-scale="1">
        <div class="lightgallery">
          <?php
            $directory="img/pared2";
            $directory2="img/pared2/trumb";
            $dirint = dir($directory);
            while (($archivo = $dirint->read()) !== false)
            {
              if (preg_match( '/\.(?:jpe?g|png|gif)$/i', $archivo)) 
              {
                echo '
                  <div
                    class="figure"
                    data-responsive="'.$directory2."/".$archivo.'"
                    data-src="'.$directory."/".$archivo.'"
                    data-pinterest-text="Pin it1"
                    data-tweet-text="share on twitter 1">
                    <img class="img-responsive" src="'.$directory2."/".$archivo.'" alt="" width="100%" height= "100%";>
                  </div>
                ';
               }
              }
            $dirint->close();
          ?>
        </div>
      </div>

      <div id="pared3" class="step pared inselect list-unstyled row" data-x="-343" data-y="0" data-z="-1396" data-rotate-y="0" data-scale="1">
        <div class="lightgallery">
          <?php
            $directory="img/pared3";
            $directory2="img/pared3/trumb";
            $dirint = dir($directory);
            while (($archivo = $dirint->read()) !== false)
            {
              if (preg_match( '/\.(?:jpe?g|png|gif)$/i', $archivo)) 
              {
                echo '
                  <div
                    class="figure"
                    data-responsive="'.$directory2."/".$archivo.'"
                    data-src="'.$directory."/".$archivo.'"
                    data-pinterest-text="Pin it1"
                    data-tweet-text="share on twitter 1">
                    <img class="img-responsive" src="'.$directory2."/".$archivo.'" alt="" width="100%" height= "100%";>
                  </div>
                ';
               }
              }
            $dirint->close();
          ?>
        </div>
      </div>

      <div id="pared4" class="step pared inselect list-unstyled row" data-x="355" data-y="0" data-z="-1396" data-rotate-y="0" data-scale="1">
        <div class="lightgallery">
          <?php
            $directory="img/pared4";
            $directory2="img/pared4/trumb";
            $dirint = dir($directory);
            while (($archivo = $dirint->read()) !== false)
            {
              if (preg_match( '/\.(?:jpe?g|png|gif)$/i', $archivo)) 
              {
                echo '
                  <div
                    class="figure"
                    data-responsive="'.$directory2."/".$archivo.'"
                    data-src="'.$directory."/".$archivo.'"
                    data-pinterest-text="Pin it1"
                    data-tweet-text="share on twitter 1">
                    <img class="img-responsive" src="'.$directory2."/".$archivo.'" alt="" width="100%" height= "100%";>
                  </div>
                ';
               }
              }
            $dirint->close();
          ?>
        </div>
      </div>

      <div id="pared5" class="step pared inselect list-unstyled row" data-x="1053" data-y="0" data-z="-1396" data-rotate-y="0" data-scale="1">
        <div class="lightgallery">
          <?php
            $directory="img/pared5";
            $directory2="img/pared5/trumb";
            $dirint = dir($directory);
            while (($archivo = $dirint->read()) !== false)
            {
              if (preg_match( '/\.(?:jpe?g|png|gif)$/i', $archivo)) 
              {
                echo '
                  <div
                    class="figure"
                    data-responsive="'.$directory2."/".$archivo.'"
                    data-src="'.$directory."/".$archivo.'"
                    data-pinterest-text="Pin it1"
                    data-tweet-text="share on twitter 1">
                    <img class="img-responsive" src="'.$directory2."/".$archivo.'" alt="" width="100%" height= "100%";>
                  </div>
                ';
               }
              }
            $dirint->close();
          ?>
        </div>
      </div>

      <div id="pared6" class="step pared inselect list-unstyled row" data-x="1398" data-y="0" data-z="-1046" data-rotate-y="-90" data-scale="1">
      </div>

      <div id="pared7" class="step pared inselect list-unstyled row" data-x="1398" data-y="0" data-z="-348" data-rotate-y="-90" data-scale="1">
        <img src="img/gabinetederostros.png" alt="gabinete_rostros" class="img_titulo">
      </div>

      <div id="pared8" class="step pared inselect list-unstyled row" data-x="1049" data-y="0" data-z="0" data-rotate-y="-180" data-scale="1">
        <div class="pared-externa"></div>
      </div>

      <div id="techo" class="step pared skip prueba list-unstyled row" data-x="348" data-y="-350" data-z="-700" data-rotate-x="90" data-scale="1"></div>
      <div id="piso" class="step pared skip prueba list-unstyled row" data-x="348" data-y="350" data-z="-700" data-rotate-x="90" data-scale="1"></div>
    </div>
  <div id="impress-toolbar"></div>
  <div id="impress-help"></div>

  <script type="text/javascript" src="js/impress.js"></script>
  <script>impress().init();</script>
  <script type="text/javascript" src="js/lightgallery.js"></script>
  <script type="text/javascript" src="js/lg-pager.js"></script>
  <script type="text/javascript" src="js/lg-autoplay.js"></script>
  <script type="text/javascript" src="js/lg-fullscreen.js"></script>
  <script type="text/javascript" src="js/lg-zoom.js"></script>
  <script type="text/javascript" src="js/lg-share.js"></script>
  <script type="text/javascript" src="js/myscript.js"></script>
</body>
</html>
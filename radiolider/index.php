<?php ob_start('comprimir_pagina'); ?> 

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Rádio Lider FM
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-kit.css?v=2.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets\player.css">
</head>

<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top nav-down navbar-transparent" color-on-scroll="500">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="index.php" rel="tooltip" title="Radio Líder FM" data-placement="bottom">
          Radio Líder FM
        </a>
      </div>

        <audio id="player" class="radio" controls autoplay> <source src="http://stm19.conectastm.com:13272/;" type="audio/mpeg"> </audio>
        
        <div> 
          <button type="button" class="btn btn-outline-danger btn-sm" onclick="document.getElementById('player').play()">Play</button> 
          <button type="button" class="btn btn-outline-danger btn-sm" onclick="document.getElementById('player').pause()">Pause</button> 
          <button type="button" class="btn btn-outline-danger btn-sm" onclick="document.getElementById('player').volume += 0.1">Vol +</button> 
          <button type="button" class="btn btn-outline-danger btn-sm" onclick="document.getElementById('player').volume -= 0.1">Vol -</button> 
        </div>
        
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header" style="background-image: url('./assets/img/background.png')">
    <div class="filter"></div>
    
  </div>
  
  <div class="main">
    <div class="section section-buttons section-gray">
      <div class="container">
        <div class="title">
          <h2>Rádio Líder FM</h2>
        </div>
        
        <div id="buttons">
          <div class="title">
            <h3>Informações
              <br/>
              <small>Rádio Lider FM, a Rádio das grandes promoções. <br> A maior rádio do Norte do TO. Sintonize 95,7. Aqui é bem melhor!</small>
            </h3>
          </div>          
        </div>

      </div>
    </div>
  </div>
</footer>

  <footer class="footer footer-black footer-big">
    <div class="container">
      <div class="row">
        <div class="col-md-2 text-center col-sm-3 col-12 ml-auto mr-auto">
          <h4>Rádio Lider FM</h4>
          <div class="social-area">
            <a class="btn btn-just-icon btn-round btn-facebook" target="_blank" href="https://www.facebook.com/liderfmparaiso/">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a class="btn btn-just-icon btn-round btn-instagram" target="_blank" href="https://www.instagram.com/radioliderfmpso/">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-9 col-sm-9 col-12 ml-auto mr-auto">
          <div class="row">
            <div class="col-md-8 col-sm-4 col-6">
              <div class="links">
                <ul class="uppercase-links stacked-links">
                  <li>
                    <a href="index.php" class="btn btn-outline-danger btn-sm"><b>inicio</b></a>
                    <a href="mailto:liderfm@gmail.com" class="btn btn-outline-danger btn-sm"><b>contato</b></a>
                    <a href="http://redeliderfm.com.br/" target="_blank" class="btn btn-outline-danger btn-sm"><b>antigo</b></a>
                  </li>
                <ul>
              </div>
            </div>
          </div>
          
          <hr />
          <div class="copyright">
            <div class="pull-left">
              &copy;
              <script>
                document.write(new Date().getFullYear())
              </script> <a href="http://inovetecnologia.com.br/">Inove Tecnologia</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="./assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="./assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--	Plugin for Datetimepicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Vertical nav - dots -->
  <!--  Photoswipe files -->
  <script src="./assets/js/plugins/photo_swipe/photoswipe.min.js"></script>
  <script src="./assets/js/plugins/photo_swipe/photoswipe-ui-default.min.js"></script>
  <script src="./assets/js/plugins/photo_swipe/init-gallery.js"></script>
  <!--  for Jasny fileupload -->
  <script src="./assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-kit.js?v=2.3.0" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!--  Plugin for presentation page - isometric cards  -->
  <script src="./assets/js/plugins/presentation-page/main.js"></script>
  <script>
    $(document).ready(function() {

      if ($("#datetimepicker").length != 0) {
        $('#datetimepicker').datetimepicker({
          icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
          }
        });
      }
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>

<?php 
ob_end_flush(); 
function comprimir_pagina($buffer) { 
$busca = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s'); 
$reemplaza = array('>','<','\\1'); 
return preg_replace($busca, $reemplaza, $buffer); 
} 
?>
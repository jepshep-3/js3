


<!--  //////////////////////////     HEADER     /////////////////////////   -->


      <header class="header black-bg"> 
              <div class="sidebar-toggle-box">
                  
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Minimizar Menú"></div>
              </div>
            <!--logo start-->
            <a href="inicio.php" class="logo"><b>"El Valle"</b></a>
            <!--logo end-->
  
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a id="icons-menutop1" class="fa fa-lock tooltips" href="bloquear.php" data-placement="left" data-original-title="Bloquear"></a></li>
                    
                    <li class="dropdown">                 
                                                   
                            
                      <li class="external" role="presentation">
                      <a  align="center" class="fa fa-globe tooltips icons-menutop2" data-placement="left" data-original-title="Notificaciones" id="popover" tabindex="0" data-container="body" role="button" data-toggle="popover" title="Notificaciones" data-placement="bottom" data-content="<div id='containerpop'>
                    
                    <?php

                      session_start();

                  /*include('php/Conexion.php');

                    $con = mysql_connect($host,$user,$pw)or die("problemas al conectar");
                  mysql_select_db($db,$con)or die("Problemas al conectar");

                  $selecpago = mysql_query('SELECT * FROM pago_usuarios ORDER BY ID DESC',$con);

                  while($sesionpago = mysql_fetch_array($selecpago)){

              echo "<div class='media' id='mediaa'>
                          <div class='media-left'>
                              <a href='#'>
                                  <img class='media-object'  src='"."php/".$sesionpago['IMAGEN']." 'width='50px' height='50px' alt=''>
                              </a>
                            </div>
                          <div class='media-body'>
                            <h4 class='media-heading'>".$sesionpago['NOMBRE1']."\t".$sesionpago['APELLIDO1']."</h4>
                            <strong>Numero de ".$sesionpago['MODO_PAGO'].":</strong> ".$sesionpago['NRODECUENTA']."<br>
                            <strong>Mes:</strong>".$sesionpago['MES']."<br>
                            <strong>Monto:</strong>".$sesionpago['MONTO']." Bs
                          </div>

                            <form action='javascript:confirmarpago();' name='pagoconfirmado' id='subidacon' >
                              <button class='btn btn-md btn-primary' id='confirmar'> Confirmar </button>
                              <input type='text' name='confirmado' value='Confirmado' id='confirmacion' hidden/>
                              <input type='text' name='idpagosconfirmados' id='pagocon' value='".$sesionpago['ID']."' hidden/>
                            </form>
                          <br>

                            <form action='javascript:cancelarpago();' name='pagocancelado' id='subidacan'>
                              <button class='btn btn-md btn-danger' id='cancelar'> Cancelar </button>
                              <input type='text' name='cancelado' value='Cancelado' id='idcancelado' hidden/>
                              <input type='text' name='idpagoscancelar' id='pagocan' value='".$sesionpago['ID']."' hidden/>
                            </form><br>
                          
                          <div class='alert alert-success' role='alert' id='datapagos' hidden></div>
                          <div class='alert alert-danger' role='alert' id='datapa' hidden></div>

                  </div>";

                  }


                          /*
                          $con = mysql_connect($host,$user,$pw)or die("problemas al conectar");
                  mysql_select_db($db,$con)or die("Problemas al conectar");

                  $selecpagocon = mysql_query('SELECT * FROM pagos_confirmados,pagodecondominio,usuario WHERE pagos_confirmados.ID_PAGO = pagodecondominio.ID AND usuario.CEDULA = pagos_confirmados.CEDULA',$con);

                  while($sesionpagofir = mysql_fetch_array($selecpagocon)){

              echo "<div class='media' id='mediaa'>
                          <div class='media-left'>
                              <a href='#'>
                                  <img class='media-object'  src='"."php/".$sesionpagofir['IMAGEN']." 'width='50px' height='50px' alt=''>
                              </a>
                            </div>
                          <div class='media-body'>
                            <h4 class='media-heading'>".$sesionpagofir['NOMBRE1']."\t".$sesionpagofir['APELLIDO1']."</h4>
                            <strong>Numero de ".$sesionpagofir['MODO_PAGO'].":</strong> ".$sesionpagofir['NRODECUENTA']."<br>
                            <strong>Mes:</strong>".$sesionpagofir['MES']."<br>
                            <strong>Monto:</strong>".$sesionpagofir['MONTO']." Bs<br>
                            <strong>Pago:</strong>".$sesionpagofir['PAGOS']."
                          </div>

                          
    

                  </div>";

                  }

                  */

                    /*$con = mysql_connect($host,$user,$pw)or die("problemas al conectar");
                  mysql_select_db($db,$con)or die("Problemas al conectar");

                  $selecpagosusu = mysql_query('SELECT * FROM pagodecondominio,usuario WHERE pagodecondominio.CEDULA = usuario.CEDULA ORDER BY pagodecondominio.ID DESC',$con);

                    while ($sesionpagocon = mysql_fetch_array($selecpagosusu)){

                          echo "<div class='media' id='mediaa'>
                          <div class='media-left'>
                            <a href='#'>
                              <img class='media-object' src='"."php/".$sesionpagocon['IMAGEN']." 'width='50px' height='50px' alt=''>
                            </a>
                          </div>
                          <div class='media-body'>
                            <h4 class='media-heading'>".$sesionpagocon['NOMBRE1']."\t".$sesionpagocon['APELLIDO1']."</h4>
                            <strong>Piso:</strong>".$sesionpagocon['PISO']."<strong> Apto:</strong>".$sesionpagocon['APARTAMENTO']."<br>
                            <strong>Numero de ".$sesionpagocon['MODO_PAGO'].":</strong> ".$sesionpagocon['NROCUENTA']."<br>
                            <strong>Mes:</strong>".$sesionpagocon['MES']."<br>
                            <strong>Monto:</strong>".$sesionpagocon['MONTO']." Bs <BR>
                            <strong>Pago:</strong>".$sesionpagocon['PAGOS']."
                            
                          </div>
                          
                    

                        </div>";

                      
                    }
*/
                    ?> </div>" >&nbsp;
                  
                    <div>
                        <span class="label label-success label-as-badge"><?php /*session_start(); $prueba = mysql_query("SELECT * FROM pago_usuarios",$con);
                          $numero = mysql_num_rows($prueba); 

                echo $numero;*/
                    ?>
                    </span>
                      </div>
                      </a>

                    </li>
                       </li>
                             

                    <div id="icons-menutop" class="btn-group">
                      <a   id="icon-us" class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i><?php session_start(); echo $_SESSION['usernombre']." ".$_SESSION['userapellido']; ?></a>
                      <a  id="icon-us" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#ClaveUsuario" data-toggle="modal"><i class="fa fa-pencil" aria-hidden="true"></i> Cambiar Clave</a></li>
                        <li class="divider"></li>
                        <li><a href="php/Cerrar.php"><i class="fa fa-lock" aria-hidden="true"></i> &nbsp;Cerrar Sesión</a></li>                        
                      </ul>
                    </div>
                    
              </ul>
            </div>
        </header>
      <!--header end-->


          <div class="modal fade" id="ClaveUsuario">
        <div class="modal-dialog">
          <div class="modal-content">
                <!--Header de la ventana -->
                <header>
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" arie-hidden="true">&times;</button>
                    <img class="logo-modal-usur" src="utilidad/img/cambiodeclave.png"/> 
                    <h7 class="modal-tittle">Cambiar Contraseña</h7>
                  </div>
                </header>
                    <!--contenido de la ventana-->

            <div class="modal-body">
                <form action="javascript:cambioclave();" name="frm_pass" id="subida">

                      <input type="text" name="fechan" size="10" hidden>
                      <br>

                      <input type="text" name="fechal" size="15" hidden>
                      <br>

                      <input type="text" name="reloj" size="10" hidden>
                      <br>



                        <div class="form-group">
                          <div class="input-group">

                            <span class="input-group-addon">Nueva Clave</span>
                          <input type="password" name="clave" class="form-control" required>

                          </div>
                        </div>

                        <div class="form-group">
                          <div class="input-group">

                            <span class="input-group-addon">Repetir Nueva Clave</span>
                          <input type="password" name="rclave" class="form-control" required>

                          </div>
                        </div>

                            <div class="form-group">
                          <div class="input-group">

                            <span class="input-group-addon">Clave Anterior</span>
                          <input type="password" name="viejaclave" class="form-control" required>

                          </div>
                        </div>
                        
                        <br>

                        <div class="alert alert-success" role="alert" id="responder" hidden></div>


            </div>
            <!-- Footer de la ventana -->
              <div class="modal-footer">                
                <button type="submit"  class="btn btn-modificar regresar" id="cambiarclave"> Cambiar Contraseña </button>
                <a href="inicio.php" class="btn btn-regresar regresar"> Cerrar </a>                
                

              </div>

            </form>

            
        </div>
      </div>  

    </div>

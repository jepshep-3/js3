function RUsuario(){

var Nombre1 =document.getElementById("username1").value;
			var Nombre2 =document.getElementById("username").value;
			var pass =document.getElementById("password1").value;
			var correo =document.getElementById("mail").value;
			var passmail =document.getElementById("passmail").value;


	//var Nombre1 = document.formsubi.username1.value;
	//var Nombre2 = document.formsubi.username.value;
	//var pass = document.formsubi.password1.value;




	
		
	$.ajax({

		type:"POST",
		url:"guardar.php",
		data:{nombre1:Nombre1,pass:pass,correo:correo,passmail:passmail}
		}).done(function(msg){


	$('#mostrar').show();
	$('#mostrar').html(msg);


					


	});
	

	

	



}

function Rverifica(){



var verifica =document.getElementById("verifica").value;


$('#mostrar').show();
	$('#mostrar').html(verifica);



	
	$.ajax({

		type:"POST",
		url:"guardar.php",
		data:{verifica:verifica}
		}).done(function(msg){


	$('#mostrar').show();
	$('#mostrar').html(msg);


					


	});
	





}




  </script>

        <script type="text/javascript">
         var url = "https://jepvirtual.coopjep.fin.ec/jepvirtual/";
         var seconds = 30; //número de segundos a contar

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

                $('#countdown').hide();
                $('#Mostrar').show();

                $('#Mostrar').html('<label style="color:red;" > Disculpe hemos tenido un problema al conectarnos con el servidor... <br> Sera redireccionado nuevamente a la pagina de inicio...</label>');


               

                    if ($('#countdown').show()) {

                 
                      $('#countdown').hide();

                      $('#count').show();

                var segundos = 30; //número de segundos a contar

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

              var counTimer = setInterval(sego, 1000);
          
            } else {
               seconds--;
            }


         }
          
         var countdownTimer = setInterval(secondPassed, 1000);



      </script>
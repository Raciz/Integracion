<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
			<title>E2</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="style.css" rel="stylesheet" type="text/css" />
			<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
			<script type="text/javascript" src="js/script.js"></script>
			<script type="text/javascript" src="js/cufon-yui.js"></script>
			<script type="text/javascript" src="js/arial.js"></script>
			<script type="text/javascript" src="js/cuf_run.js"></script>

			<!-- Bootstrap core CSS -->
			<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
			<!-- Custom styles for this template -->    
			<link href="css/scrolling-nav.css" rel="stylesheet">
			<!-- Material Design Bootstrap -->
			<link href="css2/mdb.min.css" rel="stylesheet">
			<!-- Your custom styles (optional) -->
			<link href="css2/style.css" rel="stylesheet">
			<!-- Librerias para el objeto Modal-->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
			    <!-- Navigation -->
			    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
			      <div class="container">
			        <a class="navbar-brand js-scroll-trigger" href="#page-top">Ejercicio 2</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			          <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarResponsive">
			          <ul class="navbar-nav ml-auto">
			            <li class="nav-item">
			              <a class="nav-link js-scroll-trigger" href="/ES/HOME/index.php">Home <img src="../../material-design-icons-3.0.1/action/2x_web/ic_home_white_18dp.png" class="animated pulse infinite"></a>
			            </li>
			            <li class="nav-item">
			              <a class="nav-link js-scroll-trigger" href="/ES/HOME/Perfil/index.php">Perfil <img src="../../material-design-icons-3.0.1/action/2x_web/ic_account_circle_white_18dp.png" class="animated pulse infinite"></a>
			            </li>
			            <li class="nav-item">
			              <a class="nav-link js-scroll-trigger" href="/ES/CerrarSesion.php">Cerrar Sesion <img src="../../material-design-icons-3.0.1/action/2x_web/ic_exit_to_app_white_18dp.png" class="animated pulse infinite"></a>
			            </li>
			          </ul>
			        </div>
			      </div>
			    </nav>
				<br /><br /><br />
			    <div class="container">
			    	<div class="container-fluid bg-dark text-center text-white">
			    		Ejercicio 2
			    	</div>
			    	<div class="">
			    		<h5 class="animated zoomIn">Instrucciones: </h5>
			    		<p>Selecciona el numero que son el resultado de la operacion y suma puntos por cada operacion respondida.<p id="operacion" class="border border-dark w-25 text-center">A + B = 0</p></p>
			    		<div class="row border border-primary">
			    			<div class ="col-sm-1">
			    				tiempo:  
			    			</div>
			    			<div class ="col-sm-1" id = "Tiempo">
			    				0 : 0
			    			</div>
	
			    			<div class ="col-sm-1" >
			    				Puntos:
			    			</div>
			    			<div class="col-sm-1" id="puntos">
			    				0
			    			</div>
			    		</div>

			    	<div id="Tablero" class="justify-content-center">
			    		
			    	</div>
			    	<div class="btn btn-primary" id = "Reset">
			    		Reset <img src="../../material-design-icons-3.0.1/action/2x_web/ic_settings_backup_restore_white_18dp.png" class="animated rotateIn infinite">
			    	</div>
			    	<div class="progress">
        				<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:0%" id="Avanze"></div>  
      				</div>
			    </div>
	
			<!-- Empieza Modal -->
				<div class="modal fade" id="myModal">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header bg-info">
				        <h4 class="modal-title">Ganaste!!</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body">
				        <h4 class="animated shake infinite">Felicidades Lo Has Logrado!!!!</h4>
				        <center><img src="Confeti.gif"></center>
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				      </div>

				    </div>
				  </div>
				</div>
				<!--Termina Modal -->
		
				<script type="text/javascript">
					/////////////////////////////////////////////////////////////////////////////
					///////Variables Globales
					var Tablero = document.getElementById("Tablero");
					var t = document.getElementById("Tiempo");
					var Puntos = document.getElementById("puntos");
					var R = document.getElementById("Reset");
					R.addEventListener('click',Reset,false);
					var Numeros = [];
					t.innerHTML = "- : -";
					var Operacion;
					var Cronometro;
					var P = 0;
					var arrayBotones = [];
					var arrayFila = [];
					var cont = 0;
					var num;
					//////Termina Variables Globales
					/////////////////////////////////////////////////////////////////////////////
					EmpezarTiempo();
					CrearTablero();
					////////////////////////////////////////////////////////////////////////////
					///Funciones De Preparacion del Juego
					function EmpezarTiempo()
					{//Empieza Funcion EmpezarTiempo
						var contador_s = 0;
						var contador_m = 0;
						
						Cronometro = setInterval(
							function()
							{
								if(contador_s == 60)
								{
									contador_s = 0;
									contador_m++;
									t.innerHTML = contador_m + " : "+contador_s;

									if(contador_m == 60)
									{
										contador_m = 0;
									}
								}
								t.innerHTML = contador_m + " : "+contador_s;
								contador_s++;
							}
						,1000);
					}//Termina Funcion EmpezarTiempo
					/////////////////////////////////////////////////////////////////////////////
					//////Se barajea el Array para que esten en los botones de forma desordenada
					function shuffle(array) 
					{
  							var currentIndex = array.length, temporaryValue, randomIndex;
 							// Mientras queden elementos a mezclar...
  							while (0 !== currentIndex) 
  							{
    								// Seleccionar un elemento sin mezclar...
    								randomIndex = Math.floor(Math.random() * currentIndex);
    								currentIndex -= 1;
    								// E intercambiarlo con el elemento actual
    								temporaryValue = array[currentIndex];
    								array[currentIndex] = array[randomIndex];
    								array[randomIndex] = temporaryValue;
  							}

  					return array;
					}

					function DetenerTiempo()
					{//Empieza Funcion DetenerTiempo
						clearInterval(Cronometro);
					}//Termina Funcion DetenerTiempo
					function CrearOperacion()
					{//Empieza Funcion CrearOperacion
						var Operacion = document.getElementById("operacion");
						var N1 = Math.floor((Math.random() * 10) + 1);
						var N2 = Math.floor((Math.random() * 10) + 1);
						var Op = Math.floor((Math.random() * 2) + 1);
						var Resultado;
						if(Op == 1)
						{
							Operacion.innerHTML = N1+" + "+N2+" = ?";
							Resultado = N1+N2;
						}
						else
						{
							Operacion.innerHTML = N1+" - "+N2+" = ?";
							Resultado = N1-N2;
						}
						return Resultado;
					}//Termina Funcion CrearOperacion

					function CrearTablero()
					{//Empieza Funcion CrearTablero
						num = CrearOperacion();
					//	var alea = Math.floor((Math.random() * 4) + 1);
						for(var i = 0; i < 3; i++)
						{
							Numeros.push(num);
						}
						for(var i = 0; i < 9; i++)
						{
							var S = Math.floor((Math.random() * 20) + 1);
							Numeros.push(S);
							console.log(S);
						}
						Numeros = shuffle(Numeros);
							for(var i = 0; i < 4; i++)
							{//Inicia ciclo de Fila
								var Fila = document.createElement("div");
								Fila.className += "row justify-content-center";
								Fila.id = "fila"+i;
								arrayFila.push(Fila.id);
								for(var j = 0; j < 3; j++)
								{//Inicia ciclo de columnas

									var Boton = document.createElement("div");
									Boton.className += "col-md-2 btn btn-dark animated pulse infinite";
									Boton.id = "btn"+cont;
									Boton.innerHTML = Numeros[cont];
									Boton.addEventListener('click',Btn_Click,false);
									Fila.appendChild(Boton);
									cont += 1;		

								}//Termina el ciclo de la columna
								Tablero.appendChild(Fila);	//Se añade la fila al tablero

						}///Termina ciclo de fila	
						cont = 0;
					}//Termina Funcion CrearTablero

					function Reset(e)
					{//Empieza Funcion Reset
						//$("#myModal").modal();
						DetenerTiempo();
						EmpezarTiempo();
						for(var i = 0; i<arrayFila.length; i++)
						{
								Tablero.removeChild(document.getElementById(arrayFila[i]));
						}
						arrayFila = [];
						Numeros = [];
						P = 0;
						Puntos.innerHTML = P;
						click = 0;
						CrearTablero();
					}//Termina funcion Reset
					var click = 0;
					function Btn_Click(e)
					{
						var contador = 0;
						var contador2 = 0;
						//Contamos las veces que aparece el resultado en el array de numeros
						for(var i = 0; i < Numeros.length; i++)
						{
							if(num == Numeros[i])
							{
								contador += 1;
							}
							else 
							{
								contador2 += 1;
							}
						}
						e.target.removeEventListener('click',Btn_Click,false);
						//Logica del juego
						if(num == e.target.innerHTML)
						{
							click += 1;
							e.target.className = "col-md-2 btn btn-success animated bounceIn";
							var img = document.createElement('img');
							img.src = "../../material-design-icons-3.0.1/action/2x_web/ic_check_circle_white_18dp.png";
							e.innerHTML = "";
							e.target.appendChild(img);
							P += 100/contador;
							Puntos.innerHTML = Math.round(P);
							if(click == contador)
							{
								$("#myModal").modal();
								///////////////////////////////////////////////////////////////////////////////
								//Enviar datos para guardarlos en la base de datos
										$( document).ready(function()
										{	
											$("#campo").load("../ObtenerPuntos.php",{Puntos:P,Ejercicio:2});
										});
								//Termina funcion para Enviar los datos
								/////////////////////////////////////////////////////////////////////////////////
							}
						}
						else
						{
							e.target.className = "col-md-2 btn btn-danger animated bounceIn";
							var img = document.createElement('img');
							img.src = "../../material-design-icons-3.0.1/action/2x_web/ic_highlight_off_white_18dp.png";
							e.target.appendChild(img);
							if(P != 0)
							{
								P -= 100/contador2;
								Puntos.innerHTML = Math.round(P);
							}
							
						}
					}
					////////////////////////////////////////////////////////////////////////////
					/////Aqui empiezan las funciones de comprobaciones del juego
				</script>
				<div id="campo">
					
				</div>
			    <!-- Bootstrap core JavaScript -->
    			<script src="vendor/jquery/jquery.min.js"></script>
    			<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
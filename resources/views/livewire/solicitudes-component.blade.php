<div>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{margin-top:20px;}
@import url('https://fonts.googleapis.com/css?family=Abel');

html, body {
  background: #e9ecec; /*color de fondo*/
  font-family: Abel, Arial, Verdana, sans-serif;
}

.center {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
}

.card {
  width: 500px;/*largo de tarjeta*/
  height: 220px;
  color: #006baf;
  background-color: #721e1e;
  background: linear-gradient(#f8f8f8, #fff);
  box-shadow: 0 8px 16px -8px rgba(0, 0, 0, 0.4);
  border-radius: 6px;
  overflow: hidden;
  position: relative;
  margin: 2.5rem;
}

.card h1 {
  text-align: center;
}

.card .additional {
  position: absolute;
  width: 150px;
  height: 100%;
  background: linear-gradient(#007ec6, #007ec6);
   color: #fff;
  transition: width 0.2s;
  overflow: hidden;
  z-index: 2;
}

/*.card.green .additional {
  background: linear-gradient(#dE685E, #6e76ee);
}*/


.card:hover .additional {
  width: 100%;
  border-radius: 0 5px 5px 0;
}

.card .additional .user-card {
  width: 150px;
  height: 100%;
  position: relative;
  float: right; /*cambio de p, del segundo textox*/
}

.card .additional .user-card::after {
  content: "";
  display: block;
  position: absolute;
  top: 10%;
  right: -2px;
  height: 80%;
  border-left: 2px solid rgba(0, 0, 0, 0.025);
}

.card .additional .user-card .level,
.card .additional .user-card .points {
  top: 15%;
  color: #fff;
  text-transform: uppercase;
  font-size: 0.75em;
  font-weight: bold;
  background: rgba(0,0,0,0.15);
  padding: 0.125rem 0.75rem;
  border-radius: 100px;
  white-space: nowrap;
}


/*.card .additional .more-info {
  width: 300px;
  float: ;
  position: absolute;
  left: 150px;
  height: 100%;
}*/

/*.card .additional .more-info h1 {
  color: #ffffff;
  margin-bottom: 0;
}*/me quede aqui

.card.green .additional .more-info h1 {
  color: #09b95e;
}

.card .additional .coords {
  margin: 0 1rem;
  color: #fff;
  font-size: 1rem;
}

.card.green .additional .coords {
  color: #325C46;
}

.card .additional .coords span + span {
  float: right;
}

.card .additional .stats {
  font-size: 2rem;
  display: flex;
  position: absolute;
  bottom: 1rem;
  left: 1rem;
  right: 1rem;
  top: auto;
  color: #fff;
}

.card.green .additional .stats {
  color: #325C46;
}

.card .additional .stats > div {
  flex: 1;
  text-align: center;
}

.card .additional .stats i {
  display: block;
}

.card .additional .stats div.title {
  font-size: 0.75rem;
  font-weight: bold;
  text-transform: uppercase;
}

.card .additional .stats div.value {
  font-size: 1.5rem;
  font-weight: bold;
  line-height: 1.5rem;
}

.card .additional .stats div.value.infinity {
  font-size: 2.5rem;
}

.card .general {
  width: 300px;
  height: 100%;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 1;
  box-sizing: border-box;
  padding: 1rem;
  padding-top: 0;
}

.card .general .more {
  position: absolute;
  bottom: 1rem;
  right: 1rem;
  font-size: 0.9em;
}
.img-thumbnail{
    width:110px;
    height:110px;
    margin-top: 50%;
}

#reloj {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        #fechaInicio, #fechaFin {
            margin-bottom: 10px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 8px 16px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            margin-right: 10px;
        }

        #btnCancelar {
            background-color: #dc3545; /* Rojo de Bootstrap */
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
/*
        .card {
            width: 500px;
            margin: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Puedes personalizar los estilos según tus necesidades */
    </style>
    <title>Tarjetas de Datos</title>
</head>

  
        

<body>
    
        <div>
            <div class="row">
            <!-- Sección 1 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="team-style1 text-center">
                    <!-- Contenido de la primera sección -->
                    <div class="left">
                        <div class="card">
                        <div class="additional">
                        <div class="user-card">
                        <img src="https://cdn-icons-png.flaticon.com/256/988/988935.png" class="img-fluid d-block mx-auto rounded-circle img-thumbnail mb-4">
                        </div>
                        <label for="fechaInicio">Fecha y Hora de Inicio:</label>
                                                                <input type="datetime-local" id="fechaInicio">
                                            
                                                                <label for="fechaFin">Fecha y Hora de Fin:</label>
                                                                <input type="datetime-local" id="fechaFin">
                                            
                                                                <div id="reloj"></div>
                                            
                                                                <button onclick="iniciarDescanso()">Iniciar Descanso</button>
                                                                <button id="btnCancelar" onclick="cancelarDescanso()" disabled>Cancelar</button>
                        
                        
                        </div>
                        <div class="general">
                        <h1>Disfrute su cumpleaños</h1>
                        <p>Disfrute de una jornada de cumpleaños.</p>
                        <span class="more">mas</span>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--dos-->
<div>
    <div class="row">
    <!-- Sección 1 -->
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="team-style1 text-center">
            <!-- Contenido de la primera sección -->
            <div class="left">
                <div class="card">
                <div class="additional">
                <div class="user-card">
                <img src="https://us.123rf.com/450wm/alinakvaratskhelia/alinakvaratskhelia2104/alinakvaratskhelia210401416/167667746-educaci%C3%B3n-en-l%C3%ADnea-para-ni%C3%B1os-padres-madre-padre-ni%C3%B1os-estudiantes-estudio-de-ni%C3%B1os-tareas.jpg?ver=6" class="img-fluid d-block mx-auto rounded-circle img-thumbnail mb-4">
                </div>
                <label for="fechaInicio">Fecha y Hora de Inicio:</label>
                                                        <input type="datetime-local" id="fechaInicio">
                                    
                                                        <label for="fechaFin">Fecha y Hora de Fin:</label>
                                                        <input type="datetime-local" id="fechaFin">
                                    
                                                        <div id="reloj"></div>
                                    
                                                        <button onclick="iniciarDescanso()">Iniciar Descanso</button>
                                                        <button id="btnCancelar" onclick="cancelarDescanso()" disabled>Cancelar</button>
                
                
                </div>
                <div class="general">
                <h1>Disfrute de tiempo familiar</h1>
                <p>Tiempo de calidad con los miembros de su familia. La siguiente nota aplica para Colombia</p>
                <span class="more">mas</span>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--tres-->

<div>
    <div class="row">
    <!-- Sección 1 -->
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="team-style1 text-center">
            <!-- Contenido de la primera sección -->
            <div class="left">
                <div class="card">
                <div class="additional">
                <div class="user-card">
                <img src="https://cdn-icons-png.flaticon.com/256/1702/1702316.png" class="img-fluid d-block mx-auto rounded-circle img-thumbnail mb-4">
                </div>
                <label for="fechaInicio">Fecha y Hora de Inicio:</label>
                                                        <input type="datetime-local" id="fechaInicio">
                                    
                                                        <label for="fechaFin">Fecha y Hora de Fin:</label>
                                                        <input type="datetime-local" id="fechaFin">
                                    
                                                        <div id="reloj"></div>
                                    
                                                        <button onclick="iniciarDescanso()">Iniciar Descanso</button>
                                                        <button id="btnCancelar" onclick="cancelarDescanso()" disabled>Cancelar</button>
                
                
                </div>
                <div class="general">
                <h1>Diligencia de padres</h1>
                <p>Recepción de notas, reunión de padres, citas médicas y demás asuntos personales</p>
                <span class="more">mas</span>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--4-->
<div>
    <div class="row">
    <!-- Sección 1 -->
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="team-style1 text-center">
            <!-- Contenido de la primera sección -->
            <div class="left">
                <div class="card">
                <div class="additional">
                <div class="user-card">
                <img src="https://cdn-icons-png.flaticon.com/512/4349/4349134.png" class="img-fluid d-block mx-auto rounded-circle img-thumbnail mb-4">
                </div>
                <label for="fechaInicio">Fecha y Hora de Inicio:</label>
                                                        <input type="datetime-local" id="fechaInicio">
                                    
                                                        <label for="fechaFin">Fecha y Hora de Fin:</label>
                                                        <input type="datetime-local" id="fechaFin">
                                    
                                                        <div id="reloj"></div>
                                    
                                                        <button onclick="iniciarDescanso()">Iniciar Descanso</button>
                                                        <button id="btnCancelar" onclick="cancelarDescanso()" disabled>Cancelar</button>
                
                
                </div>
                <div class="general">
                <h1>Citas médicas</h1>
                <p>Tiempo para asistir a citas médicas particulares</p>
                <span class="more">mas</span>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--5-->
<div>
    <div class="row">
    <!-- Sección 1 -->
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="team-style1 text-center">
            <!-- Contenido de la primera sección -->
            <div class="left">
                <div class="card">
                <div class="additional">
                <div class="user-card">
                <img src="https://cdn-icons-png.flaticon.com/512/174/174234.png" class="img-fluid d-block mx-auto rounded-circle img-thumbnail mb-4">
                </div>
                <label for="fechaInicio">Fecha y Hora de Inicio:</label>
                                                        <input type="datetime-local" id="fechaInicio">
                                    
                                                        <label for="fechaFin">Fecha y Hora de Fin:</label>
                                                        <input type="datetime-local" id="fechaFin">
                                    
                                                        <div id="reloj"></div>
                                    
                                                        <button onclick="iniciarDescanso()">Iniciar Descanso</button>
                                                        <button id="btnCancelar" onclick="cancelarDescanso()" disabled>Cancelar</button>
                
                
                </div>
                <div class="general">
                <h1>Grados propios o familiares</h1>
                <p>Tiempo para asistir a grados, promoción o algún familiar cercano </p>
                <span class="more">mas</span>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--6-->
<div>
    <div class="row">
    <!-- Sección 1 -->
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="team-style1 text-center">
            <!-- Contenido de la primera sección -->
            <div class="left">
                <div class="card">
                <div class="additional">
                <div class="user-card">
                <img src="https://img.freepik.com/vector-gratis/ilustracion-excelencia-academica_24877-52355.jpg" class="img-fluid d-block mx-auto rounded-circle img-thumbnail mb-4">
                </div>
                <label for="fechaInicio">Fecha y Hora de Inicio:</label>
                                                        <input type="datetime-local" id="fechaInicio">
                                    
                                                        <label for="fechaFin">Fecha y Hora de Fin:</label>
                                                        <input type="datetime-local" id="fechaFin">
                                    
                                                        <div id="reloj"></div>
                                    
                                                        <button onclick="iniciarDescanso()">Iniciar Descanso</button>
                                                        <button id="btnCancelar" onclick="cancelarDescanso()" disabled>Cancelar</button>
                
                
                </div>
                <div class="general">
                <h1>Tiempo academico</h1>
                <p>Tiempo para actividades académicas, matriculares e inscripciones</p>
                <span class="more">mas</span>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--7-->
<div>
    <div class="row">
    <!-- Sección 1 -->
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="team-style1 text-center">
            <!-- Contenido de la primera sección -->
            <div class="left">
                <div class="card">
                <div class="additional">
                <div class="user-card">
                <img src="https://img.freepik.com/vector-premium/icono-taza-cafe_24381-2216.jpg?w=2000" class="img-fluid d-block mx-auto rounded-circle img-thumbnail mb-4">
                </div>
                <label for="fechaInicio">Fecha y Hora de Inicio:</label>
                                                        <input type="datetime-local" id="fechaInicio">
                                    
                                                        <label for="fechaFin">Fecha y Hora de Fin:</label>
                                                        <input type="datetime-local" id="fechaFin">
                                    
                                                        <div id="reloj"></div>
                                    
                                                        <button onclick="iniciarDescanso()">Iniciar Descanso</button>
                                                        <button id="btnCancelar" onclick="cancelarDescanso()" disabled>Cancelar</button>
                </div>
                <div class="general">
                <h1>Otras activdades</h1>
                <p>Tiempo para activdades academicas, matriculares e inscripciones.</p>
                <span class="more">mas</span>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script>
        var intervalo;
    
        function iniciarDescanso() {
            var fechaInicio = moment(document.getElementById("fechaInicio").value);
            var fechaFin = moment(document.getElementById("fechaFin").value);
    
            if (fechaInicio.isValid() && fechaFin.isValid() && fechaFin.isAfter(fechaInicio)) {
                var duracionTotal = moment.duration(fechaFin.diff(fechaInicio));
    
                intervalo = setInterval(function () {
                    var tiempoRestante = moment.duration(fechaFin.diff(moment()));
                    document.getElementById("reloj").innerHTML = tiempoRestante.hours() + ":" + tiempoRestante.minutes() + ":" + tiempoRestante.seconds();
    
                    if (tiempoRestante.asSeconds() <= 0) {
                        clearInterval(intervalo);
                        document.getElementById("reloj").innerHTML = "Descanso completado";
                        document.getElementById("btnCancelar").disabled = true;
                    }
                }, 1000);
    
                // Deshabilitar el botón de iniciar y habilitar el de cancelar
                document.getElementById("btnCancelar").disabled = false;
            } else {
                alert("Ingrese valores válidos para la fecha y la hora");
            }
        }
    
        function cancelarDescanso() {
            clearInterval(intervalo);
            document.getElementById("reloj").innerHTML = "Descanso cancelado";
            document.getElementById("btnCancelar").disabled = true;
        }
    </script>
</body>
</html>

</div>

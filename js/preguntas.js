const opciones = document.querySelectorAll(".opcion");
const preguntaTexto = document.getElementById("preguntaTexto");
const botonSiguiente = document.getElementById("botonSiguiente");
const nuevoBotonEnviar = document.createElement("button");


var Opcion1 = document.getElementById("opcion1");
var Opcion2 = document.getElementById("opcion2");
var Opcion3 = document.getElementById("opcion3");
var Opcion4 = document.getElementById("opcion4");

var ids = ["opcion1", "opcion2", "opcion3","opcion4"];

var clasesARemover = ["boton-samsung","boton-apple","boton-motorola","boton-xiaomi"];
var clasesARemover_almacenamiento = ["boton-32","boton-64","boton-128","boton-512"];
var clasesARemover_precios = ["boton-500","boton-mil","boton-dosmil","boton-masdosmil"];

let preguntaActual = 1;


//Validar las preguntas y respuestas actuales cuando se pasan las preguntas
opciones.forEach((opcion) => {
    opcion.addEventListener("click", () => {


    if (preguntaActual === 1) {  
    respuestaSeleccionada = opcion.getAttribute("data-opcion");
    //console.log("Respuesta seleccionada: " + respuestaSeleccionada);
    }

    if (preguntaActual === 2) {
        respuestaSeleccionada2 = opcion.getAttribute("data-opcion");
        //console.log("Respuesta seleccionada2: " + respuestaSeleccionada2);
    }

    if (preguntaActual === 3) {
        respuestaSeleccionada3 = opcion.getAttribute("data-opcion");
        //console.log("Respuesta seleccionada3: " + respuestaSeleccionada3);
    }

    if (preguntaActual === 4) {
        respuestaSeleccionada4 = opcion.getAttribute("data-opcion");
        //console.log("Respuesta seleccionada4: " + respuestaSeleccionada4);
    }


        // Remover la clase "seleccionado" de todos los botones
        opciones.forEach((boton) => {
        boton.classList.remove("seleccionado");
        });

       // Agregar la clase "seleccionado" al botón seleccionado
        opcion.classList.add("seleccionado");
        });   
});



botonSiguiente.addEventListener("click", () => {

    preguntaActual++;

    if (preguntaActual === 2) {

        opciones.forEach((boton) => {
            boton.classList.remove("seleccionado");
        });


        preguntaTexto.textContent = `Pregunta ${preguntaActual}: ¿Con cuánto almacenamiento lo prefieres?`;

        Opcion1.setAttribute("data-opcion","32");
        Opcion2.setAttribute("data-opcion","64");
        Opcion3.setAttribute("data-opcion","128");
        Opcion4.setAttribute("data-opcion","512");   
        
        ids.forEach(function(id) {
            var elemento = document.getElementById(id);
            if (elemento) {
              // Itera sobre las clases que deseas quitar
                clasesARemover.forEach(function(clase) {
                elemento.classList.remove(clase);
                });
            }
        });

        //Nuevas clases GB
        Opcion1.classList.add("boton-32");
        Opcion2.classList.add("boton-64");
        Opcion3.classList.add("boton-128");
        Opcion4.classList.add("boton-512");


    } else if (preguntaActual === 3) {

        opciones.forEach((boton) => {
            boton.classList.remove("seleccionado");
        });

        preguntaTexto.textContent = `Pregunta ${preguntaActual}: ¿Cuál es tu presupuesto?`;
        
        Opcion1.setAttribute("data-opcion","500");
        Opcion2.setAttribute("data-opcion","1000");
        Opcion3.setAttribute("data-opcion","1999");
        Opcion4.setAttribute("data-opcion","2000");    


        ids.forEach(function(id) {
            var elemento = document.getElementById(id);
            if (elemento) {
              // Itera sobre las clases que deseas quitar
                clasesARemover_almacenamiento.forEach(function(clase) {
                elemento.classList.remove(clase);
                });
            }
        });

        //Nuevas clases Precios
        Opcion1.classList.add("boton-500");
        Opcion2.classList.add("boton-mil");
        Opcion3.classList.add("boton-dosmil");
        Opcion4.classList.add("boton-masdosmil");
        
    }
    else if (preguntaActual === 4) {

        opciones.forEach((boton) => {
            boton.classList.remove("seleccionado");
        });

        preguntaTexto.textContent = `Pregunta ${preguntaActual}: ¿Cuántos GB de RAM lo requiere?`;

        Opcion1.setAttribute("data-opcion","4ram");
        Opcion2.setAttribute("data-opcion","6ram");
        Opcion3.setAttribute("data-opcion","8ram");

        Opcion4.setAttribute("data-opcion","eliminarrr");
        
        ids.forEach(function(id) {
            var elemento = document.getElementById(id);
            if (elemento) {
              // Itera sobre las clases que deseas quitar
                clasesARemover_precios.forEach(function(clase) {
                elemento.classList.remove(clase);
                });
            }
        });

        //Nuevas clases RAM
        Opcion1.classList.add("boton-4ram");
        Opcion2.classList.add("boton-6ram");
        Opcion3.classList.add("boton-8ram");


        Opcion4.remove();
        botonSiguiente.remove();

        // Asignar texto al botón
        nuevoBotonEnviar.innerText = "ENVIAR";

        // Agregar clases al botón
        nuevoBotonEnviar.classList.add("boton-enviar");

        // Quitar clase
        nuevoBotonEnviar.classList.remove("boton-siguiente");


        // Agregar el botón al contenedor
        const botonEnviar = document.getElementById("botonEnviar");

        botonEnviar.appendChild(nuevoBotonEnviar);

        // Agregar el atributo onclick al botón para redirigir a una página
        botonEnviar.setAttribute("onClick","consultarBD()");

    } else {
        //VALIDAR
        //preguntaTexto.textContent = "¡Has completado todas las preguntas!";
        //preguntas.style.display = "none";
    
    }
}
);

function consultarBD() {
    
    //console.log('Esta entrando a la Función desde el nuevo Botón');
    
    var variable = respuestaSeleccionada
    var variable2 = respuestaSeleccionada2
    var variable3 = respuestaSeleccionada3
    var variable4 = respuestaSeleccionada4


    var data = new FormData();
    data.append('marca', variable);
    data.append('almacenamiento', variable2);
    data.append('precio', variable3);
    data.append('ram', variable4);


    fetch('../php/consultas.php', {
        method: 'POST',
        body: data,
        error: function() {
            alert('Error al realizar la consulta.');
        }
    })

    .then(response => response.text())
    .then(data => {

        if(data && data.length > 0){
        //console.log('Aca se muestran los datos')
        //console.log(data); // Imprime la respuesta del servidor

        const resultadoElement = document.getElementById('resultado');
        resultadoElement.innerHTML = data;

        //console.log('Aca finalizan los datos')
        }else{
            const resultadoElement = document.getElementById('resultado');
            resultadoElement.innerHTML = "No se encontraron resultados";
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}


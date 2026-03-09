<!DOCTYPE html>
<html>
<head>
<title>Flujo Único vs Flujo Múltiple</title>
</head>

<body>

<h2>Práctica de Concurrencia</h2>

<button onclick="ejecutarSecuencial()">Ejecutar Secuencial</button>
<button onclick="ejecutarMultiple()">Ejecutar Múltiple</button>

<h3 id="resultado"></h3>

<script>

function ejecutarSecuencial(){

fetch("secuencial.php")
.then(res => res.text())
.then(data => {
document.getElementById("resultado").innerHTML = data
})

}

function ejecutarMultiple(){

let inicio = performance.now()

fetch("tarea1.php")
fetch("tarea2.php")

setTimeout(function(){

let fin = performance.now()

let tiempo = ((fin - inicio)/1000).toFixed(2)

document.getElementById("resultado").innerHTML =
"Tiempo aproximado: " + tiempo + " segundos"

},3100)

}

</script>

</body>
</html>
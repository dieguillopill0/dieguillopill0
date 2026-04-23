<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 7 </title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; padding: 30px; }
        .container { max-width: 800px; margin: auto; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .tarea { border-left: 5px solid #2196F3; background: #e3f2fd; padding: 15px; margin-bottom: 20px; border-radius: 0 5px 5px 0; }
        .tarea.t2 { border-left-color: #4CAF50; background: #e8f5e9; }
        button { padding: 10px 20px; cursor: pointer; border: none; border-radius: 5px; font-weight: bold; transition: 0.3s; }
        .btn-start { background-color: #2196F3; color: white; }
        .btn-stop { background-color: #f44336; color: white; margin-left: 10px; }
        #log-container { background: #2c3e50; color: #ecf0f1; padding: 15px; height: 250px; overflow-y: scroll; font-family: monospace; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>CONTROL DE TAREAS DEL SISTEMA</h1>
        
        <div class="tarea">
            <h3>Tarea 1: Generar reporte del sistema</h3>
            <p>Estado: <span id="st1">detenido</span></p>
            <button class="btn-start" onclick="controlar('iniciar_t1.php', 1)">Iniciar Tarea 1</button>
            <button class="btn-stop" onclick="detener(1)">Detener Tarea 1</button>
        </div>

        <div class="tarea t2">
            <h3>Tarea 2: Procesar lote de información</h3>
            <p>Estado: <span id="st2">detenido</span></p>
            <button class="btn-start" onclick="controlar('iniciar_t2.php', 2)">Iniciar Tarea 2</button>
            <button class="btn-stop" onclick="detener(2)">Detener Tarea 2</button>
        </div>

        <h3>Registro de Actividad (Log)</h3>
        <div id="log-container">Cargando eventos...</div>
    </div>

    <script>
        function controlar(archivo, id) {
            document.getElementById('st' + id).innerText = "ejecutándose";
            document.getElementById('st' + id).style.color = "blue";
            // Petición asíncrona para no bloquear la interfaz
            fetch(archivo); 
        }

        function detener(id) {
            fetch('detener_tareas.php?id=' + id)
                .then(() => {
                    document.getElementById('st' + id).innerText = "detenido";
                    document.getElementById('st' + id).style.color = "red";
                });
        }

        function cargarLog() {
    fetch('leer_log.php')
        .then(res => res.text())
        .then(data => {
            document.getElementById('log-container').innerHTML = data;
        });
}

        setInterval(cargarLog, 2000); // Actualiza el log cada 2 segundos
    </script>
</body>
</html>
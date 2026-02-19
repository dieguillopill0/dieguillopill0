function validarFormulario() {

    // Validar radio
    let experiencia = document.getElementsByName("experiencia");
    let seleccionado = false;

    for (let i = 0; i < experiencia.length; i++) {
        if (experiencia[i].checked) {
            seleccionado = true;
        }
    }

    if (!seleccionado) {
        alert("Selecciona tu experiencia.");
        return false;
    }

    // Validar checkbox
    let habilidades = document.getElementsByName("habilidades[]");
    let habilidadSeleccionada = false;

    for (let i = 0; i < habilidades.length; i++) {
        if (habilidades[i].checked) {
            habilidadSeleccionada = true;
        }
    }

    if (!habilidadSeleccionada) {
        alert("Selecciona al menos una habilidad.");
        return false;
    }

    // Validar select
    let area = document.getElementById("area").value;

    if (area === "") {
        alert("Selecciona un área.");
        return false;
    }

    return true; // Si todo está correcto, se envía
}

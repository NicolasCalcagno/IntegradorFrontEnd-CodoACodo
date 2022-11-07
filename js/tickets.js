const VALOR_ENTRADA = 200;
let formulario= document.getElementById("formulario");
let categoria = document.getElementById("categoria");
let cantidad = document.getElementById("cantidad");
let total = document.getElementById("total");

let cardEstudiante = document.getElementById("cardEstudiante");
let cardTrainee = document.getElementById("cardTrainee");
let cardJunior = document.getElementById("cardJunior");

categoria.addEventListener("change", function () {
    MostrarResumen();
    SeleccionarCategoria(categoria.value);
});
cantidad.addEventListener("input", function () {
    MostrarResumen();
});


function MostrarResumen() {
    let importeAPagar;
    
    total.placeholder = "Total a pagar: $";
    if (esCantidadValida() && esCategoriaValida()) {
        console.log(categoria.value);
        switch (categoria.value) {
            case "estudiante":
                importeAPagar = (VALOR_ENTRADA * 0.20)*cantidad.value;
                break;
            case "trainee":
                importeAPagar = (VALOR_ENTRADA * 0.50)*cantidad.value;
                break;
            case "junior":
                importeAPagar = (VALOR_ENTRADA * 0.85)*cantidad.value;
                break;
            default:
                break;
        }

        total.placeholder = "Total a pagar: $"+importeAPagar;
    }
}


function Borrar() {
    formulario.reset();
    LimpiarSeleccionCategoria();
    total.placeholder = "Total a pagar: $";
}


function SeleccionarCategoria(categoriaSeleccionada) {
    LimpiarSeleccionCategoria();

    switch (categoriaSeleccionada) {
        case "estudiante":
            cardEstudiante.style.backgroundColor = "rgb(182, 222, 255)";
            categoria.value = "estudiante";
            MostrarResumen();
            break;
        case "trainee":
            cardTrainee.style.backgroundColor = "rgb(170, 255, 205)";
            categoria.value = "trainee";
            MostrarResumen();
            break;
        case "junior":
            cardJunior.style.backgroundColor = "rgb(255, 218, 150)";
            categoria.value = "junior";
            MostrarResumen();
            break;
        default:
            break;
    }
}

function LimpiarSeleccionCategoria() {
    cardEstudiante.style.backgroundColor = "#FFFFFF";
    cardTrainee.style.backgroundColor = "#FFFFFF";
    cardJunior.style.backgroundColor = "#FFFFFF";
}

function esCantidadValida() {
    let esValida = false;
    const CANTIDAD_MINIMA = 1;

    if ((CANTIDAD_MINIMA <= cantidad.value) && (cantidad.value % 1 == 0)){
        esValida = true;
    }

    return esValida;
}

function esCategoriaValida() {
    let esValida = false;
    const categorias = ["estudiante", "trainee", "junior"];

    for (let i = 0; i < categorias.length; i++){
        if (categoria.value == categorias[i]) {
            esValida = true;
            break;
        }
    }

    return esValida;
}
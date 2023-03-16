let cod = '';

function seleccion(new_cod) {
    cod = new_cod;
}

document.getElementById("eliminar").onclick = function (){
    window.location.href = "./php/eliminar.php?cod=" +cod;
}
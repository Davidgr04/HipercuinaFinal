var check = document.querySelector(".check");
check.addEventListener('click', idioma);

function idioma(idioma) {


    if (idioma == "cat") {
        location.href = "Pagina_inicial.php"
    } else {
        location.href = "Pagina_inicial_cat.php";
    }
}

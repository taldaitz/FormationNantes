function checkDiviseur(element) {
    if(element.value == 0) {
        alert("Non, la division par zéro est interdite");
        element.value = "";
    }
}
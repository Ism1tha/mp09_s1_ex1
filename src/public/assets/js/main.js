/** 
 * Main JS file for the application
 * Author: Ismael Semmar Galvez
 */

/** 
 * Function to destroy a session (General function)
 */

function destroySession() {
    fetch('/destroy-session', {
        method: 'POST'
    }).then(response => {
        if(response.status == 200)
        {
            alert("Sesión eliminada correctamente");
            window.location.href = "/";
        }
    }).catch(error => {
        alert("Error al eliminar la sesión");
    });
}

/* ======= Numeric calculator functions ======= */

function addElementToNumericExpression(element) {
    var expression = document.getElementById('expression');
    expression.value += element;
}

function onSubmitNumeric(event) {
    event.preventDefault();
    var form = document.getElementById('numeric-calculator-form');
    var expression = document.getElementById('expression').value;
    if (expression.match(/[a-zA-Z]/)) {
        alert('La expresión no es válida');
        return;
    }
    form.submit();
}

/* ======= String calculator functions ======= */

function onSubmitString(event) {
    event.preventDefault();
    var form = document.getElementById('string-calculator-form');
    console.log(form);
    form.submit();
}
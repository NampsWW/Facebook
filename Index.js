console.log(window.innerWidth, window.outerWidth, window.outerHeight, window.innerHeight);


function showpwd() {
    if (document.getElementById('pwd').type == "password") {
        document.getElementById('pwd').type = "text";
    }
    else if(document.getElementById('pwd').type == "text"){
        document.getElementById('pwd').type = "password";
    }
}

function showeye() {
    if (document.getElementById('pwd').value == "") {
        document.getElementById('Leye').className = "Leye hidden";
    }
    else if(document.getElementById('pwd').value !== "" && document.getElementById('pwd').type == "password") {
        document.getElementById('Leye').className = "Leye closed";
    }
    else if(document.getElementById('pwd').value !== "" && document.getElementById('pwd').type == "text") {
        document.getElementById('Leye').className = "Leye opened";
    }
}

window.onload = () => showeye();
//alert('eu funciono aqui hhe');

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
        

function maskCEP(input) {
    var tam = input.value.length;
    if (tam == 5) input.value += "-";
}

function maskCelular(input) {
    var tam = input.value.length;

    if (tam == 0) input.value += "+55(";
    // if(tam == 3) input.value += "(";
    if (tam == 6) input.value += ")9.";
    if (tam == 13) input.value += "-"
}

function validarCampos() {
    var estado = true;
    var senha = document.forms["validar"]["senha"].value.trim();
    var confirmarSenha = document.forms["validar"]["csenha"].value.trim();

    if (senha != confirmarSenha) {
        document.getElementById("msgErro").innerHTML = "Senhas diferentes!";
        estado = false;
        return estado;
    }

    if (senha.length < 6 || confirmarSenha.length < 6) {
        document.getElementById("msgErro").innerHTML = "Senha deve ter no mínimo 6 caracteres!";
        estado = false;
        return estado;
    }

    if (estado) document.getElementById("msgErro").innerHTML = "";
    // console.log()
    if (verificaEspaco()) {
        document.getElementById("msgErro").innerHTML = "POR FAVOR, PREENCHA TODOS OS CAMPOS!";
        estado = false;
        return estado;
    }
    return estado;
}

function senhaLoginInvalida() {
    var senha = document.forms["validarLogin"]["senhaLogin"].value.trim();
    if (senha == "") {
        document.getElementById("msgErro").innerHTML = "POR FAVOR, PREENCHA TODOS OS CAMPOS!";
        return false;
    }
    return true;

}

function validateAnuncio() {
    var state = true;
    var emBranco = [
        document.forms["anuncioImoveis"]["nome"].value.trim(),
        document.forms["anuncioImoveis"]["celular"].value.trim(),
        document.forms["anuncioImoveis"]["email"].value.trim(),
        document.forms["anuncioImoveis"]["endereco"].value.trim(),
        document.forms["anuncioImoveis"]["tipo-imovel"].value.trim(),
        document.forms["anuncioImoveis"]["preco"].value.trim()
    ]

    for (var i = 0; i < emBranco.length; i++) {
        // console.log(emBranco[i])
        if (emBranco[i] == "") {
            state = false;
            document.getElementById("msgErro").innerHTML = "POR FAVOR, PREENCHA TODOS OS CAMPOS!";
            return state;
        }
    }

    if (Checkfiles()) {
        state = true;
        return state;
    }
    // senão
    document.getElementById("msgErro").innerHTML = 'Por questões de inviabilidade, as imagens devem possuir a extensão: ".jpg", ".png" ou ".jpeg"!';
    return false;
}

function verificaEspaco() {
    var campoEmBranco = [ // pegando os valores dos campos
        document.forms["validar"]["nome"].value.trim(),
        document.forms["validar"]["endereco"].value.trim(),
        document.forms["validar"]["cep"].value.trim(),
        document.forms["validar"]["celular"].value.trim(),
        document.forms["validar"]["email"].value.trim(),
        document.forms["validar"]["senha"].value.trim(),
        document.forms["validar"]["csenha"].value.trim()
    ]

    var tamEmail = campoEmBranco[4].length;
    if (tamEmail > 80) { // Evitando ataques DDOS
        alert("Não é permitido inserir mais de 80 caracteres em Email! Por favor, use um email menor.")
        return true;
    }

    for (var i = 0; i < campoEmBranco.length; i++) {
        if (campoEmBranco[i] == "")
            return true;
        return false;
    }
}

function senhaPequenaLogin() {
    var status = false;
    var senha = document.forms["validarLogin"]["senhaLogin"].value.trim();

    if (senha.length < 6) {
        document.getElementById("msgErro").innerHTML = "Senha deve ter no minimo 6 caracteres";
        status = true;
        return status;
    }

    if (!status) document.getElementById("msgErro").innerHTML = "";
    return status;
}

function Checkfiles() {
    var fup = document.getElementById('inputImagem');
    var fileName = fup.value;
    var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

    if (ext == "jpeg" || ext == "png" || ext == "jpg") {
        return true; // se obedecer o formato retorna true
    }
    return false; // se não cair no if, cai aqui (else)
}
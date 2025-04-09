// Executar máscaras

function mascara(o, f) {
    objeto = o;
    funcao = f;
    setTimeout(executaMascara, 1);
}

function executaMascara() {
    objeto.value = funcao(objeto.value);
}

// Máscaras

// Máscara do telefone
function cpf(variavel) {
    variavel = variavel.replace(/\D/g, "");
    variavel = variavel.replace(/^(\d{2})(\d)/g, "($1) $2");
    variavel = variavel.replace(/(\d{4})(\d)/, "$1-$2");
    return variavel;
}
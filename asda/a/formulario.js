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
function telefone(variavel) {
    variavel = variavel.replace(/\D/g, "");
    variavel = variavel.replace(/^(\d{2})(\d)/g, "($1) $2");
    variavel = variavel.replace(/(\d{4})(\d)/, "$1-$2");
    return variavel;
}

// Máscara do RG e CPF
function RGeCPF(variavel) {
    variavel = variavel.replace(/\D/g, "");
    variavel = variavel.replace(/(\d{3})(\d)/, "$1.$2");
    variavel = variavel.replace(/(\d{3})(\d)/, "$1.$2");
    variavel = variavel.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
    return variavel;
}

// Máscara do CEP
function cep(variavel) {
    variavel = variavel.replace(/\D/g, "");
    variavel = variavel.replace(/(\d{2})(\d)/, "$1.$2");
    variavel = variavel.replace(/(\d{3})(\d{1,3})$/, "$1-$2");
    return variavel;
}

// Máscara de data
function data(variavel) {
    variavel = variavel.replace(/\D/g, "");
    variavel = variavel.replace(/(\d{2})(\d)/, "$1/$2");
    variavel = variavel.replace(/(\d{2})(\d)/, "$1/$2");
    return variavel;
}

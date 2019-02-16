$(document).ready(function () {

    $("a[rel^='prettyPhoto']").prettyPhoto();



});




//VARIAVEL PARA VERIFICAÇÃO DE E-MAIL
var filtro_mail = /^.+@.+\..{2,3}$/;

//VALIDA MODAL DE CONTATO
function validaContato(form) {

    if (form.nome.value == "") {
        alert("x Preencha o campo com seu Nome");
        form.nome.focus();
        return false;
    }
    if (form.email.value == "") {
        alert("x Preencha o campo com seu Email");
        form.email.focus();
        return false;
    }
    if (!filtro_mail.test(form.email.value) || form.email.value == "") {
        alert("x Preencha o campo com um Email Válido");
        form.email.focus();
        return false;
    }
    if (form.telefone.value == "") {
        alert("x Preencha o campo com seu Telefone");
        form.telefone.focus();
        return false;
    }
    if (form.mensagem.value == "") {
        alert("x Preencha o campo com uma Mensagem");
        form.mensagem.focus();
        return false;
    }
}



 
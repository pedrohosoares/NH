$(document).ready(function() {

   



});



jQuery(document).ready(function() {
    jQuery(".contactForm").validate({
        // Define as regras
        rules: {
            nome: {
                // campoNome será obrigatorio (required) e terá tamanho minimo (minLength)
                required: true,
                minlength: 1
            },
            email: {
                // campoNome será obrigatorio (required) e terá tamanho minimo (minLength)
                required: true,
                minlength: 1
            },
            telefone: {
                // campoNome será obrigatorio (required) e terá tamanho minimo (minLength)
                required: true,
                minlength: 1
            },
            mensagem: {
                // campoNome será obrigatorio (required) e terá tamanho minimo (minLength)
                required: true,
                minlength: 1
            }


        },
        // Define as mensagens de erro para cada regra
        messages: {
            nome: {
                required: "x Preencha o campo com seu nome",
                minlength: "O seu nome deve conter, no mínimo, 1 caracteres"
            },
            email: {
                required: "x Preencha o campo com seu email",
                minlength: "O seu nome deve conter, no mínimo, 1 caracteres"
            },
            telefone: {
                required: "x Preencha o campo com seu telefone",
                minlength: "O seu nome deve conter, no mínimo, 1 caracteres"
            },
            mensagem: {
                required: "x Preencha o campo com uma mensagem",
                minlength: "O seu nome deve conter, no mínimo, 1 caracteres"
            }

        }
    });

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



 
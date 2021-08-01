
function validar() {
  var nome = document.getElementById("formNome");
  var email = document.getElementById("formEmail");
  var celular = document.getElementById("formCelular");

  if (nome.value == "") {
    alert("Nome não informado");
    nome.focus();
    return;
  }

  if (email.value == "") {
    alert("E-mail não informado");
    email.focus();
    return;
  }

  if (celular.value == "") {
    alert("Celular ou Telefone não informado");
    celular.focus();
    return;
  }

  alert("Formulário enviado!");
}

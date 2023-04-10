function validar(nomeTorneio) {
    var codigo = Math.random().toString(36).substring(2, 10).toUpperCase();
    /*var nomeTorneio = document.querySelector("#botao_entrar" + nomeTorneio).parentNode.querySelector("h3").textContent;*/
    alert("Você entrou no torneio: " + nomeTorneio + "\nSeu código de acesso é: " + codigo);
  }
  
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="content-type">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Estilo CSS -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Atividade 1</title>
  </head>
  <body>

    <!-- mensagem de confirmação -->
    <script>

      function verifica() {
      var email = document.getElementById("email").value;
      var emailc = document.getElementById("emailc").value;
      if (email == emailc) {
        alert("E-mail confirmado");
        } else {
          alert("Emails não coincidem!");
        }
    }
    </script>
   <!-- fim da mensagem de confirmação -->
   
  <!-- formulário -->
  <div id="container">
      <form action="valida.php" method="POST">
          <div>
            <b>Nome do usuário: </b><input type="nome" name="nome" placeholder="Digite seu nome" id="nome" /><br/><p></p>
          </div>
          <div>
            <b>Data de Nascimento: </b><input type="nasc" name="nasc" placeholder="Exemplo: 00/00/0000" id="nasc" /><br/><p></p>
          </div>
          <div>
            <b>E-mail: </b><br/><input type="email" name="email" placeholder="Digite seu email" id="email" /><br/><p></p>
          </div>
          <div>
            <b>Confirme seu e-mail: </b><input type="emailc" name="emailc" placeholder="Confirme seu e-mail" id="emailc" onblur="verifica()"  /><br/><p></p>
          </div>

          <button type="submit">Enviar</button>
      </form>

      </div>
  </body>
</html>
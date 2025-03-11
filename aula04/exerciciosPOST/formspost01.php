<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>
<body>
  <form action="expost01.php" method="POST">
    <div>
      <p>
        Crie um formulario que receba um login e senha de um usuario. Faça a validaçao dos campos de modo que o usuario tenha que preencher todos os campo. Se o login for "etec" e a senha for "informatica", exiba uma mensagem na tela de "logado com sucesso" e nao exiba mais o formulario de login
      </p>
    </div>
    <div>
      <label for="login">Login: </label>
      <input type="text" name="login" id="idlogin" required>
    </div>
    <div>
      <label for="pw">Senha: </label>
      <input type="password" name="pw" id="idpw" required>
    </div>
    <button type="submit" class="btn btn-primary" id="bt">Enviar</button>
  </form>
</body>
</html>
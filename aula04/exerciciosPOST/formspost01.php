<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>
<body>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Login</label>
    <input type="login" class="form-control" id="login" aria-describedby="login" required>
    <div id="login" class="form-text">Nunca compartilharemos o seu e-mail</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" id="pw">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="checkb">
    <label class="form-check-label" for="exampleCheck1">Confirmo os dados</label>
  </div>
  <button type="submit" class="btn btn-primary" id="bt">Enviar</button>
</form>
</body>
</html>
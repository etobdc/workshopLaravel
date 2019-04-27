<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
  <form action="" method="POST">
    <div>
      <label for="login">Login</label>
      <input type="email" name="login" required placeholder="Insera seu e-mail">
    </div>
    <div>
      <label for="senha">Senha</label>
      <input type="password" name="senha" required placeholder="Insera sua senha">
    </div>
    <div>
      <button type="submit">Entrar</button>
    </div>
  </form>
</body>

</html>
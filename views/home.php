<body>
  <div class="header">
    <img src="joniralogo.png" alt="Jonirã Supermercados" width="50px">
  </div>

  <div class="container">
    <div class="login-box">
      <div class="left-side">
        <h1>Faça login</h1>
        <img src="joniralogo.png" alt="Jonirã Supermercados">
      </div>

      <div class="right-side">
        <form method="post" action="login.php">
          <label for="username">Nome de usuário</label>
          <input type="text" id="username" name="nm_usuario" placeholder="Nome do usuário">

          <label for="password">Senha</label>
          <input type="password" id="password" name="senha" placeholder="Senha">

          <button class="btn-entrar" type="submit">Entrar</button>
          <button class="btn-registrar" type="button" onclick="window.location.href='registro.php'">Registre-se</button>
        </form>

        <?php if (isset($_GET['erro'])) { ?>
          <div class="alert" role="alert">
            Usuário e/ou senha inválido(s).
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</body>
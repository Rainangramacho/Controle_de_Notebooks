<html>
    <head>
        <title>Login do Sistema</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/login.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="col-xs-offset-4 col-xs-8">
            <h2>Controle de Notebooks FGN</h2>
        </div>
        <div class="centraliza">
        <img src="../../imgs/User.png" class="rounded-circle" alt="Logo" width="20%">
        
        </div>
        <br> <br>
        <div class="col-xs-offset-3 col-xs-9">
            <div class="formulario-login">
                <form class="form-horizontal" action="validaLogin.php" method="POST">
                    <div class="form-group">
                        <label class="control-label col-xs-2" for="usuario">Usuário:</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" id="usuario" placeholder="Digite seu usuário" name="usuario">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2" for="senha">Senha:</label>
                        <div class="col-xs-3"> 
                            <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha">
                        </div>
                    </div>
                    <div class="form-group">        
                        <div class="col-xs-offset-4 col-xs-8">
                            <button type="submit" class="btn btn-default" name="login">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
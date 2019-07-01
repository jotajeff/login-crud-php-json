<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body class="bg-secondary">
    <div class="container">
    <div class="row">
      <br/> <br/> <br/> <br/> <br/>
    </div>
      <!-- Conteúdo -->
      <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
          <div class="panel panel-primary">
            <div class="panel-heading">Login - Painel Administrativo</div>
            <div class="panel-body">
              <form method="post" action="valida.php" name="login">
                <div class="form-group">
                  <label class="control-label">Login:</label>
                  <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control" placeholder="Login" name="login" id="login" maxlength="50" autofocus required/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Senha:</label>
                  <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" class="form-control" placeholder="Senha" name="senha" id="senha" maxlength="20" required/>
                  </div>
                </div>
                <button type="submit" class="btn btn-success">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Rodapé -->
    <div class="footer">
      <div class="col-xs-12 col-md-12">
        <hr/>

        <p class="text-muted bg-info text-center">Sistema desenvolvido por <a href="http://www.avenidavirtual.com.br" target="_blank">Avenida Virtual @</a> 

<?php echo date('Y'); ?>

<!--  echo date('D/M/Y') . '<br />'; // Resultado: Mon/Mar/2013

 echo date('l/m/Y'); // Resultado: Monday/03/2013
?> -->
        </p>


      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>
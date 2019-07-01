<?php 
require_once('conexao.php');
require_once('seguranca.php');
ini_set('default_charset','UTF-8');
session_start();
protegePagina();
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Allget">
  <title>Dashboard</title>

  <!-- Bootstrap -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="row">
      <br/> <br/> <br/> <br/> <br/>
    </div>
    <!-- Cabeçalho -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Simple Login PHP</a>
      </div>
      <div class="navbar-collapse collapse navbar-inverse-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="dashboard.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#"><span class="glyphicon glyphicon-user" id="dadosUsuario" idUsuario="<?php echo $_SESSION['ID']; ?>"></span>  <?php echo $_SESSION['nome']; ?></a>
          </li>
          <li>
            <a href="logout.php"><span class="glyphicon glyphicon-off"></span>  Sair</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>
<!-- Conteúdo -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-12">

      <h1>Hello World</h1>

      <?php echo "<h1>Nivel de Usuário".$_SESSION['nivel']."</h1>"; ?>

      <?php 

      if($_SESSION['nivel']==1){

        echo "<h4 class='text-info'>Você é Administrador</h4>";

      }elseif ($_SESSION['nivel']==2){

        echo "<h6 class='text-danger'>Você é apenas usuário (sem previlégios)</h6>";

      }else{

        echo "Who are you ?";

      }



      ?>


      <pre>
        <?php 
        var_dump($_SESSION);
        ?>
      </pre>



    </div>
  </div>
</div>
<div class="row">
	<div class="col-sm-12">

		<div class="modal fade" id="atendimentoModal" tabindex="-1" role="dialog" aria-labelledby="atendimentoModalLabel" aria-hidden="true">
     <div class="modal-dialog">
      <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel">Dados</h4>
       </div>
       <div class="modal-body" id="dadosConsulta">

       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal">
          Fechar <span class="glyphicon glyphicon-remove"></span>
        </button>
      </div>
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


</body>
</html>
<?php 
    require_once '../php/conecta.php';
?>
<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>Bombeiros</title>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
 <link rel="stylesheet" type="text/css" href="../tabela/style.css">
</head>
    <body>

        <!-- Cabeçalho -->
        <div class="page-header">
            <h1>Bombeiros cadastrados</h1>
            <h2>Adcionar, excluir ou inserir bombeiros abaixo</h2>
        </div>

        <!--Formulário de entrada de dados-->
        <div class="container">
            <form action="../php/verificaadm.php" id="frmPerson" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label for="txtID" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-4">
                        <input type="text" id="Nome" name="Nome" class="form-control" placeholder="Nome">
                    </div>
                </div>                    
                <div class="form-group">
                    <label for="txtName" class="col-lg-2 control-label">CPF</label>
                    <div class="col-sm-4">
                        <input type="number" name="CPF" id="CPF" class="form-control" placeholder="CPF">
                    </div>
                </div>
              <div class="form-group">
                    <label for="txtName" class="col-lg-2 control-label">Telefone</label>
                    <div class="col-sm-4">
                        <input type="text" name="Telefone" id="Telefone" class="form-control" placeholder="Telefone">
                    </div>
                </div>
              <div class="form-group">
                    <label for="txtName" class="col-lg-2 control-label">Email</label>
                    <div class="col-sm-4">
                        <input type="email" name="Email"id="Email" class="form-control" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtName" class="col-lg-2 control-label">Id</label>
                    <div class="col-sm-4">
                        <input type="number" name="Id"id="Id" class="form-control" placeholder="Id">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="txtEmail" class="col-lg-2 control-label">Senha</label>
                    <div class="col-sm-4">
                        <input type="text" id="Senha" name="Senha"class="form-control" placeholder="Senha">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-sm-4">
                        <input type="submit" value="Insertar" id="btnSave" class="btn btn-success"/>
                    </div>
                </div>
            </form>
        </div>      

        <!--Tabela com a lista de dados-->
        <div class="container">
    <?php 
        $comando = $pdo->prepare("SELECT * FROM cadastro");
        $resultado = $comando->execute();
        $r = $comando->fetchAll();

        foreach($r as $row) {?>
            <p>id: <?=$row['id_user'];?></p>
            <p>nome: <?=$row['Nome'];?></p>
        <?php
        }
    ?>
</div>


     
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>

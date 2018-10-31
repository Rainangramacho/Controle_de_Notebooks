<html>
    <?php
        include "../../config.php";
    ?>
    <head>
        <title>Ver clientes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/produto.css">
        <link rel="stylesheet" href="../../css/ver.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <form action="" method="post">
        <div class="row" id="titulo">
            <div class="well well-sm">
                    Professores
            </div>
            <div class="well well-">    
                <input type="text" class="form-control" id="idProfessor" placeholder="Id do Professor" name="idProfessor">
            </div>
        </div>

        <div class="row" id="tabela">
            <div class="table-responsible">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Professor</th>
                            <th>Curso</th>
                            <th>Entrada </th>
                            <th>Saída</th>
                            <th>Status</th>
                            
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           if(isset($_POST["idProfessor"])){
                                    
                            $idProfessor = $_POST['idProfessor'];
                        
                            $sqlSelect = "SELECT * FROM professores WHERE idProfessor = $idProfessor";
                            $query = mysqli_query($mysqli,$sqlSelect);

                            while ( $sqlSelect = mysqli_fetch_array($query)) {
                                $nome = $sqlSelect["nome"];
                                $curso = $sqlSelect["curso"];
                                $entrada = $sqlSelect["entrada"];
                                $saida = $sqlSelect["saida"];
                                $status = $sqlSelect["statuss"];
                                
                            
                                echo "<tr>
                                           
                                            <td>$nome</td>
                                            <td>$curso</td>
                                            <td>$entrada</td>
                                            <td>$saida</td>
                                            <td>$status</td>
                                            

                                            
                                            
                                        </tr>";
                                        
                            }
                            echo "<tr>
                            
                                            <td><input type='text' class='form-control' id='nome1' placeholder='Nome' name='nome1'></td>
                                            <td><input type='text' class='form-control' id='nomeCompleto1' placeholder='Nome Completo' name='nomeCompleto1'></td>
                                            <td><input type='submit' name='editar' class='btn btn-danger' value='Editar'></input></td>
                         </tr>"; 
                        }
                        if(isset($_POST['editar']) && !empty($_POST["nome1"])){                                
                            $status = $_POST["nome1"];
                            $sqlEditar = "UPDATE professores SET statuss='$status' WHERE idProfessor = $idProfessor ";
                            $query = mysqli_query($mysqli,$sqlEditar);							
                        }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
         </form>
    </body>
</html>
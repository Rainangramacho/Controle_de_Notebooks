<?php
    if(isset($_POST["login"])){
        $login = $_POST["usuario"];
        $senha = $_POST["senha"];

        if(isset($login) and isset($senha)){
            if($login=="admin" and $senha=="admin"){
                header('Location: ../lista_de_notebooks/listar_notebooks.php');
                exit;
            }
          
            else{
                echo "<h2 style='color: red;'>Houston, We have a problem!</h2>";
            }
        }
    }
?>
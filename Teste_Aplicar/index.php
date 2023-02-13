<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Teste Aplicar</title>
        <script type="text/javascript">
        function validaCampo()
        {
        if(document.cadastro.nome.value=="")
            {
            alert("O Campo nome é obrigatório!");
            return false;
            }
        else
            if(document.cadastro.cnpj.value=="")
            {
            alert("O Campo CNPJ é obrigatório");
            return false;
            }
        else
            if(document.cadastro.endereco.value=="")
            {
            alert("O Campo endereço é obrigatório!");
            return false;
            }
        else
            if(document.cadastro.telefone.value=="")
            {
            alert("O Campo telefone é obrigatório!");
            return false;
            }
            else
            return true;
        }
        </script>
    </head>
    <body>
        <h1>Teste Aplicar</h1>
        <div class="container">
        <form id="cadastro" name="cadastro" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validaCampo(); return false;">
            <tr>
                <td>Nome: <input type="text" name="nome"><br></td>
                <td>CNPJ: <input type="number" name="cnpj"><br></td>
                <td>Endereço: <input type="text" name="endereco"><br></td>
                <td>Telefone: <input type="number" name="telefone"><br></td>
                <td><input type="submit" value="Gravar" ></td>
            </tr>
        </form>
        </div>
        <div class="clientes">
            <p>Clientes</p>
        
            <?php
            require_once 'cliente.php';
                $cliente = new Cliente();
                //$cliente->gravarDados();
                $cliente->buscarDados();
                $cliente->calcularMedia();
            ?>

      
        </div>
   
        </div>
        </div class="media">
            <?php
               
            ?>
        </div>

        <?php
        
        ?>

    </body>
</html>
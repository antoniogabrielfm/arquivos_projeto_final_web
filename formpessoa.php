<?php
include "cabecalho.php";
?>

<form name="form1" action="cadastrarpessoa.php" method="post">
    <fieldset>
        <legend>Cadastro</legend>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="valor">Email</label>
        <input type="text" name="email" id="email">
        <label for="valor">Telefone</label>
        <input type="text" name="telefone" id="telefone">
        <label for="valor">Celular</label>
        <input type="text" name="celular" id="celular">
        <label for="categoria">Categoria</label>
        <select name="categoria" id="categoria">
            <option value="0">Selecione...</option>

            <?php
            // aqui vai o conteúdo do combo que vem do DAO!
            include "dao/BancoPDO.php";
            include "dao/CategoriaDAO.php";
            $categorias = new CategoriaDAO();
            echo $categorias->montarcombo();
            ?>

        </select>
        <input type="submit" name="acao" value="Enviar" class="botao"/>
    </fieldset>	
</form>

<?php
include "rodape.php";
?>


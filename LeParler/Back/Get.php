<div class="container" style="margin-top:40px">

    <table class="table table-bordered">
        <thead class="border">
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Título</th>
                <th scope="col">Texto</th>
                <th scope="col">Crítica</th>
                <th scope="col">Imagem</th>
                <th scope="col">Autor</th>
                <th scope="col">Categoria</th>
            </tr>
        </thead>

        <tr>
            <?php
            include "conexao.php";
            $sql = "SELECT * FROM `resenha`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $resenha_id = $array['resenha_id'];
                $data = $array['data'];
                $texto = $array['texto'];
                $titulo = $array['titulo'];
                $critica = $array['critica'];
                $imagem = $array['imagem'];
                $pessoa = $array['pessoa'];
                $categoria = $array['categoria'];



                ?>

                <td>
                    <?php echo $data ?>
                </td>

                <td>
                    <?php echo $texto ?>
                </td>

                <td>
                    <?php echo $titulo ?>
                </td>

                <td>
                    <?php echo $critica ?>
                </td>

                <td>
                    <?php echo $imagem ?>
                </td>

                <td>
                    <?php echo $pessoa ?>
                </td>

                <td>
                    <?php echo $categoria ?>
                </td>

                <td><a class="btn btn-light" href="editarTutor.php?id=<?php echo $idTutor ?>" role="button">Editar</a>
                    <a class="btn btn-danger" href="excluirTutor.php?id=<?php echo $idTutor ?>" role="button">Excluir</a>
                    <a class="btn" href="../phpPet/cadastrarPet.php?id=<?php echo $idTutor ?>" role="button">teste</a>


            </tr>

        <?php } ?>


    </table>
</div>
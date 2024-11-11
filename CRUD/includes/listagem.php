<?php

    $resultados = '';
    foreach($clientes as $cliente){
        $resultados .= '<tr>
                            <td>'.$cliente->id_cliente.'</td>
                            <td>'.$cliente->nome.'</td>
                            <td>'.$cliente->email.'</td>
                            <td>'.$cliente->telefone.'</td>
                            <td>'.$cliente->endereco.'</td>
                            <td>
                                <a href="editar.php?id='.$cliente->id_cliente.'">
                                    <button type="button" class="btn btn-primary">EDITAR</button>
                                </a>
                                <a href="excluir.php?id='.$cliente->id_cliente.'">
                                    <button type="button" class="btn btn-danger">EXCLUIR</button>
                                </a>
                            </td>
                        </tr>';
    }



?>

<main>
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Novo Cliente</button>
        </a>
    </section>

    <section>
        <table class="table mt-3">
            <thead>
                <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>TELEFONE</th>
                <th>ENDERECO</th>
                <th>AÇÕES</th>
                </tr>
            </thead>
            <tbody>

                <?=$resultados?>

            </tbody>
        </table>
    </section>



</main>
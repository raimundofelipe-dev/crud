<main>
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Nova vaga</button>
        </a>
    </section>
    <section>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Descricao</th>
                    <th>Ativo</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($vagas as $vaga) { ?>
                    <tr>

                        <td><?= $vaga->titulo ?></td>
                        <td><?= $vaga->descricao ?></td>
                        <td><?= $vaga->ativo == 's' ? 'Ativo' : 'Inativo' ?></td>
                        <td><?= date('d/m/Y', strtotime($vaga->data)) ?></td>
                        <td>
                            <a href="editar.php?id=<?= $vaga->id ?>">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="excluir.php?id=<?= $vaga->id ?>">
                                <button class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </section>
</main>
<main class="text-dark">
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>
    <h2 class="mt-3"><?= TITLE ?></h2>
    <form method="post">
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="titulo" value="<?= $obVaga->titulo ?>">
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="descricao" rows="4"><?= $obVaga->descricao ?></textarea>
        </div>

        <div class="form-group">
            <label class="mt-2">Status</label>

            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ativo" value="s" checked>
                    <label class="form-check-label">Ativo</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ativo" value="n" <?= $obVaga->ativo == 'n' ? 'checked' : '' ?>>
                    <label class="form-check-label">Inativo</label>
                </div>
            </div>

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">enviar</button>
        </div>

    </form>
</main>
<div class="container mt-3">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $this->config->base_url() . 'index.php' ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastro de Imóveis</li>
        </ol>
    </nav>

    <div class="alert alert-light mt-3" role="alert">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        if (isset($mensagem)) {
            echo $mensagem;
        }
        ?>
    </div>

    <div class='row my-5'>
        <div class='col-md-12'>
            <div class='card'>
                <div class='card-body shadow'>
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Informações do imóvel</h2>
                            <form acttion="" method="POST">
                                <hr>
                                <br>
                                <input class="form-control form-control-lg" type="hidden" name='id' id='id' value='<?= (isset($imoveis)) ? $imoveis->id_imovel : ''; ?>' >
                                <div class="form-group py-2">
                                    <label for="titulo">Título:</label>
                                    <input  class="form-control form-control-lg" type="text" name="titulo" id="titulo"  value="<?= (isset($imoveis)) ? $imoveis->tx_titulo : ''; ?> ">
                                </div>
                                <br>
                                <select class="custom-select mb-5" name="id_tipo" id="id_tipo">
                                    <option selected hidden disabled>Selecione o tipo do imóvel.</option>
                                    <?php
                                    if ($tipos != null) {
                                        foreach ($tipos as $t) {
                                            echo '<option ';
                                            ((isset($imoveis)) && $t->id_tipo == $imoveis->id_imovel) ? 'selected' : '';
                                            echo ' value="' . $t->id_tipo . '">' . $t->tx_descricao . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <br>
                                <select class="custom-select mb-5" name="id_status" id="id_status">
                                    <option selected hidden disabled>Selecione o status do imóvel.</option>
                                    <?php
                                    if ($status != null) {
                                        foreach ($status as $s) {
                                            echo '<option ';
                                            ((isset($imoveis)) && $s->id_status == $imoveis->id_imovel) ? 'selected' : '';
                                            echo ' value="' . $s->id_status . '">' . $s->tx_descricao . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <br>
                                <select class="custom-select mb-5" name="id_categoria" id="id_categoria">
                                    <option selected hidden disabled>Selecione a categoria do imóvel.</option>
                                    <?php
                                    if ($categorias != null) {
                                        foreach ($categorias as $c) {
                                            echo '<option ';
                                            ((isset($imoveis)) && $c->id_categoria == $imoveis->id_imovel) ? 'selected' : '';
                                            echo ' value="' . $c->id_categoria . '">' . $c->tx_descricao . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <br>
                                <label for="valor">Valor:</label>
                                <input class="form-control form-control-lg" type="text" name="valor" id="valor" value="<?= (isset($imoveis)) ? $imoveis->vl_valor : ''; ?> ">
                                <br>
                                <label for="descricao">Descrição:</label>
                                <textarea class="form-control form-control-lg mb-4"  name="descricao" id="descricao" value=""><?= (isset($imoveis)) ? $imoveis->tx_descricao : ''; ?></textarea>
                                <button type="submit" class="btn btn-outline-success">Enviar</button>
                                <button type="reset" class="btn btn-outline-secondary">Limpar</button>
                        </div>
                        <div class="col-md-6 float-right">
                            <h2>Detalhes do imóvel</h2>
                            <hr>
                            <br>
                            <table class="table table-striped">
                                <tbody>
                                    <?php
                                    if ($detalhes != null) {
                                        foreach ($detalhes as $d) {
                                            echo '<tr>';
                                            echo '<th>'
                                            . $d->tx_descricao;
                                            echo '</th>';
                                            echo '<th width="25%">'
                                            . '<input class="form-control form-control-md" type="number" name="detalhe[' . $d->id_tipodetalhes . ']" id="detalhe" value="">';
                                            echo '</th>';
                                            echo '</tr>';
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

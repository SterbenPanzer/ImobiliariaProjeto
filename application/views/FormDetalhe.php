<div class="container mt-3">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $this->config->base_url() . 'index.php' ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastro de Detalhes</li>
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
        <div class="col-md-3"></div>
        <div class='col-md-6'>
            <div class='card'>
                <div class="card-header bg-dark text-light">
                    <h2> Formulário de Detalhes</h2>
                </div>
                <div class='card-body shadow'>
                    <form acttion="" method="POST">
                        <br>
                        <input class="form-control form-control-lg" type="hidden" name='id' id='id' value='<?= (isset($detalhes)) ? $detalhes->id_tipodetalhes : ''; ?>' >
                        <label for="descricao">Detalhe:</label>
                        <input  class="form-control form-control-lg" type="text" name="descricao" id="descricao"  value="<?= (isset($detalhes)) ? $detalhes->tx_descricao : ''; ?> ">
                        <br>
                        <button type="submit" class="btn btn-outline-success">Enviar</button>
                        <button type="reset" class="btn btn-outline-secondary">Limpar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


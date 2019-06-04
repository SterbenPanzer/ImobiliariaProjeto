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
        <div class="col-md-3"></div>
        <div class='col-md-6'>
            <div class='card'>
                <div class='card-body shadow'>
                    <form acttion="" method="POST">
                        <h2>Formulário de imóveis</h2>
                        <br>
                        <input class="form-control form-control-lg" type="hidden" name='id' id='id' value='<?= (isset($imovel)) ? $imovel->id_imovel : ''; ?>' >
                        <label for="titulo">Título:</label>
                        <input  class="form-control form-control-lg" type="text" name="titulo" id="titulo"  value="<?= (isset($imovel)) ? $imovel->tx_titulo : ''; ?> ">
                        <br>
                        <label for="status">Status:</label>
                        <input class="form-control form-control-lg" type="text" name="status" id="status" value="<?= (isset($imovel)) ? $imovel->tx_status : ''; ?> ">
                        <br>
                        <label for="descricao">Descrição:</label>
                        <textarea class="form-control form-control-lg"  name="descricao" id="descricao" value=""><?= (isset($imovel)) ? $imovel->tx_descricao : ''; ?></textarea>
                        <br>
                        <label for="valor">Valor:</label>
                        <input class="form-control form-control-lg" type="text" name="valor" id="valor" value="<?= (isset($imovel)) ? $imovel->vl_valor : ''; ?> ">
                        <br>
                        <button type="submit" class="btn btn-outline-success">Enviar</button>
                        <button type="reset" class="btn btn-outline-secondary">Limpar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

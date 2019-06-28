<div class="container mt-3">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Cadastro de contato da empresa</li>
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
                    <h2> Formulário de Contato</h2>
                </div>
                <div class='card-body shadow'>
                    <form acttion="" method="POST">
                        <br>
                        <input class="form-control form-control-lg" type="hidden" name='id' id='id' value='<?= (isset($contatos)) ? $contatos->id_faleconosco : ''; ?>' >
                        <label for="empresa">Nome da empresa:</label>
                        <input  class="form-control form-control-lg" type="text" name="empresa" id="empresa"  value="<?= (isset($contatos)) ? $contatos->tx_nomeempresa : ''; ?> ">
                        <br>
                        <label for="endereco">Endereço:</label>
                        <input  class="form-control form-control-lg" type="text" name="endereco" id="endereco"  value="<?= (isset($contatos)) ? $contatos->tx_endereco : ''; ?> ">
                        <br>
                        <label for="telefone">Telefone:</label>
                        <input  class="form-control form-control-lg" type="text" name="telefone" id="telefone"  value="<?= (isset($contatos)) ? $contatos->nm_telefone : ''; ?> ">
                        <br>
                        <label for="celular">Celular:</label>
                        <input  class="form-control form-control-lg" type="text" name="celular" id="celular"  value="<?= (isset($contatos)) ? $contatos->nm_celular : ''; ?> ">
                        <br>
                        <label for="email">Email:</label>
                        <input  class="form-control form-control-lg" type="text" name="email" id="email"  value="<?= (isset($contatos)) ? $contatos->tx_email : ''; ?> ">
                        <br>
                        <button type="submit" class="btn btn-outline-success">Enviar</button>
                        <button type="reset" class="btn btn-outline-secondary">Limpar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
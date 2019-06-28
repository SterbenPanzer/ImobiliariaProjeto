<div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Visualização do contato da empresa</li>
        </ol>
    </nav>
    <div class="alert alert-light mt-3 " role="alert">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        if (isset($mensagem)) {
            echo $mensagem;
        }
        ?>
    </div>  

    <div class='mt-5 table-responsive shadow'>
        <table class="table" id="example">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome da empresa</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Email</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    echo '<tr>';
                    echo '<td>' . $contatos->tx_nomeempresa . '</td>';
                    echo '<td>' . $contatos->tx_endereco . '</td>';
                    echo '<td>' . $contatos->nm_telefone . '</td>';
                    echo '<td>' . $contatos->nm_celular . '</td>';
                    echo '<td>' . $contatos->tx_email . '</td>';
                    echo '<td>'
                    . '<a class="btn btn-sm btn-outline-secondary mr-2"  role="button"   href="' . $this->config->base_url() . 'Faleconosco/alterar/' . $contatos->id_faleconosco . '"><i class="fas fa-pen"></i> Alterar </a>'
                    . '<a class="btn btn-sm btn-outline-secondary "  role="button"   href="' . $this->config->base_url() . 'Faleconosco/deletar/' . $contatos->id_faleconosco . '"><i class="fas fa-times"></i> Deletar </a>'
                    . '</td>';
                    echo '</tr>';
                ?>
            </tbody>
        </table>
    </div>

    </div>
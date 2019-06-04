<div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Visualização de Imóveis</li>
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
                    <th scope="col">Título</th>
                    <th scope="col">Status</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($imoveis as $i) {
                    echo '<tr>';
                    echo '<td>' . $i->tx_titulo . '</td>';
                    echo '<td>' . $i->tx_status . '</td>';
                    echo '<td>' . $i->tx_descricao . '</td>';
                    echo '<td>' . 'R$ ' . $i->vl_valor . '</td>';
                    echo '<td>'
                    . '<a class="btn btn-sm btn-outline-secondary mr-2"  role="button"   href="' . $this->config->base_url() . 'index.php/Imovel/alterar/' . $i->id_imovel . '"><i class="fas fa-pen"></i> Alterar </a>'
                    . '<a class="btn btn-sm btn-outline-secondary "  role="button"   href="' . $this->config->base_url() . 'index.php/Imovel/deletar/' . $i->id_imovel . '"><i class="fas fa-times"></i> Deletar </a>'
                    . '</td>';

                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


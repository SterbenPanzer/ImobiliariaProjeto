<div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Visualização de Status</li>
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
                    <th scope="col">Status</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($status as $s) {
                    echo '<tr>';
                    echo '<td>' . $s->tx_descricao . '</td>';
                    echo '<td>'
                    . '<a class="btn btn-sm btn-outline-secondary mr-2"  role="button"   href="' . $this->config->base_url() . 'Status/alterar/' . $s->id_status . '"><i class="fas fa-pen"></i> Alterar </a>'
                    . '<a class="btn btn-sm btn-outline-secondary "  role="button"   href="' . $this->config->base_url() . 'Status/deletar/' . $s->id_status . '"><i class="fas fa-times"></i> Deletar </a>'
                    . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>